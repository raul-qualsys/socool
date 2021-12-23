<?php /* Smarty version Smarty-3.1.21, created on 2020-09-17 13:32:29
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/newsletters/views/newsletters/campaigns.tpl" */ ?>
<?php /*%%SmartyHeaderCode:800422445f63abbda0b5f9-92329807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3722561da175a46160859de3ddf62a3ba00dd7cc' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/newsletters/views/newsletters/campaigns.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '800422445f63abbda0b5f9-92329807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'campaigns' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f63abbda38f68_75681723',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f63abbda38f68_75681723')) {function content_5f63abbda38f68_75681723($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('name','status','name','tools','campaign_stats','campaign_stats','delete','status','no_data','general','name','add_campaign','new_campaign','add_campaign','newsletters'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="update_campaign_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="">

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true), 0);?>


<?php if ($_smarty_tpl->tpl_vars['campaigns']->value) {?>
<div class="table-responsive-wrapper">
    <table class="table table-middle table-responsive" width="100%">
    <thead>
    <tr>
        <th class="center mobile-hide" width="1%">
            <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
        <th width="70%"><?php echo $_smarty_tpl->__("name");?>
</th>
        <th width="5%" class="center">&nbsp;</th>
        <th width="10%" class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
    </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["c"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['campaigns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value) {
$_smarty_tpl->tpl_vars["c"]->_loop = true;
?>
    <tr class="cm-row-status-<?php echo htmlspecialchars(strtolower($_smarty_tpl->tpl_vars['c']->value['status']), ENT_QUOTES, 'ISO-8859-1');?>
">
        <td class="left mobile-hide" width="1%">
            <input type="checkbox" name="campaign_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['campaign_id'], ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-item" /></td>
        <td data-th="<?php echo $_smarty_tpl->__("name");?>
">
            <input type="text" name="campaigns[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['campaign_id'], ENT_QUOTES, 'ISO-8859-1');?>
][name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['object'], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-large input-hidden" /></td>
        <td class="nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'text'=>$_smarty_tpl->__("campaign_stats"),'title'=>$_smarty_tpl->__("campaign_stats"),'href'=>"newsletters.campaign_stats?campaign_id=".((string)$_smarty_tpl->tpl_vars['c']->value['campaign_id']),'target_id'=>"campaign_stats_".((string)$_smarty_tpl->tpl_vars['c']->value['campaign_id'])));?>
</li>
                <li class="divider"></li>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("delete"),'href'=>"newsletters.delete_campaign?campaign_id=".((string)$_smarty_tpl->tpl_vars['c']->value['campaign_id']),'method'=>"POST"));?>
</li>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <div class="hidden-tools">
                <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

            </div>
        </td>
        <td class="nowrap right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['c']->value['campaign_id'],'status'=>$_smarty_tpl->tpl_vars['c']->value['status'],'hidden'=>false,'object_id_name'=>"campaign_id",'table'=>"newsletter_campaigns"), 0);?>

        </td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
</div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['campaigns']->value) {?>
        <span class="mobile-hide shift-right">
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[newsletters.m_delete_campaigns]",'form'=>"update_campaign_form_".((string)$_smarty_tpl->tpl_vars['id']->value)));?>
</li>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        </span>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[newsletters.m_update_campaigns]",'but_role'=>"action",'but_target_form'=>"update_campaign_form_".((string)$_smarty_tpl->tpl_vars['id']->value),'but_meta'=>"cm-submit"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" class="form-horizontal form-edit" name="add_campaign_form">
            <div class="tabs cm-j-tabs">
                <ul class="nav nav-tabs">
                    <li id="tab_steps_new" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
                </ul>
            </div>

            <div class="cm-tabs-content" id="content_tab_steps_new">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label cm-required" for="c_name"><?php echo $_smarty_tpl->__("name");?>
</label>
                        <div class="controls">
                            <input class="span9" type="text" id="c_name" name="campaign_data[name]" value="" size="60" />
                        </div>
                    </div>

                    <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"campaign_data[status]",'id'=>"c_status"), 0);?>


                </fieldset>
            </div>

            <div class="buttons-container">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[newsletters.add_campaign]",'cancel_action'=>"close",'text'=>$_smarty_tpl->__("add_campaign")), 0);?>

            </div>
        </form>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_campaign",'text'=>$_smarty_tpl->__("new_campaign"),'title'=>$_smarty_tpl->__("add_campaign"),'act'=>"general",'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("newsletters"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_languages'=>true), 0);?>

<?php }} ?>
