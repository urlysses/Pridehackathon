<?php
/* Smarty version 3.1.30, created on 2019-08-10 15:51:08
  from "C:\wamp64\www\_tpl\default\snippets\listing-sitemap.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d4ed9dc44e3f0_97015233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17b25aa550aa01bba7d8d2ecdd5a37d69cbe51ef' => 
    array (
      0 => 'C:\\wamp64\\www\\_tpl\\default\\snippets\\listing-sitemap.tpl',
      1 => 1562146817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4ed9dc44e3f0_97015233 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['INDEED']->value == 'deactivated' || $_smarty_tpl->tpl_vars['INDEED_BOTH_JOBS_FLAG']->value) {?>
<div id="listing">
  <div class="container">
  <h2><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['listings'];?>
</h2>
  <div class="homepage-by"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['by'];?>
</div><br /><br />

    <div class="row">
      <div class="col-md-4 col-xs-6 c-box">
        <h4><?php echo $_smarty_tpl->tpl_vars['translations']->value['searchbar']['job_types'];?>
</h4>
        <ul>
          <?php
$__section_tmp_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp'] : false;
$__section_tmp_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['types']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_tmp_0_total = $__section_tmp_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_tmp'] = new Smarty_Variable(array());
if ($__section_tmp_0_total != 0) {
for ($__section_tmp_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] = 0; $__section_tmp_0_iteration <= $__section_tmp_0_total; $__section_tmp_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']++){
?>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['var_name'];?>
/" target="_blank"><?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['name'];?>
 <span class="bracket">(<?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['job_count'];?>
)</span></a></li>
           <?php
}
}
if ($__section_tmp_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_tmp'] = $__section_tmp_0_saved;
}
?>
        </ul>
      </div>

      <?php if ($_smarty_tpl->tpl_vars['dropdown_cats']->value) {?>
      <div class="col-md-4 col-xs-6 c-box">
      <h4><?php echo $_smarty_tpl->tpl_vars['translations']->value['alljobs']['jobs_categories'];?>
</h4>
        <ul>
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dropdown_cats']->value, 'obj', false, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['obj']->value) {
?>
            <li><a href="/<?php echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['obj']->value->url;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <span class="bracket">(<?php echo $_smarty_tpl->tpl_vars['obj']->value->jobs;?>
)</span> </a></li>
           <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
      </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['REMOTE_PORTAL']->value == 'deactivated') {?>
        <?php if ($_smarty_tpl->tpl_vars['dropdown_countries']->value) {?>
        <div class="col-md-4 col-xs-6 c-box">
        <h4><?php echo $_smarty_tpl->tpl_vars['translations']->value['alljobs']['cities'];?>
</h4>
          <ul>
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dropdown_countries']->value, 'obj', false, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['obj']->value) {
?>
                <li><a href="/<?php echo $_smarty_tpl->tpl_vars['URL_JOBS_IN_CITY']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['obj']->value->url;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <span class="bracket">(<?php echo $_smarty_tpl->tpl_vars['obj']->value->jobs_count;?>
)</span> </a></li>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </ul>
        </div>
        <?php }?>
      <?php }?>

    </div>
  </div>
</div>
<?php }
}
}
