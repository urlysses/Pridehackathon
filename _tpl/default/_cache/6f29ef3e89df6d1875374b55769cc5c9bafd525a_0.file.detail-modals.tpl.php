<?php
/* Smarty version 3.1.30, created on 2019-08-10 16:25:18
  from "C:\wamp64\www\_tpl\default\snippets\detail-modals.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d4ee1dec6d202_84829032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f29ef3e89df6d1875374b55769cc5c9bafd525a' => 
    array (
      0 => 'C:\\wamp64\\www\\_tpl\\default\\snippets\\detail-modals.tpl',
      1 => 1562146817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d4ee1dec6d202_84829032 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- REPORT -->
<div id="reportModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title modal-strong"><?php echo $_smarty_tpl->tpl_vars['translations']->value['detail_sidebar']['modal_report'];?>
</h3>
      </div>

      <div class="modal-body modal-body-fix">
              <form role="form">
                       <label for="reportarea"><?php echo $_smarty_tpl->tpl_vars['translations']->value['detail_sidebar']['modal_report_desc'];?>
</label>
                       <br /><br />
                       <input type="hidden" name="jobid" id="jobid" value="<?php echo $_smarty_tpl->tpl_vars['job_id']->value;?>
">
                       <textarea class="mb10" maxlength="999" rows="5" id="reportarea" name="reportarea"></textarea>
               </form>
               <div id="report-empty" class="red pt3p displayNone"><?php echo $_smarty_tpl->tpl_vars['translations']->value['detail_sidebar']['modal_feedback_empty'];?>
</div>
               <div id="report-positive" class="green pt3p displayNone"><?php echo $_smarty_tpl->tpl_vars['translations']->value['detail_sidebar']['modal_feedback_pos'];?>
</div>
               <div id="report-negative" class="red pt3p displayNone"><?php echo $_smarty_tpl->tpl_vars['translations']->value['detail_sidebar']['modal_feedback_neg'];?>
</div>
      </div>

      <div class="modal-footer preview-footer">
        <div class="modal-ajax-popups">
          <i id="fspinner" class="displayNone fa fa-refresh fa-spin fa-lg fa-fw refresh-spinner"></i>
         </div>

        <button type="button" class="btn btn-modal-a bh50" onclick="SimpleJobScript.ReportSpam();" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['translations']->value['detail_sidebar']['modal_submit'];?>
</button>

        <button type="button" class="btn btn-modal-c bh50" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['translations']->value['job_detail_section']['close'];?>
</button>
      </div>
    </div>

  </div>
</div>

<div id="emailModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title modal-strong"><?php echo $_smarty_tpl->tpl_vars['translations']->value['detail_sidebar']['modal_emailshare'];?>
</h3>
      </div>

      <div class="modal-body modal-body-fix">
              <form role="form">
                      
                  <input class="mb25" placeholder="<?php echo $_smarty_tpl->tpl_vars['translations']->value['detail_sidebar']['modal_email_from'];?>
" required type="email" name="emailfrom" id="emailfrom" >

                  <input class="mb25" placeholder="<?php echo $_smarty_tpl->tpl_vars['translations']->value['detail_sidebar']['modal_email_to'];?>
" required type="email" name="emailto" id="emailto" >

                  <textarea class="mb25" maxlength="999" rows="5" id="emailtext" name="emailtext"><?php echo $_smarty_tpl->tpl_vars['translations']->value['detail_sidebar']['modal_email_text'];
echo "\n\n";
echo $_smarty_tpl->tpl_vars['job_url']->value;?>
</textarea>


           <div id="email-empty" class="red displayNone"><?php echo $_smarty_tpl->tpl_vars['translations']->value['detail_sidebar']['modal_feedback_email_empty'];?>
</div>
           <div id="email-positive" class="green displayNone"><?php echo $_smarty_tpl->tpl_vars['translations']->value['detail_sidebar']['modal_feedback_email_pos'];?>
</div>
           <div id="email-negative" class="red displayNone"><?php echo $_smarty_tpl->tpl_vars['translations']->value['detail_sidebar']['modal_feedback_email_neg'];?>
</div>

               </form>
      </div>

      <div class="modal-footer preview-footer">
        <div class="modal-ajax-popups">
         <i id="tellfriendspinner" class="displayNone fa fa-refresh fa-spin fa-lg fa-fw refresh-spinner"></i>
         </div>

        <button type="button" class="btn btn-modal-a bh50" onclick="SimpleJobScript.TellAFriend();" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['translations']->value['detail_sidebar']['modal_submit'];?>
</button>

        <button type="button" class="btn btn-modal-c bh50" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['translations']->value['job_detail_section']['close'];?>
</button>
      </div>
    </div>

  </div>
</div><?php }
}
