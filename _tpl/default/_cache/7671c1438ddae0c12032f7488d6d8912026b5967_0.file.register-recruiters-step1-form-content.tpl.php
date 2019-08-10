<?php
/* Smarty version 3.1.30, created on 2019-08-10 19:53:09
  from "C:\wamp64\www\_tpl\default\auth\register-recruiters-step1-form-content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d4f129560ac61_10726070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7671c1438ddae0c12032f7488d6d8912026b5967' => 
    array (
      0 => 'C:\\wamp64\\www\\_tpl\\default\\auth\\register-recruiters-step1-form-content.tpl',
      1 => 1562146817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4f129560ac61_10726070 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form id="register-form" name="register-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_REGISTER_RECRUITERS']->value;?>
" role="form">
	<input type="hidden" name="step" id="step" value="1">

	<div id="reg-name-fg">
		<h4><?php echo $_smarty_tpl->tpl_vars['translations']->value['registration']['name'];?>
</h4>
		<input required type="text" name="register_name" id="register_name" maxlength="500">
		<div id="err-reg-name" class="negative-feedback-form displayNone"><?php echo $_smarty_tpl->tpl_vars['translations']->value['login']['err_name'];?>
</div>
	</div>
	<div class="clear-both"></div>

	<div id="reg-email-fg">
		<h4><?php echo $_smarty_tpl->tpl_vars['translations']->value['registration']['email'];?>
</h4>
		<input required type="email" name="register_email" id="register_email" maxlength="500">
		<div id="err-reg-email" class="negative-feedback-form displayNone"><?php echo $_smarty_tpl->tpl_vars['translations']->value['login']['err_email'];?>
</div>
	</div>
	<div class="clear-both"></div>


	<div id="reg-pass1-fg">
		<h4><?php echo $_smarty_tpl->tpl_vars['translations']->value['registration']['password2_label'];?>
</h4>
		<input required type="password" onfocus="SimpleJobScript.checkIfEmailExists();" name="register_pass1" id="register_pass1" maxlength="500">
	</div>
	<div class="clear-both"></div>

	<div id="reg-pass2-fg">
		<h4><?php echo $_smarty_tpl->tpl_vars['translations']->value['registration']['password2'];?>
</h4>
		<input required type="password" name="register_pass2" id="register_pass2" maxlength="500">
		<div id="err-reg-pass2" class="negative-feedback-form displayNone"><?php echo $_smarty_tpl->tpl_vars['translations']->value['login']['err_passes'];?>
</div>
	</div>
	<div class="clear-both"></div>

	<?php if ($_smarty_tpl->tpl_vars['ENABLE_RECAPTCHA']->value) {?>
	<div class="captcha-block">
		<?php echo $_smarty_tpl->tpl_vars['captcha_html']->value;?>

		<div id="captcha_err" class="negative-feedback-form displayNone" ><?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['captcha_empty_err'];?>
</div>
	</div>
	<?php }?>

	<div class="row">
		<div class="col-md-12 col-xs-12">	
			<div class="tos">
				<label><input required type="checkbox" class="checkbox-custom"></input> 
				<h4><?php echo $_smarty_tpl->tpl_vars['translations']->value['registration']['accept_part1'];?>
 <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;
echo TERMS_CONDITIONS_URL;?>
"> <?php echo $_smarty_tpl->tpl_vars['translations']->value['registration']['accept_part2'];?>
</a></h4></label>
			</div>
		</div>
	</div>
	<br /><br />

	<div class="row">
		<div class="col-md-12 col-xs-12">	
			<button id="proceedToStep2btnId" type="submit" class="btn b2h btn-general" onclick="return SimpleJobScript.registerFormValidation();"><?php echo $_smarty_tpl->tpl_vars['translations']->value['registration']['submit'];?>
</button>
		</div>
	</div>

</form> 

<div class="row">
	<div class="col-md-12 col-xs-12">	
		<br /><br /><br /><br />
	</div>
</div><?php }
}
