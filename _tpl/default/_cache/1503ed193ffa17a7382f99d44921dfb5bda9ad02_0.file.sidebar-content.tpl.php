<?php
/* Smarty version 3.1.30, created on 2019-08-10 19:30:52
  from "C:\wamp64\www\_tpl\default\snippets\sidebar-content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d4f0d5cde2e02_28120219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1503ed193ffa17a7382f99d44921dfb5bda9ad02' => 
    array (
      0 => 'C:\\wamp64\\www\\_tpl\\default\\snippets\\sidebar-content.tpl',
      1 => 1562146817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4f0d5cde2e02_28120219 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row search-filter">
	<div class="col-md-3 col-md-3 col-sm-12 col-xs-12">
		
		<!-- JOB TYPES -->
		<?php if (!isset($_smarty_tpl->tpl_vars['hide_filter']->value) && $_smarty_tpl->tpl_vars['types']->value) {?>
		<div class="search-content">
			<h5 class="job-heading"><?php echo $_smarty_tpl->tpl_vars['translations']->value['searchbar']['job_types'];?>
</h5>
			<div class="filter-menu <?php if (count($_smarty_tpl->tpl_vars['types']->value) > 8) {?> scrollbar <?php }?>">
				<div class="filter-title">
					<h2><?php echo $_smarty_tpl->tpl_vars['translations']->value['searchbar']['select'];?>
</h2>
					<i class="fa fa-angle-down" aria-hidden="true"></i>
				</div>
				<div class="filter-slide displayNone" >
 
					<?php
$__section_tmp_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp'] : false;
$__section_tmp_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['types']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_tmp_0_total = $__section_tmp_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_tmp'] = new Smarty_Variable(array());
if ($__section_tmp_0_total != 0) {
for ($__section_tmp_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] = 0; $__section_tmp_0_iteration <= $__section_tmp_0_total; $__section_tmp_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']++){
?>

						<?php if ($_smarty_tpl->tpl_vars['type_name']->value == $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['var_name']) {?>
							<label><input type="checkbox" id="check_<?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['var_name'];?>
" name="act" data-url="/<?php echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
/" data="<p class='type_searchrd' id='<?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['var_name'];?>
_ctype' data='<?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['name'];?>
' data-id='<?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['var_name'];?>
'><?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['name'];?>
</p>" class="checkbox-green filtervariable" value="<?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['var_name'];?>
_ctype" /><h6><?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['name'];?>
 <span class="bracket bracket-active">(<?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['job_count'];?>
)</span></h6></label><br />
						<?php } else { ?>
							<label><input type="checkbox" id="check_<?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['var_name'];?>
" name="act" data-url="/<?php echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
/" data="<p class='type_searchrd' id='<?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['var_name'];?>
_ctype' data='<?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['name'];?>
' data-id='<?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['var_name'];?>
'><?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['name'];?>
</p>" class="checkbox-green filtervariable" value="<?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['var_name'];?>
_ctype" /> <h6><?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['name'];?>
 <span class="bracket">(<?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['job_count'];?>
)</span></h6></label><br />
						<?php }?>

					<?php
}
}
if ($__section_tmp_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_tmp'] = $__section_tmp_0_saved;
}
?>

				</div>
			</div>
			<br />
		</div>
		<?php }?>

		<!-- CATEGORIES -->
		<div class="search-content">
			<h5 class="job-heading"><?php echo $_smarty_tpl->tpl_vars['translations']->value['alljobs']['jobs_categories'];?>
</h5>
			<div class="filter-menu <?php if (count($_smarty_tpl->tpl_vars['types']->value) > 8) {?> scrollbar <?php }?>">
				<div class="filter-title">
					<h2><?php echo $_smarty_tpl->tpl_vars['translations']->value['searchbar']['select'];?>
</h2>
					<i class="fa fa-angle-down" aria-hidden="true"></i>
				</div>
				<div class="filter-slide displayNone" >
				
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dropdown_cats']->value, 'obj', false, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['obj']->value) {
?>
			
					<?php if ($_smarty_tpl->tpl_vars['current_category_name']->value == $_smarty_tpl->tpl_vars['name']->value) {?>
						<label><input type="checkbox" id="check_<?php echo $_smarty_tpl->tpl_vars['obj']->value->url;?>
" data-url="/<?php echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
/" data="<p class='type_searchrd' id='<?php echo $_smarty_tpl->tpl_vars['obj']->value->url;?>
_catgry' data='<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
' data-id='<?php echo $_smarty_tpl->tpl_vars['obj']->value->url;?>
'><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>" class="checkbox-green filtervariable actcat" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->url;?>
_catgry" /><h6><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <span class="bracket bracket-active">(<?php echo $_smarty_tpl->tpl_vars['obj']->value->jobs;?>
)</span></h6></label><br />
					<?php } else { ?>
						<label><input type="checkbox" id="check_<?php echo $_smarty_tpl->tpl_vars['obj']->value->url;?>
" data-url="/<?php echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
/" data="<p class='type_searchrd' id='<?php echo $_smarty_tpl->tpl_vars['obj']->value->url;?>
_catgry' data='<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
' data-id='<?php echo $_smarty_tpl->tpl_vars['obj']->value->url;?>
'><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>" class="checkbox-green filtervariable" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->url;?>
_catgry" /><h6><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <span class="bracket">(<?php echo $_smarty_tpl->tpl_vars['obj']->value->jobs;?>
)</span></h6></label><br />
					<?php }?>
 
			  	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


				</div>
			</div>
			<br />
		</div>

		<!-- LOCATION -->
		<div class="search-content">
			<h5 class="job-heading"><?php echo $_smarty_tpl->tpl_vars['translations']->value['alljobs']['cities'];?>
</h5>
			<div class="filter-menu <?php if (count($_smarty_tpl->tpl_vars['types']->value) > 8) {?> scrollbar <?php }?>">
				<div class="filter-title">
					<h2><?php echo $_smarty_tpl->tpl_vars['translations']->value['searchbar']['select'];?>
</h2>
					<i class="fa fa-angle-down" aria-hidden="true"></i>
				</div>
				<div class="filter-slide displayNone" >
				
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dropdown_countries']->value, 'obj', false, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['obj']->value) {
?>
			
					<?php if ($_smarty_tpl->tpl_vars['current_city']->value == $_smarty_tpl->tpl_vars['name']->value) {?>
						<label><input type="checkbox" id="check_<?php echo $_smarty_tpl->tpl_vars['obj']->value->url;?>
" data-url="/<?php echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
/" data="<p class='type_searchrd' id='<?php echo $_smarty_tpl->tpl_vars['obj']->value->url;?>
_loctn' data='<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
' data-id='<?php echo $_smarty_tpl->tpl_vars['obj']->value->url;?>
'><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>" class="checkbox-green filtervariable actloc" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->url;?>
_loctn" /><h6><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <span class="bracket bracket-active">(<?php echo $_smarty_tpl->tpl_vars['obj']->value->jobs_count;?>
)</span></h6></label><br />
					<?php } else { ?>
						<label><input type="checkbox" id="check_<?php echo $_smarty_tpl->tpl_vars['obj']->value->url;?>
" data-url="/<?php echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
/" data="<p class='type_searchrd' id='<?php echo $_smarty_tpl->tpl_vars['obj']->value->url;?>
_loctn' data='<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
' data-id='<?php echo $_smarty_tpl->tpl_vars['obj']->value->url;?>
'><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>" class="checkbox-green filtervariable" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->url;?>
_loctn" /><h6><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <span class="bracket">(<?php echo $_smarty_tpl->tpl_vars['obj']->value->jobs_count;?>
)</span></h6></label><br />
					<?php }?>
 
			  	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


				</div>
			</div>
			<br />
		</div>

		<!-- JOB ALERT SUBSCRIPTION -->
		<div class="search-content search-content-custom">
			<h5 class="job-heading"><?php echo $_smarty_tpl->tpl_vars['subscribe_msg']->value;?>
</h5>

			<input type="hidden" id="subscategory" name="subscategory" value="<?php echo $_smarty_tpl->tpl_vars['current_category_id']->value;?>
" />
			<input required name="subscribe_email" id="subscribe_email" placeholder="<?php echo $_smarty_tpl->tpl_vars['translations']->value['detail_sidebar']['control_email'];?>
" maxlength="100" type="email"  class="form-control subscribe-desktop">

			<button type="submit" class="btn btn-subsc" name="subscribe-btn" id="subscribe-btn" onclick="return SimpleJobScript.Subscribe();"><?php echo $_smarty_tpl->tpl_vars['translations']->value['subscriptions']['subscribe_submit'];?>
</button>

			 <div class="search-content search-content-custom">
				 <div class="loading">
				 	<img id="fspinner_subscribe" class="reload-spinner displayNone" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/reload.gif" alt="ajax loader">

				 		<div id="subscribe-pos" class="jobalert-pos displayNone"><?php echo $_smarty_tpl->tpl_vars['translations']->value['subscriptions']['positive_feedback'];?>
</div>
						<div id="subscribe-neg" class="jobalert-neg displayNone"><?php echo $_smarty_tpl->tpl_vars['translations']->value['subscriptions']['negative_feedback'];?>
</div>
						<div id="subscribe-wrongemail" class="jobalert-neg displayNone"><?php echo $_smarty_tpl->tpl_vars['translations']->value['subscriptions']['wrongemail_feedback'];?>
</div>
						<div class="clear"></div>
				 </div>
			</div>

		</div>

		<!-- BANNERS AND ADSENSE -->
		<div class="search-content search-content-custom">
			<?php if (@constant('BANNER_MANAGER') == 'true') {?>
				<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['banners_side_rectangle']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

			<?php }?>

			<?php if (@constant('ADSENSE') == 'true') {?>
				<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['adsense_side_rectangle']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

			<?php }?>
		</div>

	</div><?php }
}
