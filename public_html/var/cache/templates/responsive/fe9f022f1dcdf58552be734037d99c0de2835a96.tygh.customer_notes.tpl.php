<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 18:18:11
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/blocks/lite_checkout/customer_notes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6162835885ee2bbb3e2f9e8-62025793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe9f022f1dcdf58552be734037d99c0de2835a96' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/blocks/lite_checkout/customer_notes.tpl',
      1 => 1565855938,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6162835885ee2bbb3e2f9e8-62025793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee2bbb3e396e4_19798371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee2bbb3e396e4_19798371')) {function content_5ee2bbb3e396e4_19798371($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="litecheckout__container">
    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/customer_notes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field_name'=>$_smarty_tpl->tpl_vars['block']->value['name']), 0);?>

</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/lite_checkout/customer_notes.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/lite_checkout/customer_notes.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="litecheckout__container">
    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/customer_notes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('field_name'=>$_smarty_tpl->tpl_vars['block']->value['name']), 0);?>

</div>
<?php }?><?php }} ?>
