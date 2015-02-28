<?php
/*
inmeng theme page.php
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
                    <div class="post-content">
                        <?php $this->content(); ?>
                    </div>
                </div>
                <hr/>
                <div class="row">
                	<?php $this->need('comments.php'); ?>
                </div>
        </div><!-- end #col-md-8 -->

        <div class="col-md-3"><?php $this->need("sidebar.php"); ?></div>
    </div>
</div>

<?php $this->need('footer.php'); ?>
