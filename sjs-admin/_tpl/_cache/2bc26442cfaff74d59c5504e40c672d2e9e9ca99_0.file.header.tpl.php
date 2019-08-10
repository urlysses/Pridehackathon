<?php
/* Smarty version 3.1.30, created on 2019-08-10 16:06:55
  from "C:\wamp64\www\sjs-admin\_tpl\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d4edd8fbf5389_00002502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bc26442cfaff74d59c5504e40c672d2e9e9ca99' => 
    array (
      0 => 'C:\\wamp64\\www\\sjs-admin\\_tpl\\header.tpl',
      1 => 1562146817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4edd8fbf5389_00002502 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
	<title><?php if (@constant('SITE_NAME')) {
echo @constant('SITE_NAME');?>
 | Admin<?php } else { ?>Job board admin<?php }?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['meta_description']->value;?>
" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['meta_keywords']->value;?>
" />
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
fav.png" type="image/x-icon" />

	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap/css/bootstrap.min.css" type="text/css" /> 
	<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap/css/flat-ui.css" rel="stylesheet">
	<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/admin/lib/style.css" rel="stylesheet">
	<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/admin/lib/flat-green.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/tags/tagl/assets/css/taggle.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/cp/spectrum.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/default/1.5/css/sjs-updates.css" rel="stylesheet">

<!-- 
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/1.5/css/style.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/1.5/css/reset.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/1.5/css/font-awesome.min.css"> -->
  

	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/jquery-1.11.2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/admin/js/functions.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/admin/js/main.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/admin/js/categories.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/admin/js/translations.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/admin/js/messages.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/admin/js/overlay.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/admin/js/types.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/admin/lib/app.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/cp/spectrum.js" type="text/javascript"><?php echo '</script'; ?>
>

	<?php if ($_smarty_tpl->tpl_vars['editor']->value) {?>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
	<?php }?>

<style type="text/css">
.fa-lg {
    font-size: 1.7em;
}
.dropdown-menu > li > a {
    font-size: 16px;
}

#pagination-id button {
    border-radius: 21px;
}

.pagination-cl {
  margin-bottom: 5%;
  margin-top: 3%;
}

.pagination-cl .col-md-12 {
      padding: 0;
}

.pagination-cl .btn-next, .pagination-cl .btn-more {
    float: right;
    color: #fff;
    background: #46CAC6;
    width: 8%;
    font-size: 16px;
}

.pagination-cl .btn-next:hover, .pagination-cl .btn-more:hover {
    border: 2px solid #46CAC6;
    background: #fff;
    color: #46CAC6;
    padding: 0;
}

.pagination-cl .btn-more {
    float: left;
}

#pagination-id .btn {
  display: table;
  margin: 1% auto;
}

.pagination-cl .center-btn {
      width: 90%;
    text-align: right;
}

.pagination-cl .center-btn .btn-pg, .pagination-cl .center-btn .btn {
    width: 4%;
    padding: 1% 0%;
    margin: 1.2% 0.5% 1% 0%;
    float: right;
    background: #C7C7C7;
    border: none;
    color: #FFFFFF;
}

.pagination-cl .center-btn .btn-pg:hover, .pagination-cl .center-btn .btn:hover, .pagination-cl .center-btn .btn-pg.active,  .pagination-cl .center-btn .active.btn, .pagination-cl .center-btn .btn-pg:hover, .pagination-cl .center-btn .btn:hover, .pagination-cl .center-btn .btn-pg.active, .pagination-cl .center-btn .active.btn {
  background: #46CAC6;
}
</style>

</head>

<body class="flat-green">
		<?php if ($_smarty_tpl->tpl_vars['isAuthenticated']->value == 1) {?>
	<div class="app-container">
        <div class="row content-container">
            <nav class="navbar navbar-default navbar-fixed-top navbar-top">
                <div class="container-fluid menuPadding">
                    <div class="navbar-header">
                        <button id="menuBtn" type="button" class="navbar-expand-toggle">
                           <i class="fa fa-th-list" aria-hidden="true"></i>
                        </button>
                        <ol class="breadcrumb navbar-breadcrumb">
                            <li class="active">Menu</li>
                        </ol>
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs visible-sm">
                               <i class="fa fa-align-justify" aria-hidden="true"></i>
                        </button>
                    </div>
                    <ul class="nav navbar-nav navbar-right" >
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs visible-sm">
                            <i class="fa fa-close fa-lg" aria-hidden="true"></i>
                        </button>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle noHover" data-toggle="dropdown" role="button" aria-expanded="false"> <i class="fa fa-wrench fa-lg" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu animated fadeInDown">
                                <li class="title">
                                   <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
translations/edit/">Translations</a>
                                </li>
                                 <li class="title" style="border-top: solid 1px #e6e6e6;">
                                   <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
settings/">Settings</a>
                                </li>
                                <li class="title" style="border-top: solid 1px #e6e6e6;">
                                   <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
stats/">Statistics</a>
                                </li>
                                <li class="title" style="border-top: solid 1px #e6e6e6;">
                                   <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
customizer/">Customizer</a>
                                </li>
                            </ul>
                        </li>
 						<li class="dropdown">
                            <a href="#" class="dropdown-toggle noHover" data-toggle="dropdown" role="button" aria-expanded="false"> <i class="fa fa-address-card-o fa-lg" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu animated fadeInDown">
                                <li class="title">
                                   <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
subscribers/">Subscribers</a>
                                </li>
                                 <li class="title" style="border-top: solid 1px #e6e6e6;">
                                   <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
companies/">Companies</a>
                                </li>
                                <?php if ($_smarty_tpl->tpl_vars['PROFILE_PLUGIN']->value == '1') {?>
                                <li class="title" style="border-top: solid 1px #e6e6e6;">
                                   <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
candidates/">Candidates</a>
                                </li>
                                <?php }?>
                                <li class="title" style="border-top: solid 1px #e6e6e6;">
                                   <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
news/">News</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle noHover" data-toggle="dropdown" role="button" aria-expanded="false"> <i class="fa fa-home fa-lg" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu animated fadeInDown">
                                <li class="title">
                                   <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
clear-cache/">Clear cache</a>
                                </li>
                                 <li class="title" style="border-top: solid 1px #e6e6e6;">
                                   <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
" target="_blank">Open web</a>
                                </li>
                                <li class="title" style="border-top: solid 1px #e6e6e6;">
                                   <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
logout/">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="side-menu sidebar-inverse">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="side-menu-container upc">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
">
                                 <i class="fa fa-arrow-circle-down ml12 mr15 fa-lg" aria-hidden="true"></i>
                                <div class="title" style="text-transform: none">admin</div>
                            </a>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class="<?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value == '1') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;
echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
/inactive/">
                                     <i class="fa fa-volume-off fa-lg ml5 mr5" aria-hidden="true"></i><span class="title">Inactive jobs</span>
                                </a>
                            </li>
                            <li class="panel panel-default dropdown <?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value == '2') {?>active<?php }?>">
                                <a data-toggle="collapse" href="#dropdown-element">
                                    <i class="fa fa-volume-up fa-lg ml5 mr5" aria-hidden="true"></i><span class="title">Active jobs</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-element" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li>
                                                <a href='<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;
echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
/all'>All</a>
                                            </li>
                                            <?php
$__section_tmp_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp'] : false;
$__section_tmp_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['categories']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_tmp_1_total = $__section_tmp_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_tmp'] = new Smarty_Variable(array());
if ($__section_tmp_1_total != 0) {
for ($__section_tmp_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] = 0; $__section_tmp_1_iteration <= $__section_tmp_1_total; $__section_tmp_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']++){
?>
                                            <li>
		     									<a href='<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;
echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['categories']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['var_name'];?>
/'><?php echo $_smarty_tpl->tpl_vars['categories']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['name'];?>
</a>
		     								</li>
                                            <?php
}
}
if ($__section_tmp_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_tmp'] = $__section_tmp_1_saved;
}
?>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value == '3') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
job-applications/">
                                    <i class="fa fa-user-circle fa-lg ml5 mr5" aria-hidden="true"></i><span class="title">Job Applications</span>
                                </a>
                            </li>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value == '4') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
pages/">
                                    <i class="fa fa-file-text-o fa-lg ml5 mr5" aria-hidden="true"></i><span class="title">Pages</span>
                                </a>
                            </li>

                            <li class="<?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value == '7') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
types/">
                                    <i class="fa fa-calendar-check-o fa-lg ml5 mr5" aria-hidden="true"></i><span class="title">Job Types</span>
                                </a>
                            </li>

                            <li class="<?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value == '6') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
categories/">
                                    <i class="fa fa-tasks fa-lg ml5 mr5" aria-hidden="true"></i><span class="title">Job Categories</span>
                                </a>
                            </li>

                            <li class="<?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value == '5') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
cities/list/">
                                    <i class="fa fa-map-marker fa-lg ml5 mr5" aria-hidden="true"></i><span class="title">Job Locations</span>
                                </a>
                            </li>

                            <?php if (@constant('BANNER_MANAGER') == 'true') {?>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value == '8') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
advertisement/">
                                    <i class="fa fa-image fa-lg ml5 mr5" aria-hidden="true"></i><span class="title">Banners</span>
                                </a>
                            </li>
                            <?php }?>

                           <?php if (@constant('ADSENSE') == 'true') {?>
                           <li class="<?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value == '10') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
adsense/">
                                    <i class="fa fa-file-image-o fa-lg ml5 mr5" aria-hidden="true"></i><span class="title">Adsense</span>
                                </a>
                            </li> 
                            <?php }?>

                            <li class="<?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value == '12') {?>active<?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
cleaner/">
                                    <i class="fa fa-recycle fa-lg ml5 mr5" aria-hidden="true"></i><span class="title">Cleaner</span>
                                </a>
                            </li>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value == '11') {?>active<?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
seo/">
                                    <i class="fa fa-search fa-lg ml5 mr5" aria-hidden="true"></i><span class="title">SEO</span>
                                </a>
                            </li>
                            <?php if (@constant('PAYPAL_PLUGIN') == 'true') {?>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value == '77') {?>active<?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
payment-settings/">
                                    <i class="fa fa-money fa-lg ml5 mr5" aria-hidden="true"></i><span class="title">Payments</span>
                                </a>
                            </li>
                            <?php }?>
                            <?php if (@constant('INDEED_PLUGIN') == 'true') {?>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value == '15') {?>active<?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
indeed/">
                                    <i class="fa fa-rocket fa-lg ml5 mr5" aria-hidden="true"></i><span class="title">Indeed</span>
                                </a>
                            </li>
                            <?php }?>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value == '50') {?>active<?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
feeder/">
                                    <i class="fa fa-share-alt fa-lg ml5 mr5" aria-hidden="true"></i><span class="title">Data Feeder</span>
                                </a>
                            </li>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value == '68') {?>active<?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
updates/">
                                    <i class="fa fa-arrow-circle-o-up fa-lg ml5 mr5"></i><span class="title">Updates</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
            <!-- Main Content -->
            <div class="container-fluid">

            </div>
        </div>
        <footer class="app-footer">
            <div class="wrapper">
                <span class="pull-right">SJS &nbsp; <?php echo $_smarty_tpl->tpl_vars['SJS_VERSION']->value;?>
 &nbsp;&nbsp;<a href="#"><i class="fa fa-long-arrow-up"></i></a></span> &copy; <?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>

            </div>
        </footer>
		<?php }
}
}
