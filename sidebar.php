<?php
/*
inmeng theme sidebar.php
theme by inmeng(http://inmeng.xyz)
all rights reserved
*/
?>
<br/>
<script>hitokoto()</script>
<!--不需要一言的话注释掉上面一行-->
<div class="isidebar">
<div class="list-group">
<span>Welcome</span>
<a class="active">
<?php
$whattime=date('G');
$whattime += 8;
if($whattime>=6 && $whattime<12){
echo "早上好，欢迎来到".$this->options->title."!";
} elseif($whattime>=12 && $whattime<18){
echo "下午好，欢迎来到".$this->options->title."！";
} elseif($whattime>=18 && $whattime<=23){
echo "晚上好，欢迎来到".$this->options->title."！";
} else{
echo"夜深了哦，请您赶快休息哦，不要把身体累坏呢^_^ ";
}
?>
</a>

<span>Recently</span>
<?php $this->widget('Widget_Contents_Post_Recent')->parse('<a class="list-group-item" href="{permalink}">{title}</a>'); ?>
<span>Friends</span>
<span>Comments</span>
 <!--如果使用多说/畅言之类的插件，可以把下面的代码替换掉-->
		<?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
        <?php while($comments->next()): ?>
            <a class="list-group-item" href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?>:<?php $comments->excerpt(20, '...'); ?></a>
        <?php endwhile; ?>
<span>Article</span>
        <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y年m月')->parse('<a class="list-group-item" href="{permalink}">{date}</a>'); ?>
<span>Other</span>
 <?php if($this->user->hasLogin()): ?>
			<a class="list-group-item" href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a>
            <a class="list-group-item" href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a>
        <?php else: ?>
            <a class="list-group-item" href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a>
        <?php endif; ?>
        <a class="list-group-item" href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a>
        <a class="list-group-item" href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a>
</div>
</div>
