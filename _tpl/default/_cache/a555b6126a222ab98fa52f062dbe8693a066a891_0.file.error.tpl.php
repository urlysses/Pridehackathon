<?php
/* Smarty version 3.1.30, created on 2019-08-10 19:17:44
  from "C:\wamp64\www\_tpl\default\err\error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d4f0a48e10b96_37119657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a555b6126a222ab98fa52f062dbe8693a066a891' => 
    array (
      0 => 'C:\\wamp64\\www\\_tpl\\default\\err\\error.tpl',
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
function content_5d4f0a48e10b96_37119657 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:1.5/layout/sjs-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<h2>404</h2>
				<i class="fa fa-safari" aria-hidden="true"></i>
				<h3><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['404_msg'];?>
</h3>
				<p class="404reason">
				<?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['404_txt_part_1'];?>
<br>
				<?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['404_txt_part_2'];?>
<br>
				<?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['404_txt_part_3'];?>
<br>
				<?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['404_txt_part_4'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['404_txt_part_5'];?>
</a> <?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['404_txt_part_6'];?>

				</p>
			</div>
		</div>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:1.5/layout/sjs-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
