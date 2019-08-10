<?php
/* Smarty version 3.1.30, created on 2019-08-10 16:07:25
  from "C:\wamp64\www\sjs-admin\_tpl\settings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d4eddade97957_51666295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46c0a6ac1e86acb575f12370d1f361f7520f325f' => 
    array (
      0 => 'C:\\wamp64\\www\\sjs-admin\\_tpl\\settings.tpl',
      1 => 1562146817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d4eddade97957_51666295 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div class="admin-content">
 <div class="admin-wrap-content">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<?php if ($_smarty_tpl->tpl_vars['settings_categories']->value && $_smarty_tpl->tpl_vars['settings_form']->value == '') {?>
		  <label class="admin-label">Settings</label>
		<br />
			<?php
$__section_tmp_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp'] : false;
$__section_tmp_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['settings_categories']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_tmp_0_total = $__section_tmp_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_tmp'] = new Smarty_Variable(array());
if ($__section_tmp_0_total != 0) {
for ($__section_tmp_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] = 0; $__section_tmp_0_iteration <= $__section_tmp_0_total; $__section_tmp_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']++){
?>
				<div class="settings-row">
					<div class="settings-wrapper">
					<a class="right" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
settings/<?php echo $_smarty_tpl->tpl_vars['settings_categories']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['var_name'];?>
/" title="Edit <?php echo $_smarty_tpl->tpl_vars['settings_categories']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['name'];?>
"><span class="fui-gear blueColor" ></span>&nbsp;</a>
					<label class="settings"><a class="blue-font" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
settings/<?php echo $_smarty_tpl->tpl_vars['settings_categories']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['var_name'];?>
/"><?php echo $_smarty_tpl->tpl_vars['settings_categories']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['name'];?>
</a></label>
					</div>

					<div class="light"><?php if ($_smarty_tpl->tpl_vars['settings_categories']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['description'] != '') {
echo $_smarty_tpl->tpl_vars['settings_categories']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['description'];
}?></div>
				</div>
			<?php
}
}
if ($__section_tmp_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_tmp'] = $__section_tmp_0_saved;
}
?>
			<div class="settings-row">
				<a class="right blue" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
password/" title="Change password"><i class="fa fa-gear blueColor mr5" aria-hidden="true"></i></a>
				<label class="settings"><a class="blue-font" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
password/">ADMIN</a></label>
			</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['settings_form']->value != '') {?>
		<?php if ($_smarty_tpl->tpl_vars['category_name']->value != '') {?> <label class="settings"><?php echo $_smarty_tpl->tpl_vars['category_name']->value;?>
</label> <a href="/sjs-admin/settings"><div class="subheading">&larr;go back</div></a><?php }?>
		<?php if (mb_strtolower($_smarty_tpl->tpl_vars['category_name']->value, 'UTF-8') == 'invoicing') {?><span style="font-size: 14px; opacity: 0.75;">To edit rest of the texts, change translations - "invoice" section</span><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['category_name']->value == 'URLS') {?><span style="font-size: 14px; opacity: 0.75;">Here you can translate URL routes. Useful when English is not used.</span><?php }?>

		<?php if ($_smarty_tpl->tpl_vars['errors']->value != '') {?>
			<div class="fail">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
				<?php
$__section_tmp2_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_tmp2']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp2'] : false;
$__section_tmp2_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['error']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_tmp2_1_total = $__section_tmp2_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_tmp2'] = new Smarty_Variable(array());
if ($__section_tmp2_1_total != 0) {
for ($__section_tmp2_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index'] = 0; $__section_tmp2_1_iteration <= $__section_tmp2_1_total; $__section_tmp2_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index']++){
?>								
					<div><?php echo $_smarty_tpl->tpl_vars['error']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index'] : null)];?>
</div>
				<?php
}
}
if ($__section_tmp2_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_tmp2'] = $__section_tmp2_1_saved;
}
?>						
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</div>
		<?php }?>
		
		<form id="publish_form" method="post" enctype="multipart/form-data" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
settings/<?php echo $_smarty_tpl->tpl_vars['CURRENT_ID']->value;?>
/">
			<div class="list settings">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings_form']->value, 'setting');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['setting']->value) {
?>
				<?php $_smarty_tpl->_assignInScope('name', $_smarty_tpl->tpl_vars['setting']->value['name']);
?>
				<?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['setting']->value['title']);
?>
				<?php $_smarty_tpl->_assignInScope('description', $_smarty_tpl->tpl_vars['setting']->value['description']);
?>
				<?php $_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['setting']->value['value']);
?>
				<?php $_smarty_tpl->_assignInScope('data_type', $_smarty_tpl->tpl_vars['setting']->value['data_type']);
?>
				<?php $_smarty_tpl->_assignInScope('input_type', $_smarty_tpl->tpl_vars['setting']->value['input_type']);
?>
				<?php $_smarty_tpl->_assignInScope('input_options', $_smarty_tpl->tpl_vars['setting']->value['input_options']);
?>
				<?php $_smarty_tpl->_assignInScope('extradata', $_smarty_tpl->tpl_vars['setting']->value['extradata']);
?>
				<?php $_smarty_tpl->_assignInScope('settingsLogo', preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['setting']->value['name']));
?>
				
				<?php if ($_smarty_tpl->tpl_vars['PROFILE_PLUGIN']->value == '0' && ($_smarty_tpl->tpl_vars['name']->value == 'url_profile' || $_smarty_tpl->tpl_vars['name']->value == 'url_profile_edit' || $_smarty_tpl->tpl_vars['name']->value == 'url_profile_applications' || $_smarty_tpl->tpl_vars['name']->value == 'url_profile_changepassword' || $_smarty_tpl->tpl_vars['name']->value == 'url_profile_delete')) {?>
				  <?php continue 1;?>
				<?php }?>

				<div class="row settings-row <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->tpl_vars['name']->value] != '') {?> error<?php }?> fs13" >
				<div class="row-fluid mt15" >
					<div class="col-lg-2 col-md-2 col-sm-2">
						<strong><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
:</strong>
					</div>

					<div class="col-lg-3 col-md-3  col-sm-8 ml20Desk">
<?php if ($_smarty_tpl->tpl_vars['input_type']->value == 'text_area') {?>
						<textarea class="form-control minput<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->tpl_vars['name']->value] != '') {?> error<?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" cols="40" rows="2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
					<?php } elseif ($_smarty_tpl->tpl_vars['input_type']->value == 'radiobutton') {?>
						<?php if ($_smarty_tpl->tpl_vars['data_type']->value == 'boolean') {?>
							<input  style="margin-right: 5px;" type="radio" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="0" <?php if ($_smarty_tpl->tpl_vars['value']->value == 0) {?>checked="checked"<?php }?> /><?php if ($_smarty_tpl->tpl_vars['input_options']->value[0]) {
echo $_smarty_tpl->tpl_vars['input_options']->value[0];
} else { ?>0<?php }?>&nbsp;
							<input  style="margin-right: 5px;" type="radio" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['value']->value == 1) {?>checked="checked"<?php }?> /><?php if ($_smarty_tpl->tpl_vars['input_options']->value[1]) {
echo $_smarty_tpl->tpl_vars['input_options']->value[1];
} else { ?>1<?php }?>
							&nbsp;
						<?php } else { ?>
							<?php
$__section_tmp2_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_tmp2']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp2'] : false;
$__section_tmp2_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['input_options']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_tmp2_2_total = $__section_tmp2_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_tmp2'] = new Smarty_Variable(array());
if ($__section_tmp2_2_total != 0) {
for ($__section_tmp2_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index'] = 0; $__section_tmp2_2_iteration <= $__section_tmp2_2_total; $__section_tmp2_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index']++){
?>
								<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['input_options']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index'] : null)];?>
" <?php if ($_smarty_tpl->tpl_vars['input_options']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index'] : null)] == $_smarty_tpl->tpl_vars['value']->value) {?>checked="checked"<?php }?> /><?php echo $_smarty_tpl->tpl_vars['input_options']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index'] : null)];?>

							<?php
}
}
if ($__section_tmp2_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_tmp2'] = $__section_tmp2_2_saved;
}
?>
						<?php }?>
					<?php } elseif ($_smarty_tpl->tpl_vars['input_type']->value == 'select') {?>
						<select class="form-control minput" <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->tpl_vars['name']->value] != '') {?>class="error"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
						<?php
$__section_tmp2_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_tmp2']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp2'] : false;
$__section_tmp2_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['input_options']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_tmp2_3_total = $__section_tmp2_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_tmp2'] = new Smarty_Variable(array());
if ($__section_tmp2_3_total != 0) {
for ($__section_tmp2_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index'] = 0; $__section_tmp2_3_iteration <= $__section_tmp2_3_total; $__section_tmp2_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index']++){
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['input_options']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index'] : null)];?>
" <?php if ($_smarty_tpl->tpl_vars['input_options']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index'] : null)] == $_smarty_tpl->tpl_vars['value']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['input_options']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index'] : null)];?>
</option>
						<?php
}
}
if ($__section_tmp2_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_tmp2'] = $__section_tmp2_3_saved;
}
?>
						</select>&nbsp;
					<?php } elseif ($_smarty_tpl->tpl_vars['input_type']->value == 'checkbox') {?>
						<input class="form-control" <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->tpl_vars['name']->value] != '') {?>class="error"<?php }?> type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[]" value="_hidden" style="display:none;" checked="checked" />
						<?php
$__section_tmp2_4_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_tmp2']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp2'] : false;
$__section_tmp2_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['input_options']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_tmp2_4_total = $__section_tmp2_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_tmp2'] = new Smarty_Variable(array());
if ($__section_tmp2_4_total != 0) {
for ($__section_tmp2_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index'] = 0; $__section_tmp2_4_iteration <= $__section_tmp2_4_total; $__section_tmp2_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index']++){
?>
							<input class="form-control minput" type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['input_options']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index'] : null)];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['input_options']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index'] : null)],$_smarty_tpl->tpl_vars['value']->value)) {?>checked="checked"<?php }?> /><?php echo $_smarty_tpl->tpl_vars['input_options']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp2']->value['index'] : null)];?>
<br />
						<?php
}
}
if ($__section_tmp2_4_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_tmp2'] = $__section_tmp2_4_saved;
}
?>
					<?php } elseif ($_smarty_tpl->tpl_vars['input_type']->value == 'file') {?>
						Current logo:<br />
						<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
img.php?q=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" alt="" /><br /><br />
						<input class="form-control" type="file" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[]" />
					<?php } else { ?>

						<?php if (mb_strtolower($_smarty_tpl->tpl_vars['title']->value, 'UTF-8') == 'website logo' || mb_strtolower($_smarty_tpl->tpl_vars['title']->value, 'UTF-8') == 'company default logo' || mb_strtolower($_smarty_tpl->tpl_vars['title']->value, 'UTF-8') == 'logo') {?>
						 	<label id="<?php echo $_smarty_tpl->tpl_vars['settingsLogo']->value;?>
Label" for="<?php echo $_smarty_tpl->tpl_vars['settingsLogo']->value;?>
File">Upload new</label>
							<input accept=".jpg,.jpeg,.png, .gif, .bmp" type="file" name="<?php echo $_smarty_tpl->tpl_vars['settingsLogo']->value;?>
File" id="<?php echo $_smarty_tpl->tpl_vars['settingsLogo']->value;?>
File" class="form-control inputfile minput" />
							 <input class="form-control minput <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->tpl_vars['name']->value] != '') {?> error<?php }?>" type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" size="42" />&nbsp;

							<?php echo '<script'; ?>
 type="text/javascript">
								 $('#<?php echo $_smarty_tpl->tpl_vars['settingsLogo']->value;?>
File').change(function() {
									 var fname = $('#<?php echo $_smarty_tpl->tpl_vars['settingsLogo']->value;?>
File').val().split('\\').pop();
									 if( fname )
										$('#<?php echo $_smarty_tpl->tpl_vars['settingsLogo']->value;?>
Label').html(fname);
									 else
										$('#<?php echo $_smarty_tpl->tpl_vars['settingsLogo']->value;?>
Label').html($('#<?php echo $_smarty_tpl->tpl_vars['settingsLogo']->value;?>
Label').html());
									 });
							<?php echo '</script'; ?>
>

						<?php } else { ?>

						    <input class="form-control minput <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->tpl_vars['name']->value] != '') {?> error<?php }?>" type="text" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" size="42" />&nbsp;
					

						<?php }?>

					<?php }?>

					</div>

					<div class="col-lg-3 col-md-3 col-sm-8">
						<?php echo $_smarty_tpl->tpl_vars['description']->value;?>

					</div>


					<?php if (mb_strtolower($_smarty_tpl->tpl_vars['title']->value, 'UTF-8') == 'website logo' || mb_strtolower($_smarty_tpl->tpl_vars['title']->value, 'UTF-8') == 'company default logo' || mb_strtolower($_smarty_tpl->tpl_vars['title']->value, 'UTF-8') == 'invoice logo path') {?>
					<div class="col-lg-3 col-md-3 col-sm-8">
						<img width="150" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['value']->value;?>
" />
					</div>
					<?php }?>
						
				</div>

				</div>

			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</div>
			<div class="button-holder-admin" style="margin-top: 25px;">
				<input type="hidden" name="action" value="update_settings" />

				<button onclick="jobberBase.messages.add('Settings saved');" type="submit" class="btn btn-default btn-primary mbtn" name="submit" id="save" >Save</button>

				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
settings/" style="text-decoration: none;">
					<button type="button" class="btn btn-default btn-warning mbtn" name="button" id="button" >Cancel</button>
				</a>

			</div>
		</form>
		<?php }?>
		</div>
	</div>
 </div>
		
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
