<?php
/* Smarty version 3.1.30, created on 2019-08-10 16:06:55
  from "C:\wamp64\www\sjs-admin\_tpl\stats.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d4edd8f9b0227_23084529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d88acac0c85e61348fdfb404e3979ccce85befc' => 
    array (
      0 => 'C:\\wamp64\\www\\sjs-admin\\_tpl\\stats.tpl',
      1 => 1562146817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d4edd8f9b0227_23084529 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		
		<div class="admin-content">
		  <div class="admin-wrap-content">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb20">
			  <label class="admin-label">Statistics</label>
			  <div><?php if (!$_smarty_tpl->tpl_vars['PAYPAL_PLUGIN']->value) {?> Note: Paypal payment plugin missing.<?php }?></div>
			</div>
			<br /><br />

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				
				<?php if ($_smarty_tpl->tpl_vars['PAYPAL_PLUGIN']->value == '1') {?>
				<div class="row-fluid">
					<div class="light">Payments / orders</div>
						<div class="row dash-boxes">
							<div class="dash-box1">
								<div class="row dash-icon" style="margin: 0; padding: 0;"><?php echo $_smarty_tpl->tpl_vars['payment_reports']->value['this_week'];?>
</div>
								<div class="row dash-text" >payments this week</div>
							</div>
							<div class="dash-box2">
								<div class="row dash-icon" style="margin: 0; padding: 0;"><?php echo $_smarty_tpl->tpl_vars['payment_reports']->value['this_month'];?>
</div>
								<div class="row dash-text" >payments this month</div>
							</div>
							<div class="dash-box3">
								<div class="row dash-icon" style="margin: 0; padding: 0;"><?php echo $_smarty_tpl->tpl_vars['payment_reports']->value['monthly_revenue'];?>
</div>
								<div class="row dash-text" >last 30 days revenue</div>
							</div>
						</div>
				</div>
				<?php } else { ?>
				<div class="row-fluid">
					<div class="light">Payments / orders</div>
						<div class="row dash-boxes">
							<div class="dash-box1">
								<div class="row dash-icon" style="margin: 0; padding: 0;">*</div>
								<div class="row dash-text" >payments this week</div>
							</div>
							<div class="dash-box2">
								<div class="row dash-icon" style="margin: 0; padding: 0;">*</div>
								<div class="row dash-text" >payments this month</div>
							</div>
							<div class="dash-box3">
								<div class="row dash-icon" style="margin: 0; padding: 0;">*</div>
								<div class="row dash-text" >last 30 days revenue</div>
							</div>
						</div>
				</div>
				<?php }?>

				<br />
				<div class="row-fluid">
					<div class="light">New application statistics</div>
						<div class="row dash-boxes">
							<div class="dash-box1">
								<div class="row dash-icon" style="margin: 0; padding: 0;"><?php echo $_smarty_tpl->tpl_vars['app_stats']->value['today'];?>
</div>
								<div class="row dash-text" >applications today</div>
							</div>
							<div class="dash-box2">
								<div class="row dash-icon" style="margin: 0; padding: 0;"><?php echo $_smarty_tpl->tpl_vars['app_stats']->value['this_week'];?>
</div>
								<div class="row dash-text" >applications this week</div>
							</div>
							<div class="dash-box3">
								<div class="row dash-icon" style="margin: 0; padding: 0;"><?php echo $_smarty_tpl->tpl_vars['app_stats']->value['this_month'];?>
</div>
								<div class="row dash-text" >applications this month</div>
							</div>
						</div>
				</div>
				<br />
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				
				<div class="row-fluid">
					<div class="light">New jobs statistics</div>

					<div class="row dash-boxes">
						<div class="dash-box1">
							<div class="row dash-icon" style="margin: 0; padding: 0;"><?php echo $_smarty_tpl->tpl_vars['job_stats']->value['today'];?>
 </div>
							<div class="row dash-text" >new jobs today</div>
						</div>
						<div class="dash-box2">
							<div class="row dash-icon" style="margin: 0; padding: 0;"><?php echo $_smarty_tpl->tpl_vars['job_stats']->value['this_week'];?>
</div>
							<div class="row dash-text" >new jobs this week</div>
						</div>
						<div class="dash-box3">
							<div class="row dash-icon" style="margin: 0; padding: 0;"><?php echo $_smarty_tpl->tpl_vars['job_stats']->value['this_month'];?>
</div>
							<div class="row dash-text" >new jobs this month</div>
						</div>
					</div>
				</div>
				<br />


				<div class="row-fluid">
					<div class="light">Job board users</div>

					<div class="row dash-boxes">
						<div class="dash-box1">
							<div class="row dash-icon" style="margin: 0; padding: 0;"><?php echo $_smarty_tpl->tpl_vars['user_stats']->value['companies'];?>
 </div>
							<div class="row dash-text" >registered companies</div>
						</div>
						<div class="dash-box2">
							<div class="row dash-icon" style="margin: 0; padding: 0;"><?php echo $_smarty_tpl->tpl_vars['user_stats']->value['candidates'];?>
</div>
							<div class="row dash-text" >registered candidates</div>
						</div>
						<div class="dash-box3">
							<div class="row dash-icon" style="margin: 0; padding: 0;"><?php echo $_smarty_tpl->tpl_vars['user_stats']->value['subscribers'];?>
</div>
							<div class="row dash-text" >total subscribers</div>
						</div>
					</div>
				</div>
				<br />
			</div>
			<br /><br />
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<br />
				<div class="row-fluid">
					<div class="light mb20">Spam report</div>

					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr class="fs14">
									<th>Job title</th>
									<th>Message</th>
									<th>Votes</th>
									<th>Date</th>
								</tr>
							</thead>
							<tbody class="gray">
							<?php
$__section_tmp_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp'] : false;
$__section_tmp_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['spam_reports']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_tmp_0_total = $__section_tmp_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_tmp'] = new Smarty_Variable(array());
if ($__section_tmp_0_total != 0) {
for ($__section_tmp_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] = 0; $__section_tmp_0_iteration <= $__section_tmp_0_total; $__section_tmp_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']++){
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['spam_reports']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['title'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['spam_reports']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['msg'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['spam_reports']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['count'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['spam_reports']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['date'];?>
</td>
								</tr>
							<?php
}
}
if ($__section_tmp_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_tmp'] = $__section_tmp_0_saved;
}
?>
						</table>
					</div>
				</div>

				<br /><br />
	 		<!-- LAST 50 SEARCHES -->
				<div class="row-fluid">
					<label class="light" ><?php echo $_smarty_tpl->tpl_vars['translations']->value['stats']['last_50_searches'];?>
</label>
					<div class="">
						<div class="suggestion mb1">
							<span class="blue-font">Total searches:</span> <?php echo $_smarty_tpl->tpl_vars['keywordz']->value['count'];?>
,&nbsp; <span class="blue-font">Average last week:</span> <?php echo $_smarty_tpl->tpl_vars['keywordz']->value['avg'];?>
,&nbsp;  <span class="blue-font">Maximum last week:</span> <?php echo $_smarty_tpl->tpl_vars['keywordz']->value['max'];?>

						</div><br />
						<div class="stats_list"><?php echo $_smarty_tpl->tpl_vars['keywordz']->value['stats'];?>
</div>
					</div>
				</div>
			</div>
		</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
