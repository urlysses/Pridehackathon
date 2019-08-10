<?php
/* Smarty version 3.1.30, created on 2019-08-10 19:17:36
  from "C:\wamp64\www\_tpl\default\auth\sign-up.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d4f0a40e39808_17403230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47d98ca29f630edba978dd5dfd9d9aca65824d13' => 
    array (
      0 => 'C:\\wamp64\\www\\_tpl\\default\\auth\\sign-up.tpl',
      1 => 1562146817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:1.5/layout/sjs-header.tpl' => 1,
    'file:1.5/layout/sjs-footer.tpl' => 1,
  ),
),false)) {
function content_5d4f0a40e39808_17403230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:1.5/layout/sjs-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="main-content signup-page">
	<div class="adjusted-signup-page">
		<div class="container">
			<h2><?php echo $_smarty_tpl->tpl_vars['translations']->value['sign_up']['headline'];?>
</h2>
			<div class="row">
				<div class="col-md-2 .hide-sm"></div>

				<?php if ($_smarty_tpl->tpl_vars['PROFILES_PLUGIN']->value == 'true' && $_smarty_tpl->tpl_vars['jobs_candidates_on_flag']->value == '1') {?>
				<div class="col-lg-4 col-md-12 col-xs-12 candidate">
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/default/1.5/images/candidate.png">
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_REGISTER_APPLICANTS']->value;?>
" class="su-emp"><?php echo $_smarty_tpl->tpl_vars['translations']->value['sign_up']['candidates_registration'];?>
</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_LOGIN_APPLICANTS']->value;?>
" class="si-emp"><?php echo $_smarty_tpl->tpl_vars['translations']->value['registration']['sign_in'];?>
</a>
				</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['PROFILES_PLUGIN']->value == 'true' && $_smarty_tpl->tpl_vars['jobs_candidates_on_flag']->value == '1') {?>
				<div class="col-lg-4 col-md-12 col-xs-12  employer">
				<?php } else { ?>
				<div class="col-lg-12 col-md-12 col-xs-12  employer">
				<?php }?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/default/1.5/images/employer.png">
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_REGISTER_RECRUITERS']->value;?>
" class="su-emp"><?php echo $_smarty_tpl->tpl_vars['translations']->value['sign_up']['employer_registration'];?>
</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_LOGIN_RECRUITERS']->value;?>
" class="si-emp"><?php echo $_smarty_tpl->tpl_vars['translations']->value['registration']['sign_in'];?>
</a>

				</div>

				<div class="col-md-2 .hide-sm"></div>
			</div>
		</div>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:1.5/layout/sjs-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
