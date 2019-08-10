<?php
/* Smarty version 3.1.30, created on 2019-08-10 16:25:18
  from "C:\wamp64\www\_tpl\default\jobs\job.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d4ee1de0afa80_44636607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '764b69e46ba17919ac70e94b6953a84fb3fa2e1c' => 
    array (
      0 => 'C:\\wamp64\\www\\_tpl\\default\\jobs\\job.tpl',
      1 => 1562146817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:1.5/layout/sjs-header.tpl' => 1,
    'file:snippets/detail-modals.tpl' => 1,
    'file:jobs/apply-existing-modal.tpl' => 1,
    'file:jobs/apply-modal.tpl' => 1,
    'file:snippets/listing-sitemap.tpl' => 1,
    'file:1.5/layout/sjs-footer.tpl' => 1,
  ),
),false)) {
function content_5d4ee1de0afa80_44636607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:1.5/layout/sjs-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php ob_start();
echo $_smarty_tpl->tpl_vars['job']->value['id'];
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('job_id', $_prefixVariable1);
?>

<?php $_smarty_tpl->_subTemplateRender("file:snippets/detail-modals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="job-details">
			<div class="container">
				<div class="row top-heading">
					<div class="col-md-12 col-xs-12">
						<a href="/<?php echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
"><button type="button" class="btn btn-back"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['backbtn_label'];?>
</button></a>
						<h1 itemprop="name"><?php echo $_smarty_tpl->tpl_vars['job']->value['title'];?>
</h1>
						<h2><?php echo $_smarty_tpl->tpl_vars['translations']->value['registration']['go_home'];?>
 > <?php echo $_smarty_tpl->tpl_vars['job']->value['category_name'];?>
</h2>
					</div>
				</div>
				<div class="row top-heading">

					<div class="col-md-9 col-xs-12 details">
						<h2 class="jobd-title"><?php echo $_smarty_tpl->tpl_vars['job']->value['title'];?>
 <?php if ($_smarty_tpl->tpl_vars['REMOTE_PORTAL']->value == 'deactivated') {
echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['in'];?>
 <?php echo $_smarty_tpl->tpl_vars['job']->value['location'];
}?> <?php if ($_smarty_tpl->tpl_vars['job']->value['new_flag']) {?><span class="new"><?php echo $_smarty_tpl->tpl_vars['translations']->value['job_detail_section']['new'];?>
</span><?php }?></h2>
						
						<?php if ($_smarty_tpl->tpl_vars['FAVORITES_PLUGIN']->value && $_smarty_tpl->tpl_vars['FAVORITES_PLUGIN']->value == 'true') {?>
							<?php if ($_smarty_tpl->tpl_vars['favourites_job_ids']->value && in_array($_smarty_tpl->tpl_vars['job']->value['id'],$_smarty_tpl->tpl_vars['favourites_job_ids']->value)) {?>
								<span id="desk-favourites-block-<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" ><a title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['alljobs']['favourites_tooltip_remove'];?>
" href="#" onclick="return SimpleJobScript.removeFromFavourites(<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
, '<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/', 'desk-');"><i class="fa fa-heart fa-lg ml10" aria-hidden="true"></i></a></span>
					 		<?php } else { ?>
					 			<span id="desk-favourites-block-<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" ><a title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['alljobs']['favourites_tooltip_add'];?>
" href="#" onclick="return SimpleJobScript.addToFavourites(<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
, '<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/', 'desk-');"><i class="fa fa-heart-o fa-lg ml10" aria-hidden="true"></i></a></span>
					 		<?php }?>
					 	<?php }?>

						<ul class="top-ul control-panel">
							<li><span><i class="fa fa-building" aria-hidden="true"></i></span> <?php echo $_smarty_tpl->tpl_vars['job']->value['company'];?>
</li>
							<li><span><i class="fa fa-braille" aria-hidden="true"></i></span> <?php echo $_smarty_tpl->tpl_vars['job']->value['job_type'];?>
</li>
							<li data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['detail_sidebar']['tooltip_email'];?>
"><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span> <a class="undsc" data-toggle="modal" data-target="#emailModal" href="#" onclick="return false;"><?php echo $_smarty_tpl->tpl_vars['translations']->value['detail_sidebar']['control_email'];?>
</a></li>
						</ul>
						<ul class="control-panel">
							<?php if ($_smarty_tpl->tpl_vars['REMOTE_PORTAL']->value == 'deactivated') {?>
							<li><span><i class="fa fa-map-marker" aria-hidden="true"></i></span> <?php echo $_smarty_tpl->tpl_vars['job']->value['location'];?>
</li>
							<?php }?>
							<li><span><i class="fa fa-calendar" aria-hidden="true"></i></span> <?php echo $_smarty_tpl->tpl_vars['job']->value['post_date'];?>
</li>
							<li data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['detail_sidebar']['tooltip_report'];?>
"><span><i class="fa fa-volume-up" aria-hidden="true"></i></span> <a class="undsc" data-toggle="modal" data-target="#reportModal" href="#" onclick="return false;"><?php echo $_smarty_tpl->tpl_vars['translations']->value['detail_sidebar']['control_report'];?>
</a></li>
						</ul>
					
						<div class="border-light"></div>

						<div class="social-links">
							<a class="popup" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
&amp;title=<?php echo $_smarty_tpl->tpl_vars['seo_title']->value;?>
"><button type="button" class="btn btn-social"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['sm_fb_label'];?>
</button></a>
							<a class="popup" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
&amp;title=<?php echo $_smarty_tpl->tpl_vars['seo_title']->value;?>
&amp;summary=Job opportunity&amp;source=<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"><button type="button" class="btn btn-social"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['sm_ln_label'];?>
</button></a>
							<a class="popup" href="https://plus.google.com/share?url=<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
"><button type="button" class="btn btn-social"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['sm_gp_label'];?>
</button></a>
							<a class="twitter popup" href="http://twitter.com/intent/tweet?status=check out a role @ +<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
" ><button type="button" class="btn btn-social"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['sm_tw_label'];?>
</button></a>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="detail-font" >
								<p itemprop="description"><?php echo $_smarty_tpl->tpl_vars['job']->value['description'];?>
</p>
							</div>
						</div>

							<div class="border-light"></div>
							<?php if ($_smarty_tpl->tpl_vars['job']->value['salary']) {?><p class="price-apply"><?php echo $_smarty_tpl->tpl_vars['job']->value['salary'];?>
</p><?php }?>

								<?php if ($_smarty_tpl->tpl_vars['job']->value['apply_online'] == 1) {?>

									<?php if ($_smarty_tpl->tpl_vars['SESSION_APPLICANT']->value == 'true') {?>
										<?php $_smarty_tpl->_subTemplateRender("file:jobs/apply-existing-modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

									<?php } else { ?>
										<?php $_smarty_tpl->_subTemplateRender("file:jobs/apply-modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

									<?php }?>

								<?php } else { ?>

								<!-- old approach
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mlpl0">
									<p class="hta-p"><?php echo $_smarty_tpl->tpl_vars['job']->value['apply_desc'];?>
</p>
								</div>-->

								<div class="hta-p">
									<a href="http://<?php echo $_smarty_tpl->tpl_vars['job']->value['apply_desc'];?>
" target="_blank"><button type="button" class="btn btn-apply"><?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['apply_btn'];?>
</button></a>
								</div>

								<?php }?>

								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 jd-ads-m">
								<?php if (@constant('ADSENSE') == 'true') {?>
									<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['adsense_detail_rectangle']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

								<?php }?>
								</div>


						</div>
						<div class="col-md-3 col-xs-12 co-name">

							<?php if ($_smarty_tpl->tpl_vars['job']->value['public_profile_flag'] == '1') {?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['job']->value['company_detail_url'];?>
"><img itemprop="image" class="co-logo" src="<?php echo $_smarty_tpl->tpl_vars['PROTOCOL_URL']->value;
echo $_smarty_tpl->tpl_vars['job']->value['company_logo_path'];?>
" alt="company logo" /></a>
							<?php } else { ?>
								<img itemprop="image" class="co-logo" src="<?php echo $_smarty_tpl->tpl_vars['PROTOCOL_URL']->value;
echo $_smarty_tpl->tpl_vars['job']->value['company_logo_path'];?>
" alt="company logo" />
							<?php }?>

							<h2 class="co-title"><?php echo $_smarty_tpl->tpl_vars['job']->value['company'];?>
</h2>
							<p class="co-summary">
								<?php echo $_smarty_tpl->tpl_vars['job']->value['company_desc_excerpt'];?>


							<?php if ($_smarty_tpl->tpl_vars['job']->value['public_profile_flag'] == '1') {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['job']->value['company_detail_url'];?>
" target="_blank"><button type="button" class="btn btn-more" ><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['more'];?>
</button></a>
							<?php }?>

							</p>

						</div>

						<div class="col-md-3 col-xs-12">
						<?php if (@constant('BANNER_MANAGER') == 'true') {?>
							<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['banners_detail_rectangle']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

						<?php }?>	
						</div>

					</div>

					<?php if ($_smarty_tpl->tpl_vars['related_jobs']->value) {?>
					<div class="row top-heading">
						<h2 class="heading"><?php echo $_smarty_tpl->tpl_vars['translations']->value['detail_sidebar']['related_jobs_title'];?>
</h2>

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['related_jobs']->value, 'job');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['job']->value) {
?>

							<div class="col-md-6 col-xs-12 similar-detail <?php if ($_smarty_tpl->tpl_vars['job']->value['spotlight'] == '1') {?>spotlight-related<?php }?>">
							<div class="col-md-2 col-xs-12">
								<img src="/<?php echo $_smarty_tpl->tpl_vars['job']->value['company_logo_path'];?>
" class="similar-co-logo">
							</div>

							<div class="col-md-10 col-xs-12">
								<h3 class="similer-position"><?php echo $_smarty_tpl->tpl_vars['job']->value['title'];?>
</h3>
								
								<ul class="similer-top-ul control-panel">
									<li class="similer-list-item"><span><i class="fa fa-building" aria-hidden="true"></i></span> <?php echo $_smarty_tpl->tpl_vars['job']->value['company'];?>
</li>
									<li class="similer-list-item"><span><i class="fa fa-braille" aria-hidden="true"></i></span> <?php echo $_smarty_tpl->tpl_vars['job']->value['job_type'];?>
</li>
								</ul>
								<ul class="similer-top-ul control-panel">
							
									<?php if ($_smarty_tpl->tpl_vars['REMOTE_PORTAL']->value == 'deactivated') {?>
										<li class="similer-list-item"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span> <?php echo $_smarty_tpl->tpl_vars['job']->value['location'];?>
</li>
									<?php }?>
									<li class="similer-list-item"><span><i class="fa fa-calendar" aria-hidden="true"></i></span> <?php echo $_smarty_tpl->tpl_vars['job']->value['post_date'];?>
</li>
								</ul>

								<?php if ($_smarty_tpl->tpl_vars['job']->value['salary']) {?><p class="similer-price-apply"><?php echo $_smarty_tpl->tpl_vars['job']->value['salary'];?>
</p><?php }?>
								<a rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_JOB']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['url_title'];?>
-<?php echo $_smarty_tpl->tpl_vars['job']->value['location_asci'];?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
">
									<button type="button" class="btn similer-btn-more"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['more'];?>
</button>
								</a>

								<?php if ($_smarty_tpl->tpl_vars['FAVORITES_PLUGIN']->value && $_smarty_tpl->tpl_vars['FAVORITES_PLUGIN']->value == 'true') {?>
									<?php if (in_array($_smarty_tpl->tpl_vars['job']->value['id'],$_smarty_tpl->tpl_vars['favourites_job_ids']->value)) {?>
										<span id="desk-favourites-block-<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" ><a title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['alljobs']['favourites_tooltip_remove'];?>
" href="#" onclick="return SimpleJobScript.removeFromFavourites(<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
, '<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/', 'desk-');"><i class="fa fa-heart fa-lg ml10 mt7" aria-hidden="true"></i></a></span>
							 		<?php } else { ?>
							 			<span id="desk-favourites-block-<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" ><a title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['alljobs']['favourites_tooltip_add'];?>
" href="#" onclick="return SimpleJobScript.addToFavourites(<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
, '<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/', 'desk-');"><i class="fa fa-heart-o fa-lg ml10 mt7" aria-hidden="true"></i></a></span>
							 		<?php }?>
							 	<?php }?>

							</div>
							</div>
					  	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


				</div>
				<!-- related jobs -->
				<?php }?>

			</div>
		</div>

		<?php $_smarty_tpl->_subTemplateRender("file:snippets/listing-sitemap.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() {
		SimpleJobScript.I18n = <?php echo $_smarty_tpl->tpl_vars['translationsJson']->value;?>
;
	    SimpleJobScript.initApplyValidation();

		$('#cv').change(function() {
			var fname = $('input[type=file]').val().split('\\').pop();
			if( fname )
				$('#cvLabel').html(fname);
			else
				$('#cvLabel').html($('#cvLabel').html());
        });

        $('.popup').click(function(event) {
		    var width  = 575,
		        height = 400,
		        left   = ($(window).width()  - width)  / 2,
		        top    = ($(window).height() - height) / 2,
		        url    = this.href,
		        opts   = 'status=1' +
		                 ',width='  + width  +
		                 ',height=' + height +
		                 ',top='    + top    +
		                 ',left='   + left;
		    
		    window.open(url, 'twitter', opts);
		    return false;
		  });

	});

<?php echo '</script'; ?>
>


<?php $_smarty_tpl->_subTemplateRender("file:1.5/layout/sjs-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
