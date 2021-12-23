<?php /* Smarty version Smarty-3.1.21, created on 2020-09-17 13:17:37
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/views/snippets/components/adv_buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16883089025f63a841eee1a9-08239616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf22597bc311db8cf56c2a8fc6d98205ea432733' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/views/snippets/components/adv_buttons.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16883089025f63a841eee1a9-08239616',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'return_url' => 0,
    'return_url_escape' => 0,
    'result_ids' => 0,
    'type' => 0,
    'addon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f63a841ef7c73_55922254',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f63a841ef7c73_55922254')) {function content_5f63a841ef7c73_55922254($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_snippet','add_snippet','add_snippet'));
?>
<?php if (fn_check_permissions("snippets","update","admin","POST")) {?>
    <?php $_smarty_tpl->tpl_vars["return_url_escape"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['return_url']->value), null, 0);?>

    <div class="cm-tab-tools" id="tools_snippets">

        <?php ob_start();
echo $_smarty_tpl->__("add_snippet");
$_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('method'=>"POST",'id'=>"add_snippet",'text'=>$_tmp3,'link_text'=>$_smarty_tpl->__("add_snippet"),'title'=>$_smarty_tpl->__("add_snippet"),'act'=>"general",'icon'=>"icon-plus",'href'=>"snippets.update?snippet_id=0&return_url=".((string)$_smarty_tpl->tpl_vars['return_url_escape']->value)."&current_result_ids=".((string)$_smarty_tpl->tpl_vars['result_ids']->value)."&type=".((string)$_smarty_tpl->tpl_vars['type']->value)."&addon=".((string)$_smarty_tpl->tpl_vars['addon']->value)), 0);?>

    </div>
<?php }?><?php }} ?>
