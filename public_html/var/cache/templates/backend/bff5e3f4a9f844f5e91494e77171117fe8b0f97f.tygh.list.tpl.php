<?php /* Smarty version Smarty-3.1.21, created on 2020-09-17 13:17:37
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/views/snippets/components/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21093318005f63a841ebb401-39679682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bff5e3f4a9f844f5e91494e77171117fe8b0f97f' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/views/snippets/components/list.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21093318005f63a841ebb401-39679682',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'return_url' => 0,
    'can_update' => 0,
    'result_ids' => 0,
    'type' => 0,
    'addon' => 0,
    'snippets' => 0,
    'snippet' => 0,
    'edit_link_text' => 0,
    'return_url_escape' => 0,
    'snippet_result_ids' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f63a841ee86c8_89236570',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f63a841ee86c8_89236570')) {function content_5f63a841ee86c8_89236570($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('edit','view','name','code','status','name','code','tools','editing_snippet','delete','status','no_data'));
?>
<?php $_smarty_tpl->tpl_vars["return_url_escape"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['return_url']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars["can_update"] = new Smarty_variable(fn_check_permissions('snippets','update','admin','POST'), null, 0);?>
<?php $_smarty_tpl->tpl_vars["edit_link_text"] = new Smarty_variable($_smarty_tpl->__("edit"), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['can_update']->value) {?>
    <?php $_smarty_tpl->tpl_vars["edit_link_text"] = new Smarty_variable($_smarty_tpl->__("view"), null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("toolbar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/snippets/components/adv_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('result_ids'=>$_smarty_tpl->tpl_vars['result_ids']->value,'return_url'=>$_smarty_tpl->tpl_vars['return_url']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value,'addon'=>(($tmp = @$_smarty_tpl->tpl_vars['addon']->value)===null||$tmp==='' ? '' : $tmp)), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<div class="btn-toolbar clearfix cm-toggle-button">
    <?php echo Smarty::$_smarty_vars['capture']['toolbar'];?>

</div>

<div id="snippet_list">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="snippets_form" class="form-horizontal">
        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
        <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />

        <?php if ($_smarty_tpl->tpl_vars['snippets']->value) {?>
            <div class="table-responsive-wrapper">
            <table class="table table-middle table-responsive" width="100%">
                <thead>
                    <tr>
                        <?php if ($_smarty_tpl->tpl_vars['can_update']->value) {?>
                            <th width="1%" class="center mobile-hide">
                                <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            </th>
                        <?php }?>
                        <th width="40%">
                            <?php echo $_smarty_tpl->__("name");?>

                        </th>
                        <th width="20%">
                            <?php echo $_smarty_tpl->__("code");?>

                        </th>
                        <?php if ($_smarty_tpl->tpl_vars['can_update']->value) {?>
                            <th class="right">&nbsp;</th>
                            <th width="10%" class="right">
                                <?php echo $_smarty_tpl->__("status");?>

                            </th>
                        <?php }?>
                    </tr>
                </thead>
                <tbody>
                <?php  $_smarty_tpl->tpl_vars["snippet"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["snippet"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['snippets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["snippet"]->key => $_smarty_tpl->tpl_vars["snippet"]->value) {
$_smarty_tpl->tpl_vars["snippet"]->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars['snippet_result_ids'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['result_ids']->value).",snippet_content_".((string)$_smarty_tpl->tpl_vars['snippet']->value->getId())."_*", null, 0);?>

                    <tr class="cm-row-status-<?php echo htmlspecialchars(strtolower($_smarty_tpl->tpl_vars['snippet']->value->getStatus()), ENT_QUOTES, 'ISO-8859-1');?>
 row-snippet" data-snippet-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippet']->value->getId(), ENT_QUOTES, 'ISO-8859-1');?>
">
                        <?php if ($_smarty_tpl->tpl_vars['can_update']->value) {?>
                            <td class="center mobile-hide">
                                <input type="checkbox" name="snippet_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippet']->value->getId(), ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-item" />
                            </td>
                        <?php }?>
                        <td class="row-status" data-th="<?php echo $_smarty_tpl->__("name");?>
">
                            <a class="cm-external-click" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-external-click-id="<?php echo htmlspecialchars("opener_snippet_".((string)$_smarty_tpl->tpl_vars['snippet']->value->getId()), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippet']->value->getName(), ENT_QUOTES, 'ISO-8859-1');?>
</a>
                        </td>
                        <td class="row-status" data-th="<?php echo $_smarty_tpl->__("code");?>
">
                            <a class="cm-external-click" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-external-click-id="<?php echo htmlspecialchars("opener_snippet_".((string)$_smarty_tpl->tpl_vars['snippet']->value->getId()), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippet']->value->getCode(), ENT_QUOTES, 'ISO-8859-1');?>
</a>
                        </td>
                        <td class="right nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                                <li>
                                    <?php ob_start();
echo $_smarty_tpl->__("editing_snippet");
$_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"snippet_".((string)$_smarty_tpl->tpl_vars['snippet']->value->getId()),'text'=>$_tmp2.": ".((string)$_smarty_tpl->tpl_vars['snippet']->value->getName()),'link_text'=>$_smarty_tpl->tpl_vars['edit_link_text']->value,'act'=>"link",'href'=>"snippets.update?snippet_id=".((string)$_smarty_tpl->tpl_vars['snippet']->value->getId())."&return_url=".((string)$_smarty_tpl->tpl_vars['return_url_escape']->value)."&current_result_ids=".((string)$_smarty_tpl->tpl_vars['snippet_result_ids']->value)), 0);?>

                                </li>
                                <li>
                                    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'method'=>"post",'class'=>"cm-confirm cm-ajax",'href'=>"snippets.delete?snippet_ids=".((string)$_smarty_tpl->tpl_vars['snippet']->value->getId())."&return_url=".((string)$_smarty_tpl->tpl_vars['return_url_escape']->value)."&result_ids=".((string)$_smarty_tpl->tpl_vars['snippet_result_ids']->value),'data'=>array("data-ca-target-id"=>$_smarty_tpl->tpl_vars['result_ids']->value)));?>

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
                        <?php if ($_smarty_tpl->tpl_vars['can_update']->value) {?>
                            <td class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                                <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['snippet']->value->getId(),'status'=>$_smarty_tpl->tpl_vars['snippet']->value->getStatus(),'table'=>"template_snippets",'object_id_name'=>"snippet_id",'update_controller'=>"snippets",'st_return_url'=>$_smarty_tpl->tpl_vars['return_url']->value,'st_result_ids'=>$_smarty_tpl->tpl_vars['snippet_result_ids']->value), 0);?>

                            </td>
                        <?php }?>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            </div>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>

    </form>

<!--content_snippets--></div><?php }} ?>
