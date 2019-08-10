<?php
/* Smarty version 3.1.30, created on 2019-08-10 19:30:52
  from "C:\wamp64\www\_tpl\default\jobs\all-jobs.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d4f0d5cb31363_93862826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba23e824b1e232513eefcace6278ba438c9df153' => 
    array (
      0 => 'C:\\wamp64\\www\\_tpl\\default\\jobs\\all-jobs.tpl',
      1 => 1562146817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:1.5/layout/sjs-header.tpl' => 1,
    'file:snippets/searchbar-content.tpl' => 2,
    'file:snippets/sidebar-content.tpl' => 2,
    'file:jobs/listing-headline.tpl' => 2,
    'file:jobs/ALL-JOBS-LOOP.tpl' => 2,
    'file:jobs/PAGINATOR.tpl' => 2,
    'file:1.5/layout/sjs-footer.tpl' => 1,
  ),
),false)) {
function content_5d4f0d5cb31363_93862826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:1.5/layout/sjs-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="splash job-search mobileMT10">
	<div class="container">
		<?php if ($_smarty_tpl->tpl_vars['INDEED']->value == 'activated') {?>

		    <?php if ($_smarty_tpl->tpl_vars['INDEED_BOTH_JOBS_FLAG']->value) {?>
			    <div id="searchbar">
					<?php $_smarty_tpl->_subTemplateRender("file:snippets/searchbar-content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				</div>
		    <?php } else { ?>
				<div id="searchbar">
					<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['indeed_tpl_searchbar']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

				</div>
			<?php }?>
		<?php } else { ?>
			<div id="searchbar">
				<?php $_smarty_tpl->_subTemplateRender("file:snippets/searchbar-content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

			</div>
		<?php }?>
	</div>
</div>

<div class="jobs-v1">
	<div class="container">
		<div class="row search-heading">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<h2></h2>
			</div>
		</div>

			<!-- SIDEBAR FILTERS -->
			<?php if ($_smarty_tpl->tpl_vars['INDEED']->value == 'activated') {?>

				<?php if ($_smarty_tpl->tpl_vars['INDEED_BOTH_JOBS_FLAG']->value) {?>
					<?php $_smarty_tpl->_subTemplateRender("file:snippets/sidebar-content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				<?php } else { ?>
					<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['indeed_tpl_sidebar']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

									
					<?php if (@constant('BANNER_MANAGER') == 'true') {?>
					<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['banners_side_rectangle']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

					<?php }?>

					<?php if (@constant('ADSENSE') == 'true') {?>
					<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['adsense_side_rectangle']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

					<?php }?>
				
				<?php }?>
			<?php } else { ?>
				<?php $_smarty_tpl->_subTemplateRender("file:snippets/sidebar-content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

			<?php }?>
			<!-- SIDEBAR FILTERS -->

			<!-- JOB LISTINGS -->
			<div class="col-md-9 col-sm-12 col-xs-12 joblisting-padding">
				
<!-- *************************************** -->

		<div id="main" role="main" class="mobile-mt">
			<div id="jobs-loader" class="overlay displayNone" ></div>

				<?php if (@constant('BANNER_MANAGER') == 'true') {?>
				<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['banners_lb']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

				<?php }?>
				
				<?php if ($_smarty_tpl->tpl_vars['INDEED']->value == 'activated') {?>

				    <?php if ($_smarty_tpl->tpl_vars['INDEED_BOTH_JOBS_FLAG']->value) {?>
				    	<div class="remove_idd displayNone"> <?php echo $_smarty_tpl->tpl_vars['remove_id']->value;?>
</div>
					    <div id="job-listings">

                    		<?php $_smarty_tpl->_subTemplateRender("file:jobs/listing-headline.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


							<?php if ($_smarty_tpl->tpl_vars['jobs']->value) {?>
							<ul class="listings-block search-ajax-content">
								<div id="showres">
									
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jobs']->value, 'job', false, NULL, 'jobsLoop', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_jobsLoop']->value['iteration']++;
?>

											<?php if (@constant('BANNER_MANAGER') == 'true') {?>
												<?php if (!((isset($_smarty_tpl->tpl_vars['__smarty_foreach_jobsLoop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_jobsLoop']->value['iteration'] : null) % @constant('ADSENSE_LISTING_COUNT'))) {?> 
												<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['banners_jlb']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

												<?php }?>
											<?php }?>

											<!-- JOB LOOP -->
											<?php $_smarty_tpl->_subTemplateRender("file:jobs/ALL-JOBS-LOOP.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

											
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								
								</div>
							</ul>
							<!-- PAGINATOR -->
							<?php $_smarty_tpl->_subTemplateRender("file:jobs/PAGINATOR.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


							<?php } else { ?>

							<?php if ($_smarty_tpl->tpl_vars['INDEED']->value == 'deactivated') {?>
								<br />
								<div id="no-ads" class="general-wrap p25">
									<?php echo $_smarty_tpl->tpl_vars['translations']->value['alljobs']['no_jobs'];?>

								</div>
							<?php }?>

							<?php }?>
						</div>
				    <?php }?>

				    

					<div id="indeed-listings" <?php if (!$_smarty_tpl->tpl_vars['jobs']->value) {?>class="indeed-no-jobs"<?php }?>>
						<div id="indeed-listing-headline" class="listing-headline displayNone" >
							<?php echo $_smarty_tpl->tpl_vars['translations']->value['alljobs']['all_jobs'];?>

						</div>
					</div>
				<?php } else { ?>
					<div class="remove_idd displayNone" > <?php echo $_smarty_tpl->tpl_vars['remove_id']->value;?>
</div>
                    <div id="job-listings">

                    	<?php $_smarty_tpl->_subTemplateRender("file:jobs/listing-headline.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


						<?php if ($_smarty_tpl->tpl_vars['jobs']->value) {?>
						<ul class="listings-block search-ajax-content">
						<div id="showres">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jobs']->value, 'job', false, NULL, 'jobsLoop', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['job']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_jobsLoop']->value['iteration']++;
?>

									<?php if (@constant('BANNER_MANAGER') == 'true') {?>
										<?php if (!((isset($_smarty_tpl->tpl_vars['__smarty_foreach_jobsLoop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_jobsLoop']->value['iteration'] : null) % @constant('ADSENSE_LISTING_COUNT'))) {?> 
										<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['banners_jlb']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

										<?php }?>
									<?php }?>

									<!-- JOB LOOP -->
									<?php $_smarty_tpl->_subTemplateRender("file:jobs/ALL-JOBS-LOOP.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</div>
						</ul>	

						<?php } else { ?>
							<?php if ($_smarty_tpl->tpl_vars['INDEED']->value == 'deactivated') {?>
							<br />
							<div id="no-ads" class="general-wrap p25">
								<?php echo $_smarty_tpl->tpl_vars['translations']->value['alljobs']['no_jobs'];?>

							</div>
							<?php }?>
						<?php }?>
					</div>
				<?php }?>	
		</div>

<!-- ******************************************** -->

				<!-- PAGINATOR -->
				<?php if ($_smarty_tpl->tpl_vars['INDEED']->value == 'deactivated') {?>
					<?php $_smarty_tpl->_subTemplateRender("file:jobs/PAGINATOR.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

				<?php }?>
				<!-- PAGINATOR -->

			</div>
			<!-- JOB LISTINGS -->

		</div>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:1.5/layout/sjs-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
