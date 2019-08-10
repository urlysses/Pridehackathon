<?php
/* Smarty version 3.1.30, created on 2019-08-10 16:54:34
  from "C:\wamp64\www\_tpl\default\jobs\company-posts-loop.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d4ee8ba392a86_21259147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bea9e42d59526b8b2f186cacf04ad74db784881' => 
    array (
      0 => 'C:\\wamp64\\www\\_tpl\\default\\jobs\\company-posts-loop.tpl',
      1 => 1562146817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:jobs/ALL-JOBS-LOOP.tpl' => 1,
  ),
),false)) {
function content_5d4ee8ba392a86_21259147 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['no_categ']->value != 1) {?>
	<?php if ($_smarty_tpl->tpl_vars['keywords']->value) {?>
		<div class="listing-headline"><?php echo $_smarty_tpl->tpl_vars['translations']->value['searchbar']['search_results_for'];?>
 <span class="searched"><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
</span> : </div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['jobs']->value) {?>

		<ul class="listings-block">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jobs']->value, 'job', false, NULL, 'jobsLoop', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_jobsLoop']->value['iteration']++;
?>

			<!-- Adsense plugin -->
			<?php if (@constant('ADSENSE') == 'true') {?>
				<?php if (!((isset($_smarty_tpl->tpl_vars['__smarty_foreach_jobsLoop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_jobsLoop']->value['iteration'] : null) % @constant('ADSENSE_LISTING_COUNT'))) {?> 
				<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['adsense_listing_leaderboard']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

				<?php }?>
			<?php }?>

				<?php $_smarty_tpl->_subTemplateRender("file:jobs/ALL-JOBS-LOOP.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

				
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</ul>

		<?php if ($_smarty_tpl->tpl_vars['pages']->value) {?>
		<div class="pagination">
		<ul>
			<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

		</ul>
		</div>
		<br />
		<?php }?>		

	<?php } else { ?>
		<div id="no-ads">
			<?php if ($_smarty_tpl->tpl_vars['CURRENT_PAGE']->value != 'search') {?>
				<?php echo $_smarty_tpl->tpl_vars['translations']->value['jobs']['no_job'];?>
 <strong><?php echo $_smarty_tpl->tpl_vars['current_category_name']->value;?>
</strong>.
				<?php if (@constant('ENABLE_NEW_JOBS')) {?>
					<br /><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
post/" title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['footer']['new_job_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['footer']['new_job'];?>
</a>
				<?php }?>
			<?php } else { ?>
				<?php echo $_smarty_tpl->tpl_vars['translations']->value['jobs']['no_job_found'];?>
<br /> <br /> <br />
			<?php }?>
		</div><!-- #no-ads -->
	<?php }
}
}
}
