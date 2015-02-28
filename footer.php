<?php
/*
inmeng theme footer.php
theme by inmeng(http://inmeng.xyz)
all rights reserved
*/
?>
<footer>
    <div class="ifooter" style="Opacity:.7;">
      <div class="container" >
        <ul class="pull-left copyright" style="font-size:14px;font-family:comic sans ms;">
          <i class="fa fa-copyright"></i> &copy;Copyright <?php _e(date('Y')) ?>&nbsp;<a style="color:#199EF8;" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a> | 
        
          Powered by <a style="color:#199EF8;" href="http://typecho.org" target="_blank">Typecho</a> |
          Designed and Optimized by <a style="color:#199EF8;" href="http://inmeng.xyz">吟梦</a> |
		  <a style="color:#199EF8;" href="http://www.miibeian.gov.cn/">有备案号的请填在这里哦</a>
        </ul>
      </div>
    </div>
  </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php $this->options->adminUrl('js/jquery.js'); ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="<?php $this->options->themeUrl('js/jquery.scrollUp.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/3D-Tags.js?v='.time());  ?>"></script>
    <script>
    $(document).ready(function(){
      $('.comment-list').addClass("list-group");
      $('.comment-parent').addClass("list-group-item");
      $('.comment-body').addClass("thumbnail");
      $('.comment-author').addClass('pull-left');
      $('.comment-meta').addClass('pull-right');
      $('#captcha input').addClass('form-control pull-left');
      $('#captcha img').addClass('pull-right');
      $('#captcha br').remove();
      $('#captcha strong').remove();
    });
    $.scrollUp({
      scrollImg: true,
      scrollText: "回顶部"
    });
    </script>

</body>