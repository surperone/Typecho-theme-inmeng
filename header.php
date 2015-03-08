<?php
/*inmeng theme header.php
theme by inmeng (http://inmeng.xyz)
All rights reserved.
*/
?>
<!DOCTYPE HTML>
<html lang="zh-cn">
<head>
<script type="text/javascript" src="http://api.hitokoto.us/rand?encode=js&charset=utf-8"></script>
<meta charset="<?php $this->options->charset(); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
<link rel="stylesheet" href="<?php $this->options->themeUrl('style/style.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('style/bootstrap.css'); ?>">
<?php $this->header();  //通过自有函数输出站点头部信息 ?>  
  <style>
  div.display,div.mydisplay{display: none;}
  <?php if (!empty($this->options->isIndent) && 'IsIndentTrue' == $this->options->isIndent): ?>
  .post-content p{text-indent: 2em;}
  <?php endif; ?>
.list-group{

width:40%
float:left;
}

.panel {
margin-left:0px;
background-color:white;
padding-top:10px;
padding-bottom:10px;
padding-left:20px;
padding-right:20px;
margin:10px 10px;
border-radius: 2px;
border: 0;
box-shadow: 0 1px 6px rgba(0,0,0,.12),0 1px 6px rgba(0,0,0,.12);
}

.panel span{
font-family:microsoft yahei;
}

.panel span > a{
text-decoration:none;
}
.list-group a{
background-color:#fff;
margin-top:-1px;
margin-bottom:0;
padding-top:10px;
padding-bottom:10px;
padding-left:10px;
padding-right:10px;
border:1px solid silver;
display:block;
text-decoration:none;
font-family:Microsoft Yahei;
border: 0;
box-shadow: 0 1px 6px rgba(0,0,0,.12),0 1px 6px rgba(0,0,0,.12);
}

.list-group span{
display:block;
background-color:#7CE1FB;
padding-top:8px;
padding-bottom:8px;
padding-left:10px;
font-family:comic sans ms;
color:white;
margin-bottom:0;
margin-top:20px;
font-size:16px;
border-radius: 6px;
border: 0;
box-shadow: 0 1px 6px rgba(0,0,0,.12),0 1px 6px rgba(0,0,0,.12);
}
  .billboard {
    background: url(<?php $this->options->themeUrl('imgs/billboard.jpg'); ?>) center -20px repeat-x;
    background-size: cover;
    padding: 120px 0 70px;
  }
  .page404{
    background: url(<?php $this->options->themeUrl('imgs/404.jpg'); ?>) center -20px repeat-x;
    background-size: cover;
    margin-top:20px;
    padding: 120px 0px 400px 0px;
    color: #FFF;
  }
  
  #scrollUp {
    bottom: 20px;
    right: 20px;
    width: 38px; /* Width of image */
    height: 38px; /* Height of image */
    background: url(<?php $this->options->themeUrl('imgs/top.png'); ?>) no-repeat;
  }
  </style>
</head>
<body>
<header>
 <div class="navbar navbar-fixed-top navbar-inverse" role="navigation" style="opacity:.7;"> 
 <div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" id="logo" href="<?php $this->options->siteUrl(); ?>">
<?php if ($this->options->logoUrl): ?>
<a href="<?php $this->options->siteUrl(); ?>">首页</a>
<?php endif; ?>
<?php $this->options->title() ?>
            </a>
          </div>
		    <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?php if($this->is('index')): ?> class="active"<?php endif; ?> >
                 <a href="<?php $this->options->siteUrl(); ?>">首页</a>
                </li>
                <?php $this->widget('Widget_Metas_Category_List')->to($pages); ?>
                <?php while($pages->next()): ?>
                <li <?php if($this->is('category',$pages->slug)): ?> class="active"<?php endif; ?> >
                  <a href="<?php $pages->permalink(); ?>" title="<?php $pages->name(); ?>"><?php $pages->name(); ?></a>
                </li>
                <?php endwhile; ?>
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                  <?php while($pages->next()): ?>
                  <li <?php if($this->is('page',$pages->slug)): ?> class="active"<?php endif; ?> >
                  <a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                  </li>
                <?php endwhile; ?>
            </ul>
          </div>
		  </div>

 </div>
</header>
