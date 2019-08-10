<?php
/* Smarty version 3.1.30, created on 2019-08-10 19:27:58
  from "C:\wamp64\www\_tpl\default\jobs\company.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d4f0cae047313_99681559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a3866f402ee971ecfc1d93487e758fa2d513191' => 
    array (
      0 => 'C:\\wamp64\\www\\_tpl\\default\\jobs\\company.tpl',
      1 => 1565461676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:1.5/layout/sjs-header.tpl' => 1,
    'file:jobs/company-posts-loop.tpl' => 1,
    'file:1.5/layout/sjs-footer.tpl' => 1,
  ),
),false)) {
function content_5d4f0cae047313_99681559 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:1.5/layout/sjs-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		
<div class="jobs-v1 company-detail">
	<div class="container">
 
		<div class="row mb2-half-p">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mlpl0">

				<div class="row">

					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 mlpl0" >
					</div>

					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 mlpl0" >

		 				<ul class="nav navbar-nav pull-left ttu">
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_COMPANIES']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['dashboard_recruiter']['back'];?>
</a></li>
						</ul>

						<ul class="nav navbar-nav pull-right ttu">
							<li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_REGISTER_RECRUITERS']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['dashboard_recruiter']['add_company'];?>
</a></li>
						</ul>
					</div>

				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="hero-company" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['company']->value['profile_picture'];?>
')">
						</div>
					</div>
					

					<div class="col-md-12">
						<div class="col-md-2">
							<div class="rise">
								<img id="profileLogo" class="company-logo img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['company']->value['logo_path'];?>
" />
								<h1 class="company-name"><?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
</h1>
								<p class="location"><i class="fa fa-map-marker" aria-hidden="true"><?php echo $_smarty_tpl->tpl_vars['company']->value['hq'];?>
</i></p>
							</div>
						</div>
						
 				 	</div>

					  <div class="col-md-12" style="margin-top:60px;">
						<div class="col-md-8">
							
							
						</div>
						
						<div class="col-md-2">
							<a target="_blank" href="http://<?php echo $_smarty_tpl->tpl_vars['company']->value['url'];?>
"><button type="button" class=" btn more-ur fl comp-pages-btn"><?php echo $_smarty_tpl->tpl_vars['translations']->value['dashboard_recruiter']['company_pages_label'];?>
</button></a>
						</div>
					</div>
				</div>

				<!--div class="row mlpl0">
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 mlpl0" >
					</div>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 mlpl0" >
						<img id="profile" class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['company']->value['profile_picture'];?>
" />
					</div>

				</div-->
				

				<!--div class="row mlpl0">
					<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs mlpl0" >
					</div>

					<div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 mlpl0" >
						<div class="rise">
							<img id="profileLogo" class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['company']->value['logo_path'];?>
" />
						</div>
					</div>

				</div-->

				

				<div class="row mlpl0 comp-hr">
					<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs mlpl0" >
					</div>

					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 mlpl0" >
						<hr />
					</div>

				</div>

				<div class="row mlpl0 job-details">
					<div class="col-lg-2 col-md-2 col-sm-1 hidden-xs mlpl0" >
					</div>

					<div class="col-lg-9 col-md-9 col-sm-10 col-xs-12 mlpl0" >
						<div class="detail-font company-detail-block" >
							<?php echo $_smarty_tpl->tpl_vars['company']->value['description'];?>

						</div>
					</div>
				</div>

			</div>
		</div> 

		<div class="row company-jobs">
	

			<div class="col-lg-1 col-md-1 hidden-sm col-xs-4 mlpl0" >
			</div>

			<div class="col-lg-10 col-md-10 col-sm-11 col-xs-12 comp-jobs-tablet-fix">

				<hr />

				<div class="row search-heading">
						<h2 class="tal-desk"><?php echo $_smarty_tpl->tpl_vars['translations']->value['dashboard_recruiter']['open_jobs'];?>
</h2>
				</div>

				<div id="job-listings">
				<?php if ($_smarty_tpl->tpl_vars['jobs']->value) {?>
					<?php $_smarty_tpl->_subTemplateRender("file:jobs/company-posts-loop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				<?php } else { ?>
					<div class="centerMobile">
						<?php echo $_smarty_tpl->tpl_vars['translations']->value['dashboard_recruiter']['no_entries'];?>

					</div>
				<?php }?>
				</div>		

	
			</div>

		</div>


	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:1.5/layout/sjs-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
