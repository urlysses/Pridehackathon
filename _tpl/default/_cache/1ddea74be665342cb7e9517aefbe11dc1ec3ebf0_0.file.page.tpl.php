<?php
/* Smarty version 3.1.30, created on 2019-08-10 16:37:00
  from "C:\wamp64\www\_tpl\default\static\page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d4ee49ca322a8_37162520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ddea74be665342cb7e9517aefbe11dc1ec3ebf0' => 
    array (
      0 => 'C:\\wamp64\\www\\_tpl\\default\\static\\page.tpl',
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
function content_5d4ee49ca322a8_37162520 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:1.5/layout/sjs-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if ($_smarty_tpl->tpl_vars['WYSIWYG_PAGE']->value) {?>
<div class="static-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
<?php }?>
				<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

				
<?php if ($_smarty_tpl->tpl_vars['WYSIWYG_PAGE']->value) {?>
			</div>
		</div>
	</div>
</div>			
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:1.5/layout/sjs-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
