<?php
/* Smarty version 3.1.30, created on 2019-08-10 16:34:25
  from "C:\wamp64\www\_tpl\default\jobs\apply-modal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d4ee4013022b7_10538536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c34462a11cd3d065c910b81213a580301db95031' => 
    array (
      0 => 'C:\\wamp64\\www\\_tpl\\default\\jobs\\apply-modal.tpl',
      1 => 1562146817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4ee4013022b7_10538536 (Smarty_Internal_Template $_smarty_tpl) {
?>

<a data-toggle="modal" data-target="#applyModal" href="#" onclick="return false;"><button id="apply_online_now" type="button" data-toggle="modal" data-target="#jobpopup" class="btn btn-apply"><?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['apply_btn'];?>
</button></a>
<br /><br />

<div class="modal fade trans-bg" id="jobpopup" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal">&times;</button>	
				<div class="apply-popup">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-xs-12 application-head">
								<h2><?php echo $_smarty_tpl->tpl_vars['translations']->value['job_detail_section']['application_title'];?>
</h2>
								<p class="h-summary"><?php echo $_smarty_tpl->tpl_vars['translations']->value['job_detail_section']['application_desc'];?>
 </p>

									<div class="tab-buttons">
										<a href="#" class="btn-ns active" id="new-user-link">
											<?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['tab1'];?>

										</a>
										<?php if (@constant('PROFILES_PLUGIN') == 'true') {?>
										<a href="#" class="btn-eu" id="old-user-link">
											<?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['tab2'];?>

										</a>
										<?php }?>
									</div>

							</div>
							<br><br>

							<div class="col-md-12 col-xs-12" style="padding-left: 40px;">
							<div id="new-user">
							<form role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_APPLY']->value;?>
" enctype="multipart/form-data" >
								<input type="hidden" name="job_id" id="job_id" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" />
								<input type="hidden" name="new_user" id="new_user" value="1" />
								<input type="hidden" id="external_links" name="external_links" value="0" />

								<div class="col-md-6 col-xs-12 col-mob-pad">
										<h3><?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['name'];?>
</h3>
										<input required id="apply_name" name="apply_name" type="text" maxlength="500">

										<h3><?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['email'];?>
</h3>
										<input required type="email" id="apply_email" name="apply_email" maxlength="300">

										<h3><?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['location'];?>
</h3>
										<input required type="text" id="apply_location" name="apply_location" >

								</div>

								<div class="col-md-6 col-xs-12 col-mob-pad">

									<h3><?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['portfolio'];?>
</h3>
									<input type="text" id="portfolio" name="portfolio" maxlength="500">

									<h3><?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['phone'];?>
</h3>
									<input type="tel" id="apply_phone" name="apply_phone">

									<h3><?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['occupation_placeholder'];?>
</h3>
									<input placeholder="<?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['occupation_desc'];?>
" required type="text" id="occupation" name="occupation" maxlength="500">

								</div>


								<div class="col-md-12 col-xs-12 col-mob-pad">

									<h3><?php echo $_smarty_tpl->tpl_vars['translations']->value['js']['skills_label'];?>
</h3>
									<div class="textarea clearfix skillsTaggle"></div><br />
									
									<h3><?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['create_profile_desc'];?>
</h3>
									<textarea required id="apply_msg" name="apply_msg" maxlength="500" rows="8" cols="50"></textarea>
									<div class="textarea-feedback-popup" id="textarea_feedback"></div>

									<br /><br />

									<p class="w100">
										<label id="cvLabel" for="cv"><?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['cv_label'];?>
</label><input accept=".doc,.docx, .pdf" name="cv" id="cv" class="inputfile" type="file" /><span class="cv-hint"><?php echo $_smarty_tpl->tpl_vars['cv_hint']->value;?>
</span><br /><br />
										 <span id="err" class="red ml0 displayNone"><?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['cv_err'];?>
</span>
								    </p>

								</div>


								<div class="col-md-12 col-xs-12 col-mob-pad">
									<div class="SMLinkDiv">
										<a id="addLink" class="green" onclick="return SimpleJobScript.addExternalLink();" href="#"><?php echo $_smarty_tpl->tpl_vars['translations']->value['js']['add_social_media'];?>
</a>
										<div id="addLinkBlock"></div>
									</div>

									<?php if (@constant('PROFILES_PLUGIN') == 'true') {?>
										<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['modal_snippet']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

									<?php }?>

									<div class="row mlpl0">
										<div class="col-md-6 col-xs-12 mlpl0">
											<button type="submit" class="btn btn-modal-a" onclick="return SimpleJobScript.Apply(<?php echo $_smarty_tpl->tpl_vars['MAX_CV_SIZE']->value;?>
, 'new');"><?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['submit'];?>
</button>

											<button type="button" data-dismiss="modal" class="btn btn-modal-c"><?php echo $_smarty_tpl->tpl_vars['translations']->value['job_detail_section']['close'];?>
</button>
										</div>

										<div class="col-md-3 col-xs-12">
											<div class="modal-ajax" >
												<i id="fspinner_apply" class="displayNone fa fa-refresh fa-spin fa-lg fa-fw refresh-spinner"></i>
											</div>
										</div>

									</div>

								</div>

								</form>
							</div>
							</div>

							<div class="col-md-12 col-xs-12" style="padding-left: 40px;">
							<div id="old-user" class="hide-me-now">
								<div class="col-md-8 col-xs-12">
									<form role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_APPLY']->value;?>
" enctype="multipart/form-data" >
										<input type="hidden" name="job_id" id="job_id" value="<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" />
										<input type="hidden" name="new_user" id="new_user" value="0" />

										<h3><?php echo $_smarty_tpl->tpl_vars['translations']->value['login']['email'];?>
</h3>
										<input required id="apply_email_existing" name="apply_email_existing" type="email" maxlength="100" >

										
											<h3><?php echo $_smarty_tpl->tpl_vars['translations']->value['login']['password'];?>
</h3>
											<input required id="apply_pass_existing" name="apply_pass_existing" type="password" maxlength="100" >
										<div class="col-md-12 col-xs-12 tal mt12">
											<div id="err-existing-pass" class="red displayNone"><?php echo $_smarty_tpl->tpl_vars['translations']->value['login']['err_pass_short'];?>
</div>
											<br /><br />
										</div>

										<div class="textarea-feedback mt5 tal" ><?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['newuser_hint'];?>
</div>

										<div class="row mlpl0 pl10">

											<div class="col-md-10 col-xs-12 mlpl0 mt75">
												<button type="submit" class="btn btn-modal-a" onclick="return SimpleJobScript.Apply(<?php echo $_smarty_tpl->tpl_vars['MAX_CV_SIZE']->value;?>
, 'existing');"><?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['submit'];?>
</button>

												<button type="button" data-dismiss="modal" class="btn btn-modal-c"><?php echo $_smarty_tpl->tpl_vars['translations']->value['job_detail_section']['close'];?>
</button>
											</div>

											<div class="col-md-2 col-xs-12 mlpl0 mt75">
												<div class="modal-ajax" >
													<i id="fspinner_apply" class="displayNone fa fa-refresh fa-spin fa-lg fa-fw refresh-spinner"></i>
												</div>
											</div>

										</div>

									</form>
								</div>
							</div>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div><?php }
}
