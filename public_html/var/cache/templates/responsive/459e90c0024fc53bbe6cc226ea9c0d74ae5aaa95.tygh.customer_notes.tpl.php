<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 18:18:11
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/views/checkout/components/customer_notes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4736665105ee2bbb3e3ae06-08070583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '459e90c0024fc53bbe6cc226ea9c0d74ae5aaa95' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/views/checkout/components/customer_notes.tpl',
      1 => 1565855938,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4736665105ee2bbb3e3ae06-08070583',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'cart' => 0,
    'field_name' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee2bbb3e4c277_32306948',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee2bbb3e4c277_32306948')) {function content_5ee2bbb3e4c277_32306948($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('lite_checkout.delivery_note','lite_checkout.delivery_note','lite_checkout.delivery_note','lite_checkout.delivery_note','lite_checkout.delivery_note','lite_checkout.delivery_note'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="cm-processing-personal-data" data-ca-processing-personal-data-without-click="true">
    <div class="litecheckout__group">
        <div class="litecheckout__field">
                <textarea data-ca-lite-checkout-field="customer_notes"
                          class="litecheckout__input litecheckout__input--textarea"
                          id="litecheckout_comment_to_shipping"
                          autocomplete="disabled"
                          placeholder=" "
                          data-ca-lite-checkout-element="customer_notes"
                          data-ca-lite-checkout-auto-save="true"
                          aria-label="<?php echo $_smarty_tpl->__("lite_checkout.delivery_note");?>
"
                          title="<?php echo $_smarty_tpl->__("lite_checkout.delivery_note");?>
"
                ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['notes'], ENT_QUOTES, 'ISO-8859-1');?>
</textarea>
            <label class="litecheckout__label" for="litecheckout_comment_to_shipping"
            ><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['field_name']->value)===null||$tmp==='' ? $_smarty_tpl->__("lite_checkout.delivery_note") : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
 </label>
        </div>
    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/customer_notes.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/customer_notes.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="cm-processing-personal-data" data-ca-processing-personal-data-without-click="true">
    <div class="litecheckout__group">
        <div class="litecheckout__field">
                <textarea data-ca-lite-checkout-field="customer_notes"
                          class="litecheckout__input litecheckout__input--textarea"
                          id="litecheckout_comment_to_shipping"
                          autocomplete="disabled"
                          placeholder=" "
                          data-ca-lite-checkout-element="customer_notes"
                          data-ca-lite-checkout-auto-save="true"
                          aria-label="<?php echo $_smarty_tpl->__("lite_checkout.delivery_note");?>
"
                          title="<?php echo $_smarty_tpl->__("lite_checkout.delivery_note");?>
"
                ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['notes'], ENT_QUOTES, 'ISO-8859-1');?>
</textarea>
            <label class="litecheckout__label" for="litecheckout_comment_to_shipping"
            ><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['field_name']->value)===null||$tmp==='' ? $_smarty_tpl->__("lite_checkout.delivery_note") : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
 </label>
        </div>
    </div>
</div>
<?php }?><?php }} ?>
