<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 18:18:12
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/email_marketing/hooks/checkout/final_section_customer_notes.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10932994925ee2bbb4293416-49414854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e82865ee794e336d3615c849cde0a5cf223bb99' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/email_marketing/hooks/checkout/final_section_customer_notes.post.tpl',
      1 => 1565883483,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10932994925ee2bbb4293416-49414854',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_subscription_checkbox' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee2bbb42a0578_52273639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee2bbb42a0578_52273639')) {function content_5ee2bbb42a0578_52273639($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('email_marketing.text_subscribe','email_marketing.text_subscribe'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['show_subscription_checkbox']->value) {?>
<div class="ty-control-group ty-checkout__terms">
    <label><input type="checkbox" name="subscribe_customer" value="1" class="checkbox" <?php if ($_smarty_tpl->tpl_vars['addons']->value['email_marketing']['em_checkout_enabled']!="Y") {?>checked="checked"<?php }?> /><?php echo $_smarty_tpl->__("email_marketing.text_subscribe");?>
</label>
</div>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/email_marketing/hooks/checkout/final_section_customer_notes.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/email_marketing/hooks/checkout/final_section_customer_notes.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['show_subscription_checkbox']->value) {?>
<div class="ty-control-group ty-checkout__terms">
    <label><input type="checkbox" name="subscribe_customer" value="1" class="checkbox" <?php if ($_smarty_tpl->tpl_vars['addons']->value['email_marketing']['em_checkout_enabled']!="Y") {?>checked="checked"<?php }?> /><?php echo $_smarty_tpl->__("email_marketing.text_subscribe");?>
</label>
</div>

<?php }
}?><?php }} ?>
