<?php
/* Smarty version 3.1.30, created on 2019-08-10 19:30:53
  from "C:\wamp64\www\_tpl\default\jobs\listing-headline.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d4f0d5d255b63_62204942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c341869ce914a0ccc47809a98a99ad6faa778785' => 
    array (
      0 => 'C:\\wamp64\\www\\_tpl\\default\\jobs\\listing-headline.tpl',
      1 => 1562146817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4f0d5d255b63_62204942 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="listing-headline" >
<?php if ($_smarty_tpl->tpl_vars['favourites_jobs']->value) {?>
		<div id="jobtypee" class="search_typee filterHeadline">
            <?php if ($_smarty_tpl->tpl_vars['current_jobtype']->value) {
echo $_smarty_tpl->tpl_vars['current_jobtype']->value;?>
 <?php } elseif ($_smarty_tpl->tpl_vars['current_category_name']->value) {?> <?php echo $_smarty_tpl->tpl_vars['current_category_name']->value;?>
 <?php } elseif ($_smarty_tpl->tpl_vars['city_name']->value) {?> <?php echo $_smarty_tpl->tpl_vars['city_name']->value;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['translations']->value['alljobs']['favourites_label'];
}?>                 
    </div>
    <div class="clearallfilters"> 
    	<span> <?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['clear'];?>
</span>
    </div>
	<?php } else { ?>
	      <?php if ($_smarty_tpl->tpl_vars['landing_searched']->value) {?>
		    <?php if ($_smarty_tpl->tpl_vars['landing_searched_msg']->value) {?>
		  		<div id="jobtypee" class="search_typee filterHeadline">
            	<?php if ($_smarty_tpl->tpl_vars['jobs']->value || $_smarty_tpl->tpl_vars['INDEED']->value == 'deactivated') {
echo $_smarty_tpl->tpl_vars['landing_searched_msg']->value;
}?> <?php if ($_smarty_tpl->tpl_vars['current_jobtype']->value) {?>/ <?php echo $_smarty_tpl->tpl_vars['current_jobtype']->value;
} elseif ($_smarty_tpl->tpl_vars['current_category_name']->value) {?> # <?php echo $_smarty_tpl->tpl_vars['current_category_name']->value;?>
 <?php } elseif ($_smarty_tpl->tpl_vars['city_name']->value) {?> # <?php echo $_smarty_tpl->tpl_vars['city_name']->value;
}?>                 
            </div>
            <div class="clearallfilters">
            	<span> <?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['clear'];?>
</span>
           	</div>
		  	<?php } else { ?>
		  		<?php echo $_smarty_tpl->tpl_vars['translations']->value['alljobs']['all_jobs'];?>
 <?php if ($_smarty_tpl->tpl_vars['current_jobtype']->value) {?> # <?php echo $_smarty_tpl->tpl_vars['current_jobtype']->value;?>
{}<?php }?>
		  	<?php }?>
		  <?php } else { ?>
			<div id="jobtypee" class="search_typee filterHeadline">
            	<?php if ($_smarty_tpl->tpl_vars['jobs']->value || $_smarty_tpl->tpl_vars['INDEED']->value == 'deactivated') {
if (!$_smarty_tpl->tpl_vars['current_jobtype']->value) {
echo $_smarty_tpl->tpl_vars['current_jobtype_search']->value;
}
}?> <?php if ($_smarty_tpl->tpl_vars['current_jobtype']->value) {?> # <?php echo $_smarty_tpl->tpl_vars['current_jobtype']->value;
} elseif ($_smarty_tpl->tpl_vars['current_category_name']->value) {?> # <?php echo $_smarty_tpl->tpl_vars['current_category_name']->value;
} elseif ($_smarty_tpl->tpl_vars['city_name']->value) {?> # <?php echo $_smarty_tpl->tpl_vars['city_name']->value;
}?>                 
            </div>
            <div class="clearallfilters">
            	<span> <?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['clear'];?>
</span>
           	</div>
		  <?php }?>
	<?php }?>
</div><?php }
}
