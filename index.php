<?php
/**
*这是吟梦自设计的一套模版 inmeng。你可以访问<a href="http://inmeng.xyz">吟梦博客</a>查看详情。<br/>侧边栏提供了友情链接功能，需要Hanny的<a href="http://www.imhan.com/tag/%E5%8F%8B%E6%83%85%E9%93%BE%E6%8E%A5/">Links</a>插件支持，未安装不影响使用哦。<br/>评论使用<a href="http://typecho.org/archives/54/">Captcha的验证码</a>插件，未安装也不影响使用哦。<br/>niconiconi~
*
*@package Inmeng's Theme
*@author 吟梦
*@version 1.0
*@link http://inmeng.xyz
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 <img src="<?php $this->options->themeUrl('imgs/billboard.jpg');?>" width="100%">
<div class="blankarea">

<form   id="search" method="post" action="./" role="search">
	     <div class="input-group">
	       <input type="text" placeholder="想要找什么嘛？我可以帮你哦niconiconi~" class="form-control" name="s" >
	        <span class="input-group-btn">
	          <button class="btn btn-default" type="submit"><i class="fa fa-search fa-fw"></i>搜索</button>
	        </span>
			
	    </div><!-- /input-group -->
	</form>
<div style="position:relative;float:tight;">
	
	</div>

</div>
<div class="container" <?php if(!$this->is('index')): ?> id="main" <?php endif; ?> >
	<div class="row">
		<div class="col-md-9" role="main">
			<?php while($this->next()): ?>
		        <div class="row">
				<div class="panel">
					<h3 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
					<div class="post-meta">
						<span><?php _e('作者：'); ?><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> | </span>
						<span><?php _e('写于'); ?><?php $this->date('F j, Y'); ?> | </span>
						<span><?php _e('归类在'); ?><?php $this->category(','); ?> | </span>
						<span><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论	', '1 条评论', '%d 条评论'); ?></a></span>
						<p></p>
					</div>
		            <div class="post-content">
		    			<?php $this->content('- 阅读全文吗？ -'); ?>
		            </div>
					</div>
		        </div>
		        <hr/>
			<?php endwhile; ?>
	    	<?php $this->pageNav('&laquo; ', '&raquo;',4,'...',array('wrapClass'=>'pagination','currentClass'=>'active')); ?>
			<br/><br/><br/>
		</div><!-- end #col-md-8 -->
         
		<div class="col-md-3"><?php $this->need("sidebar.php");	?></div>
	</div>
</div>
</div>

<?php
$this->need("footer.php");
?>