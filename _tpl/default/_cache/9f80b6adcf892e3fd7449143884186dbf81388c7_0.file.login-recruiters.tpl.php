<?php
/* Smarty version 3.1.30, created on 2019-08-10 16:29:31
  from "C:\wamp64\www\_tpl\default\auth\login-recruiters.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d4ee2db58e658_28405940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f80b6adcf892e3fd7449143884186dbf81388c7' => 
    array (
      0 => 'C:\\wamp64\\www\\_tpl\\default\\auth\\login-recruiters.tpl',
      1 => 1562146817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:1.5/layout/login-header.tpl' => 1,
    'file:1.5/layout/login-footer.tpl' => 1,
  ),
),false)) {
function content_5d4ee2db58e658_28405940 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:1.5/layout/login-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="main-content login-page">
	<div class="adjusted-login-page">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SITE_LOGO_PATH']->value;?>
">
					<h2><?php echo $_smarty_tpl->tpl_vars['translations']->value['login']['headline_login'];?>
 <?php echo $_smarty_tpl->tpl_vars['translations']->value['login']['submessage'];?>
</h2>

					<?php if ($_smarty_tpl->tpl_vars['login_failed']->value) {?>
					 <div id="incorrect-login-err" class="negative-feedback-form centered"><?php echo $_smarty_tpl->tpl_vars['translations']->value['login']['incorrect'];?>
</div>
					 <div class="clear-both"></div>
					 <br />
					<?php }?>

					<form id="login-form" name="login-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
login/" role="form">

						<div id="login-email-fg">
							<h4><?php echo $_smarty_tpl->tpl_vars['translations']->value['login']['email'];?>
</h4>
							<input required type="email" <?php if ($_smarty_tpl->tpl_vars['relogin_email']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['relogin_email']->value;?>
"<?php }?> name="signin_email" id="signin_email" maxlength="500">
							<div id="err-login-email" class="negative-feedback-form displayNone"><?php echo $_smarty_tpl->tpl_vars['translations']->value['login']['err_email'];?>
</div>
						</div>
						<div class="clear-both"></div>

						<div id="login-pass-fg">
							<h4><?php echo $_smarty_tpl->tpl_vars['translations']->value['login']['password'];?>
</h4>
							<input required name="signin_pass" id="signin_pass" maxlength="300" type="password">
							<div id="err-login-pass" class="negative-feedback-form displayNone"><?php echo $_smarty_tpl->tpl_vars['translations']->value['login']['err_pass_short'];?>
</div>
						</div>

					</form> 
					
					<div id="forgotpassblockid">
						<a href="#" class="forgot-pass" onclick="SimpleJobScript.hideLoginFields();" ><?php echo $_smarty_tpl->tpl_vars['translations']->value['login']['forgot_password'];?>
</a>
					</div>

					<div id="submit-block" >
						<div class="back-to-home"><button type="submit" class="btn b2h" onclick="return SimpleJobScript.loginFormValidation();" name="submit" id="submit"><?php echo $_smarty_tpl->tpl_vars['translations']->value['registration']['sign_in'];?>
</button></div>
					</div>

					<a id="sign-up-link" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_REGISTER_RECRUITERS']->value;?>
" class="make-account"><?php echo $_smarty_tpl->tpl_vars['translations']->value['login']['noacc_text'];?>
</a>


					<div id="forgotten-zone" class="displayNone">
						<br /><br /><br /><br />
						<form role="form" action="" method="post" >
							
								<h4><?php echo $_smarty_tpl->tpl_vars['translations']->value['login']['forgotten_enter_email'];?>
</h4>
								<input required name="forget_email" id="forget_email" maxlength="300" type="email">

								<div id="passrecovery-feedback-err" class="negative-feedback-form displayNone centered"><?php echo $_smarty_tpl->tpl_vars['translations']->value['login']['recovery_err'];?>
</div>
								<div id="passrecovery-feedback-err2" class="negative-feedback-form displayNone centered"><?php echo $_smarty_tpl->tpl_vars['translations']->value['login']['recovery_err2'];?>
</div>
								<div id="passrecovery-feedback-ok" class="pos-feedback-form centered displayNone centered"><?php echo $_smarty_tpl->tpl_vars['translations']->value['login']['newpass_email_sent'];?>
</div>
				
						 		<div class="clear-both"></div>
								<br />

								<button type="button" class="btn mbtn" onclick="return SimpleJobScript.passwordRecovery();"><?php echo $_smarty_tpl->tpl_vars['translations']->value['login']['forgotten_submit'];?>
</button>

						 		<div class="clear-both"></div>
								<br />

								<i id="fspinner" class=" fa fa-refresh fa-spin fa-lg fa-fw refresh-spinner displayNone"></i>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:1.5/layout/login-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
