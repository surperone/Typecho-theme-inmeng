<?php
/*
inmeng theme comments.php
theme by inmeng(http://inmeng.xyz)
All rights reserved.
*/
?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>


	<div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title"><?php $this->commentsNum(_t('还没有评论呢……'), _t('沙发被抢了呢……'), _t('已经有 %d 条评论啦！')); ?></h3>
        </div>
          <?php $comments->listComments(array(
            'replyWord'=>'<button type="button" class="btn btn-info btn-xs">回复</button>',
           )); ?>
      </div>

    <?php $comments->pageNav('&laquo; ', '&raquo;',3,'...',array('wrapClass'=>'pagination','currentClass'=>'active')); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply('<button type="button" class="btn btn-info btn-xs">取消回复</button>'); ?>
        </div>
    
    	<h3 id="response"><?php _e('我也来评论！'); ?></h3>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form" class="form-horizontal">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份：'); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>

            <div class="form-group">
                <label for="author" class="col-sm-2 control-label required"><?php _e('昵称'); ?></label>
                <div class="col-sm-9">
                  <input type="text" name="author" id="author"  class="form-control text" value="<?php $this->remember('author'); ?>" required />
                </div>
            </div>

            <div class="form-group">
                <label for="mail"  class="col-sm-2 control-label<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?>"><?php _e('Email'); ?></label>
                <div class="col-sm-9">
                    <input type="email" name="mail" id="mail" class="form-control text" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
                </div>

            </div>

            <div class="form-group">
                <label for="url" class="col-sm-2 control-label <?php if ($this->options->commentsRequireURL): ?>  required<?php endif; ?>"><?php _e('网站/首页'); ?></label>
                <div class="col-sm-9">
                  <input type="url" name="url" id="url"  class="form-control text" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>" <?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
                </div>
            </div>
            <?php endif; ?>


            <div class="form-group">
                <label for="textarea" class="col-sm-2 control-label required"><?php _e('内容'); ?></label>
                <div class="col-sm-9">
                  <textarea rows="9" cols="50" name="text" id="textarea" class="form-control textarea " required ><?php $this->remember('text'); ?></textarea>
                </div>
            </div>
            <?php if (class_exists("Captcha_Plugin")) :?>
            <div class="form-group">
                <label for="captcha" class="col-sm-2 control-label required"><?php _e('验证码'); ?></label>
                <div class="col-sm-5 captcha" id="captcha">
                  <?php Captcha_Plugin::output(); ?>
                </div>
            </div>
            <?php endif; ?>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-5" >
                    <button type="submit" class="submit btn btn-success"><?php _e('提交评论'); ?></button>
                </div>
              </div>

    	</form>
    </div>
    <?php else: ?>
    <div class="alert alert-warning"><?php _e('真抱歉哎，po主把评论功能关闭了，去评论别的文章吧~'); ?></div>
    <?php endif; ?>
</div>
