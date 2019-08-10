<?php
/* Smarty version 3.1.30, created on 2019-08-10 16:29:31
  from "C:\wamp64\www\_tpl\default\1.5\layout\login-header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d4ee2db706380_38739937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a3dea09d892fe924c51f094e96f195c05a8e9d5' => 
    array (
      0 => 'C:\\wamp64\\www\\_tpl\\default\\1.5\\layout\\login-header.tpl',
      1 => 1562146817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4ee2db706380_38739937 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
	<title><?php if ($_smarty_tpl->tpl_vars['seo_title']->value) {
echo $_smarty_tpl->tpl_vars['seo_title']->value;
} else {
echo $_smarty_tpl->tpl_vars['html_title']->value;
}?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

  <meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['seo_desc']->value) {
echo $_smarty_tpl->tpl_vars['seo_desc']->value;
} else {
echo $_smarty_tpl->tpl_vars['meta_description']->value;
}?>" />
  <meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['seo_keys']->value) {
echo $_smarty_tpl->tpl_vars['seo_keys']->value;
} else {
echo $_smarty_tpl->tpl_vars['meta_keywords']->value;
}?>" />

    <!-- 
   Chrome and Opera Icons - to add support create your icon with different resolutions. Default is 192x192
     <link rel="icon" sizes="192x192" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
fav.png" >
    <link rel="icon" sizes="144x144" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
fav-144.png" >
    <link rel="icon" sizes="96x96" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
fav-96.png" >
    <link rel="icon" sizes="48x48" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
fav-48.png" >
  -->
  <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
fav.png" >
  <!-- 
   Apple iOS icons
    <link rel="apple-touch-icon" sizes="76x76" href="touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad-retina.png">
  -->
  <link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
fav-ios.png">
  <!-- iOS startup image -->
  <link rel="apple-touch-startup-image"  href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
fav-startup.png">
  <!-- Apple additional meta tags -->
  <meta name="apple-mobile-web-app-title" content="<?php if ($_smarty_tpl->tpl_vars['seo_title']->value) {
echo $_smarty_tpl->tpl_vars['seo_title']->value;
} else {
echo $_smarty_tpl->tpl_vars['html_title']->value;
}?>">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <!-- Android web app capable -->
  <meta name="mobile-web-app-capable" content="yes">
  <!-- IE & Windows phone pin icons. Almost same size like ios so it is reused -->
  <meta name="msapplication-square150x150logo" content="fav-ios.png">

  <!-- facebook meta tags for sharing -->
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php if ($_smarty_tpl->tpl_vars['seo_title']->value) {
echo $_smarty_tpl->tpl_vars['seo_title']->value;
} else {
echo $_smarty_tpl->tpl_vars['html_title']->value;
}?>" />
  <meta property="og:description" content="<?php if ($_smarty_tpl->tpl_vars['seo_desc']->value) {
echo $_smarty_tpl->tpl_vars['seo_desc']->value;
} else {
echo $_smarty_tpl->tpl_vars['meta_description']->value;
}?>" />
  <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['PROTOCOL_URL']->value;?>
" />
  <meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
" />
  <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['PROTOCOL_URL']->value;?>
share-image.png" />

  <!-- twitter metatags -->
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:description" content="<?php if ($_smarty_tpl->tpl_vars['seo_desc']->value) {
echo $_smarty_tpl->tpl_vars['seo_desc']->value;
} else {
echo $_smarty_tpl->tpl_vars['meta_description']->value;
}?>"/>
  <meta name="twitter:title" content="<?php if ($_smarty_tpl->tpl_vars['seo_title']->value) {
echo $_smarty_tpl->tpl_vars['seo_title']->value;
} else {
echo $_smarty_tpl->tpl_vars['html_title']->value;
}?>"/>
  <!-- add your twitter site 
  <meta name="twitter:site" content="@yourbrand"/>
  --> 
  <meta name="twitter:domain" content="<?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
"/>
  <meta name="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
share-image.png" />

  <!-- RSS -->
  <link rel="alternate" type="application/rss+xml" title="<?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
 RSS Feed" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
rss">
  

  <!-- CSS -->

  <!--
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->

  <!-- Attached CSS -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/1.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/1.5/css/style.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/1.5/css/reset.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/1.5/css/font-awesome.min.css">

  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/tags/tagl/assets/css/taggle.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/1.5/css/dev.css" rel="stylesheet">

  <noscript><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['noscript_msg'];?>
</noscript>
  
<style type="text/css">
<?php echo $_smarty_tpl->tpl_vars['custom_css']->value;?>

</style>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/1.5/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/1.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>

  <!--
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"><?php echo '</script'; ?>
>-->

  <!--fallback jquery
  <?php echo '<script'; ?>
>if (!window.jQuery) { document.write('<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/jquery-1.11.2.min.js"><\/script>'); }<?php echo '</script'; ?>
>-->
  
  <!--
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <!--fallback bootstrap-
  <?php echo '<script'; ?>
>$.fn.modal || document.write('<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap/js/bootstrap.min.js"><\/script>')<?php echo '</script'; ?>
>->

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
  <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap/vendor/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap/vendor/respond.min.js"><?php echo '</script'; ?>
>
  <![endif]-->


<?php echo '<script'; ?>
 type="text/javascript">
    window.cookieconsent_options = {"message":"<?php echo $_smarty_tpl->tpl_vars['translations']->value['cookie']['message'];?>
","dismiss":"<?php echo $_smarty_tpl->tpl_vars['translations']->value['cookie']['accept_message'];?>
","learnMore":"<?php echo $_smarty_tpl->tpl_vars['translations']->value['cookie']['more_info'];?>
","link":"/privacy-policy","theme":"light-bottom"};
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['INDEED']->value == 'activated') {
echo '<script'; ?>
 type="text/javascript" src="https://gdc.indeed.com/ads/apiresults.js"><?php echo '</script'; ?>
>         
<?php }?>

<style type="text/css">
.back-arrow a, .login-page .make-account, .checkbox-custom:checked:after {
  color: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
}
.btn {
  background: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
  border-color: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
}
.btn:hover {
  background: #fff !important;
  color: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
}

.register-employer-page .row .tos input, #logoLabel, #logoLabel:hover{
  color: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
  border-color: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
}
</style>

</head>

<body>
<div class="page-loader"></div>

<!-- enclosed in the footer -->
<div id="wrapper">

<?php if ($_smarty_tpl->tpl_vars['PLAIN_SITE']->value == 'true') {?>
<ul class="nav-back nav navbar-nav pull-left back-arrow" >
  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_SIGN_UP']->value;?>
"><i class="fa fa-chevron-circle-left"></i>&nbsp; <?php echo $_smarty_tpl->tpl_vars['translations']->value['dashboard_recruiter']['back'];?>
</a></li>
</ul>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['PLAIN_SITE_REGISTER']->value == 'true') {?>
<ul class="nav-back nav navbar-nav pull-left back-arrow" >
  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_SIGN_UP']->value;?>
"><i class="fa fa-chevron-circle-left"></i>&nbsp; <?php echo $_smarty_tpl->tpl_vars['translations']->value['dashboard_recruiter']['back'];?>
</a></li>
</ul>
<?php }
}
}
