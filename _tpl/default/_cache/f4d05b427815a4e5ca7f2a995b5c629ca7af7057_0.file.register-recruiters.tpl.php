<?php
/* Smarty version 3.1.30, created on 2019-08-10 19:53:09
  from "C:\wamp64\www\_tpl\default\auth\register-recruiters.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d4f129553ad00_19820399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4d05b427815a4e5ca7f2a995b5c629ca7af7057' => 
    array (
      0 => 'C:\\wamp64\\www\\_tpl\\default\\auth\\register-recruiters.tpl',
      1 => 1562146817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:1.5/layout/login-header.tpl' => 1,
    'file:auth/register-recruiters-step2-form-content.tpl' => 1,
    'file:auth/register-recruiters-step3-form-content.tpl' => 1,
    'file:auth/register-recruiters-step1-form-content.tpl' => 1,
    'file:1.5/layout/login-footer.tpl' => 1,
  ),
),false)) {
function content_5d4f129553ad00_19820399 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:1.5/layout/login-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if ($_smarty_tpl->tpl_vars['second_step']->value) {?>
<div class="main-content login-page register-employer-page-step-2">
	<div class="adjusted-login-page">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SITE_LOGO_PATH']->value;?>
">
					<h2><?php echo $_smarty_tpl->tpl_vars['translations']->value['registration']['second_step'];?>
</h2>

					<?php $_smarty_tpl->_subTemplateRender("file:auth/register-recruiters-step2-form-content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				</div>
			</div>
		</div>
	</div>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['third_step']->value) {?>
<div class="main-content login-page register-employer-page-step-3">
	<div class="adjusted-login-page">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SITE_LOGO_PATH']->value;?>
">
				
					<?php $_smarty_tpl->_subTemplateRender("file:auth/register-recruiters-step3-form-content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


				</div>
			</div>
		</div>
	</div>
</div>
<?php } else { ?>
<div class="main-content login-page register-employer-page">
	<div class="adjusted-login-page">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SITE_LOGO_PATH']->value;?>
">
					<h2><?php echo $_smarty_tpl->tpl_vars['translations']->value['registration']['first_step'];?>
</h2>

					<?php $_smarty_tpl->_subTemplateRender("file:auth/register-recruiters-step1-form-content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


				</div>
			</div>
		</div>
	</div>
</div>
<?php }?>


<?php $_smarty_tpl->_subTemplateRender("file:1.5/layout/login-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
