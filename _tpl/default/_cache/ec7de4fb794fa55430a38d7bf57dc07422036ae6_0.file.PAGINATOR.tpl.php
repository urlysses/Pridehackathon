<?php
/* Smarty version 3.1.30, created on 2019-08-10 16:29:29
  from "C:\wamp64\www\_tpl\default\jobs\PAGINATOR.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d4ee2d97ff4a4_81383856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec7de4fb794fa55430a38d7bf57dc07422036ae6' => 
    array (
      0 => 'C:\\wamp64\\www\\_tpl\\default\\jobs\\PAGINATOR.tpl',
      1 => 1562146817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4ee2d97ff4a4_81383856 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['pages']->value) {?>
<div id="pagination-id" class="row pagination-cl">
	<div class="col-md-12">
			<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

	</div>
</div>
<br />
<?php }
}
}
