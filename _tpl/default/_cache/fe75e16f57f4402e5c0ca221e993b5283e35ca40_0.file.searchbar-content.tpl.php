<?php
/* Smarty version 3.1.30, created on 2019-08-10 19:30:52
  from "C:\wamp64\www\_tpl\default\snippets\searchbar-content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d4f0d5cd62698_35320468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe75e16f57f4402e5c0ca221e993b5283e35ca40' => 
    array (
      0 => 'C:\\wamp64\\www\\_tpl\\default\\snippets\\searchbar-content.tpl',
      1 => 1562146817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4f0d5cd62698_35320468 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="top-search">

			  <form id="search_form" class="search-form" role="search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
search/" autocomplete="on" onsubmit="return false;" >
			  	<input type="text" class="form-control" name="keywords" id="keywords" placeholder="<?php echo $_smarty_tpl->tpl_vars['translations']->value['searchbar']['input_text'];?>
">
			  	<button type="button" class="btn"><?php echo $_smarty_tpl->tpl_vars['translations']->value['alljobs']['searchbar_text'];?>
</button>
			  </form>

		</div>
	</div>
</div><?php }
}
