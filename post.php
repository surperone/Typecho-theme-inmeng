<?php
/*
inmeng theme post.php
theme by inmeng(http://inmeng.xyz)
All rights reserved.
*/
?>
<?php $this->need('header.php'); ?>
<p style="padding-top:10px;"></p>
 <img src="<?php $this->options->themeUrl('imgs/billboard.jpg');?>" width="100%">
<br/><br/>
<div class="container" id="main" >
    <div class="row">
        <div class="col-md-9" role="main">
                <div class="row">
                    <h3 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
                    <div class="post-meta">
                        <span><?php _e('这是他写的→'); ?><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> | </span>
                        <span><?php _e('写于'); ?><?php $this->date('F j, Y'); ?> | </span>
                        <span><?php _e('归类在'); ?><?php $this->category(','); ?> | </span>
                        <span><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></span>
                    </div><br/><br/>
                    <div class="post-content">
                        <?php $this->content(); ?>
                    </div>
                </div>
     

                <p class="tags"><?php _e('标签：'); ?>
                    <?php 
                        foreach ($this->tags as $value) {
                            _e(' <a href="'.$value['permalink'].'"><span  class="label label-success">'. $value['name'].'<span></a> ');
                        }
                    ?>     
                </p>
                
                <hr/>
                <div class="row">
                    <?php $this->need('comments.php'); ?>
                </div>

        </div><!-- end #col-md-8 -->

        <div class="col-md-3"><?php $this->need("sidebar.php"); ?></div>
    </div>
</div>


<?php $this->need('footer.php'); ?>
