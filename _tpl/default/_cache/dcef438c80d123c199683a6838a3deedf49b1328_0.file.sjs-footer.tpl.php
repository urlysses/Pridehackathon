<?php
/* Smarty version 3.1.30, created on 2019-08-10 15:51:08
  from "C:\wamp64\www\_tpl\default\1.5\layout\sjs-footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d4ed9dc641de0_59767224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcef438c80d123c199683a6838a3deedf49b1328' => 
    array (
      0 => 'C:\\wamp64\\www\\_tpl\\default\\1.5\\layout\\sjs-footer.tpl',
      1 => 1562146817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:1.5/layout/dashboard-snippets.tpl' => 1,
    'file:1.5/layout/js-snippets.tpl' => 1,
  ),
),false)) {
function content_5d4ed9dc641de0_59767224 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-xs-4 footer-f1">
				<ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigation']->value, 'navitem', false, NULL, 'i', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['navitem']->value) {
?>
					 	<?php if ($_smarty_tpl->tpl_vars['navitem']->value->is_external == '1') {?>
					 		<li><a title="<?php echo $_smarty_tpl->tpl_vars['navitem']->value->name;?>
" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['navitem']->value->external_url;?>
"><?php echo $_smarty_tpl->tpl_vars['navitem']->value->name;?>
</a></li>
					 	<?php } else { ?>
					 		<li><a title="<?php echo $_smarty_tpl->tpl_vars['navitem']->value->title;?>
" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['navitem']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['navitem']->value->name;?>
</a></li>
					 	<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</ul>
			</div>
			<div class="col-md-3 footer-f2">
				<ul>
					<?php if ($_smarty_tpl->tpl_vars['FB_URL']->value) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['FB_URL']->value;?>
" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['TWITTER_URL']->value) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['TWITTER_URL']->value;?>
" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['GPLUS_URL']->value) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['GPLUS_URL']->value;?>
" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['LINKEDIN_URL']->value) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['LINKEDIN_URL']->value;?>
" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li><?php }?>
				</ul>
			</div>
			<div class="col-md-3 col-xs-4 footer-f3">
				<ul>
					<li><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['top_menu_applicants'];?>
</li>
					<?php if ($_smarty_tpl->tpl_vars['PROFILES_PLUGIN']->value && $_smarty_tpl->tpl_vars['PROFILES_PLUGIN']->value == 'true') {?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_REGISTER_APPLICANTS']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['top_menu_addcv'];?>
</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_LOGIN_APPLICANTS']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['registration']['sign_in'];?>
</a></li>
					<?php }?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['browse_jobs'];?>
</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-xs-4 footer-f4">
				<ul>
					<li><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['top_menu_recruiters'];?>
</li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_DASHBOARD']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['URL_DASHBOARD_POST']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['dashboard_recruiter']['top_menu_postajob'];?>
</a></li>
					<?php if ($_smarty_tpl->tpl_vars['PROFILES_PLUGIN']->value) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_DASHBOARD']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['URL_DASHBOARD_CVDATABASE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['search_resumes'];?>
</a></li><?php }?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_LOGIN_RECRUITERS']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['registration']['sign_in'];?>
</a></li>
				</ul>
			</div>

			<div class="col-xs-12 footer-f5">
				<ul>
					<?php if ($_smarty_tpl->tpl_vars['FB_URL']->value) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['FB_URL']->value;?>
" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['TWITTER_URL']->value) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['TWITTER_URL']->value;?>
" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['GPLUS_URL']->value) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['GPLUS_URL']->value;?>
" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['LINKEDIN_URL']->value) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['LINKEDIN_URL']->value;?>
" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li><?php }?>
				</ul>
			</div>
		</div>


		<div class="row copyright">
			<div class="col-md-6 f-left">
				<p><?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
 &copy; <?php echo $_smarty_tpl->tpl_vars['YEAR']->value;?>
</p> 
			</div>
			<div class="col-md-2 f-center">
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"><img class="site-logo" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SITE_LOGO_PATH']->value;?>
" alt="Website's Logo"></a>
			</div>
			<div class="col-md-4 f-right">
				<div id="library-loads"></div>
			</div>
		</div>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['dashboard_footer_flag']->value) {?>
	<?php $_smarty_tpl->_subTemplateRender("file:1.5/layout/dashboard-snippets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } else { ?>
	<?php $_smarty_tpl->_subTemplateRender("file:1.5/layout/js-snippets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>

</div> <!-- WRAPPER CLOSED -->

</body>
</html><?php }
}
