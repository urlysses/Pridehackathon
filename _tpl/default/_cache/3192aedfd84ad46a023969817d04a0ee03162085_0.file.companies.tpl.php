<?php
/* Smarty version 3.1.30, created on 2019-08-10 16:29:29
  from "C:\wamp64\www\_tpl\default\jobs\companies.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d4ee2d96d81f6_03228545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3192aedfd84ad46a023969817d04a0ee03162085' => 
    array (
      0 => 'C:\\wamp64\\www\\_tpl\\default\\jobs\\companies.tpl',
      1 => 1562146817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:1.5/layout/sjs-header.tpl' => 1,
    'file:jobs/PAGINATOR.tpl' => 2,
    'file:1.5/layout/sjs-footer.tpl' => 1,
  ),
),false)) {
function content_5d4ee2d96d81f6_03228545 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:1.5/layout/sjs-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="jobs-v1 companies-list">
	<div class="container">
		<div class="row search-heading">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2 class="tal-desk"><?php echo $_smarty_tpl->tpl_vars['translations']->value['companies']['desc'];?>
</h2>
			</div>
		</div>

		<div class="row search-filter">
	
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companies']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
				<div class="row search-result">

					<div class="col-lg-2 col-md-2 col-sm-3 colx-xs-12">
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_JOBS_AT_COMPANY']->value;?>
/<?php ob_start();
echo $_smarty_tpl->tpl_vars['c']->value['id'];
$_prefixVariable1=ob_get_clean();
echo $_smarty_tpl->tpl_vars['varnames']->value[$_prefixVariable1];?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="info">
							<img class="company-list-logo" src="/<?php echo $_smarty_tpl->tpl_vars['c']->value['logo_path'];?>
" alt="Company logo" />
						</a>
					</div>
					<div class="col-lg-5 col-md-5 col-sm-12 colx-xs-12">
						<h3><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_JOBS_AT_COMPANY']->value;?>
/<?php ob_start();
echo $_smarty_tpl->tpl_vars['c']->value['id'];
$_prefixVariable2=ob_get_clean();
echo $_smarty_tpl->tpl_vars['varnames']->value[$_prefixVariable2];?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="info"><?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
</a></h3>
						<ul class="mb3p">
							<li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['c']->value['hq'];?>
</li>
						</ul>
						<p class="company-desc"><?php echo $_smarty_tpl->tpl_vars['c']->value['company_desc_excerpt'];?>
</p>

					</div>
					<div class="col-lg-5 col-md-5 hidden-sm-12 hidden-xs-12">
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_JOBS_AT_COMPANY']->value;?>
/<?php ob_start();
echo $_smarty_tpl->tpl_vars['c']->value['id'];
$_prefixVariable3=ob_get_clean();
echo $_smarty_tpl->tpl_vars['varnames']->value[$_prefixVariable3];?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="info"><button type="button" class="btn company-more-ur more-ur"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['more'];?>
</button></a>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

						<div class="hidden-md hidden-lg hidden-sm col-xs-12">
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_JOBS_AT_COMPANY']->value;?>
/<?php ob_start();
echo $_smarty_tpl->tpl_vars['c']->value['id'];
$_prefixVariable4=ob_get_clean();
echo $_smarty_tpl->tpl_vars['varnames']->value[$_prefixVariable4];?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="info"><button type="button" class="btn company-more-ur"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['more'];?>
</button></a>
							<hr />
						</div>

						<hr />
					</div>
				</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


				<div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
					<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
					</div>
					<div class="ml19p col-lg-10 col-md-10 col-sm-6 col-xs-6">
						<?php $_smarty_tpl->_subTemplateRender("file:jobs/PAGINATOR.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					</div>
				</div>

				<div class="col-lg-12 col-md-12 hidden-lg hidden-md">
						<?php $_smarty_tpl->_subTemplateRender("file:jobs/PAGINATOR.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

				</div>

			</div>
		</div>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:1.5/layout/sjs-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
