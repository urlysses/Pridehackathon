<?php
/* Smarty version 3.1.30, created on 2019-08-10 15:51:07
  from "C:\wamp64\www\_tpl\default\snippets\homepage-jobs.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d4ed9dbf1e753_32290490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0523fbaedf1729f76f70e793c0077e97be0b84e2' => 
    array (
      0 => 'C:\\wamp64\\www\\_tpl\\default\\snippets\\homepage-jobs.tpl',
      1 => 1562146817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:jobs/JOBS-LOOP.tpl' => 1,
  ),
),false)) {
function content_5d4ed9dbf1e753_32290490 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['more_jobs']->value) {?>
<div class="action-req action-req-home-fix">
	<div class="container">
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-hidden col-xs-hidden ">
			</div>
			<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 joblisting-padding">
				
					<ul class="listings-block">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['more_jobs']->value, 'job', false, NULL, 'jobsLoop', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['job']->value) {
?>
						<!-- JOB LISTING TPL -->
						<?php $_smarty_tpl->_subTemplateRender("file:jobs/JOBS-LOOP.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</ul>
			
			</div>
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
			</div>
		</div>
	</div>
	</div>
<?php }
}
}
