{if $smarty.const.ADSENSE == 'true'}
	{if $smarty.foreach.jobsLoop.iteration is div by $smarty.const.ADSENSE_LISTING_COUNT} 
	{include file="$adsense_listing_leaderboard"}
	{/if}
{/if}
	
<div class="row latest-jobs search-result {if $job.spotlight == "1"}spotlight{/if}">
	
	<div class="col-md-12 wish-list">
	{if $FAVORITES_PLUGIN and $FAVORITES_PLUGIN == 'true'}
		{if $job.id|in_array:$favourites_job_ids}
			<span id="desk-favourites-block-{$job.id}" ><a title="{$translations.alljobs.favourites_tooltip_remove}" href="#" onclick="return SimpleJobScript.removeFromFavourites({$job.id}, '{$BASE_URL}_tpl/{$THEME}/img/', 'desk-');"><i class="fa fa-heart fa-lg ml10" aria-hidden="true"></i></a></span>
 		{else}
 			<span id="desk-favourites-block-{$job.id}" ><a title="{$translations.alljobs.favourites_tooltip_add}" href="#" onclick="return SimpleJobScript.addToFavourites({$job.id}, '{$BASE_URL}_tpl/{$THEME}/img/', 'desk-');"><i class="fa fa-heart-o fa-lg ml10" aria-hidden="true"></i></a></span>
 		{/if}
 	{else}
 		&nbsp;
	{/if}
	</div>

	{if not $COMPANY_JOB_LISTING == '1'}
	<div class="col-md-1 colx-xs-12">
			{if $job.public_profile_flag == '1'}
			<a href="{$job.company_detail_url}" target="_blank">
				<div class="listing-logo">
					<img class="" src="/{$job.company_logo_path}" alt="Company logo" />
				</div>
			</a>	
			{else}
				<div class="listing-logo">
					<img src="/{$job.company_logo_path}" alt="Company logo" />
				</div>
			{/if}
	</div>
	{/if}
	<br />

	<div class="col-md-7 colx-xs-12">

		<a rel="canonical" href="{$BASE_URL}{$URL_JOB}/{$job.url_title}-{$job.location_asci}/{$job.id}" >
			<h2 class="jobl-title">{$job.title} {if $job.new_flag}<span class="new">{$translations.job_detail_section.new}</span>{/if} </h2>
		</a>

		<ul>
			<li><span><i class="fa fa-building" aria-hidden="true"></i></span>{$job.company}</li>
			<li><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>{$job.location}</li>
		</ul>
		<ul>
			<li><span><i class="fa fa-braille" aria-hidden="true"></i></span>{$job.job_type}</li>
			
			<li><span><i class="fa fa-calendar" aria-hidden="true"></i></span>{$job.created_on}</li>
		</ul>
	</div>
	<div class="col-md-4 colx-xs-12">

		{if $job.salary}
		<h4><span>{$job.salary}</span></h4>
		{/if}

		<a rel="canonical" href="{$BASE_URL}{$URL_JOB}/{$job.url_title}-{$job.location_asci}/{$job.id}">
			<button type="button" class="btn">{$translations.website_general.more}</button>
		</a>

	</div>
	<div class="row">
		<div class="col-md-12 xol-xs-12">
				<a rel="canonical" href="{$BASE_URL}{$URL_JOB}/{$job.url_title}-{$job.location_asci}/{$job.id}" >
	 				<p>{$job.description_listing}</p>
	 			</a>
		</div>
	</div>
</div>