<?php /* Smarty version Smarty-3.1.21, created on 2020-09-17 13:19:52
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/gift_certificates/hooks/orders/extra_list.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13239126835f63a8c8b859a8-22654245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d9b5106c484db459a062ae9df3103dc855dea12' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/gift_certificates/hooks/orders/extra_list.pre.tpl',
      1 => 1565883483,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13239126835f63a8c8b859a8-22654245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_info' => 0,
    'gift_key' => 0,
    'gift' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f63a8c8bba9a8_18147929',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f63a8c8bba9a8_18147929')) {function content_5f63a8c8bba9a8_18147929($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('print_card','gift_certificate','code','text_click_here','gift_cert_to','gift_cert_from','amount','send_via','email','postal_mail','free','free','print_card','gift_certificate','code','text_click_here','gift_cert_to','gift_cert_from','amount','send_via','email','postal_mail','free','free'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['order_info']->value['gift_certificates']) {?>
<?php  $_smarty_tpl->tpl_vars["gift"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["gift"]->_loop = false;
 $_smarty_tpl->tpl_vars["gift_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['gift_certificates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["gift"]->key => $_smarty_tpl->tpl_vars["gift"]->value) {
$_smarty_tpl->tpl_vars["gift"]->_loop = true;
 $_smarty_tpl->tpl_vars["gift_key"]->value = $_smarty_tpl->tpl_vars["gift"]->key;
?>
<tr>
    <td>
        <div class="ty-float-right"><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"gift_certificates.print?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&gift_cert_cart_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value),'but_text'=>$_smarty_tpl->__("print_card"),'but_role'=>"text",'but_meta'=>"cm-new-window"), 0);?>
</div>
        <span><?php echo $_smarty_tpl->__("gift_certificate");?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['gift']->value['gift_cert_code']) {?>
         <div class="ty-orders-detail__table-code"><?php echo $_smarty_tpl->__("code");?>
: <a href="<?php echo htmlspecialchars(fn_url("gift_certificates.verify?verify_code=".((string)$_smarty_tpl->tpl_vars['gift']->value['gift_cert_code'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['gift_cert_code'], ENT_QUOTES, 'ISO-8859-1');?>
</a></div>
        <?php }?>
        <div class="ty-gift-certificate-order">
            <a id="sw_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-combination"><?php echo $_smarty_tpl->__("text_click_here");?>
</a>
            <div id="options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-discount-info hidden">
                <span class="ty-caret-info"> <span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
                <div class="ty-gift-certificate-order__group">
                    <label class="ty-gift-certificate-order__group-label"><?php echo $_smarty_tpl->__("gift_cert_to");?>
:</label>
                    <span class="ty-gift-certificate-order__group-item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['recipient'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
                </div>
                <div class="ty-gift-certificate-order__group">
                    <label class="ty-gift-certificate-order__group-label"><?php echo $_smarty_tpl->__("gift_cert_from");?>
:</label>
                    <span class="ty-gift-certificate-order__group-item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['sender'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
                </div>
                <div class="ty-gift-certificate-order__group">
                    <label class="ty-gift-certificate-order__group-label"><?php echo $_smarty_tpl->__("amount");?>
:</label>
                    <span class="ty-gift-certificate-order__group-item"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['amount']), 0);?>
</span>
                </div>
                <div class="ty-gift-certificate-order__group">
                    <label class="ty-gift-certificate-order__group-label"><?php echo $_smarty_tpl->__("send_via");?>
:</label>
                    <span class="ty-gift-certificate-order__group-item"><?php if ($_smarty_tpl->tpl_vars['gift']->value['send_via']=="E") {
echo $_smarty_tpl->__("email");
} else {
echo $_smarty_tpl->__("postal_mail");
}?></span>
                </div>
            </div>
        </div>
    </td>
    
    <td><?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal']), 0);
} else {
echo $_smarty_tpl->__("free");
}?></td>
    <td class="ty-center">&nbsp;1</td>
    <td><?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal']), 0);
} else {
echo $_smarty_tpl->__("free");
}?></td>
</tr>
<?php } ?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/orders/extra_list.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/hooks/orders/extra_list.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['order_info']->value['gift_certificates']) {?>
<?php  $_smarty_tpl->tpl_vars["gift"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["gift"]->_loop = false;
 $_smarty_tpl->tpl_vars["gift_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['gift_certificates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["gift"]->key => $_smarty_tpl->tpl_vars["gift"]->value) {
$_smarty_tpl->tpl_vars["gift"]->_loop = true;
 $_smarty_tpl->tpl_vars["gift_key"]->value = $_smarty_tpl->tpl_vars["gift"]->key;
?>
<tr>
    <td>
        <div class="ty-float-right"><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"gift_certificates.print?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&gift_cert_cart_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value),'but_text'=>$_smarty_tpl->__("print_card"),'but_role'=>"text",'but_meta'=>"cm-new-window"), 0);?>
</div>
        <span><?php echo $_smarty_tpl->__("gift_certificate");?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['gift']->value['gift_cert_code']) {?>
         <div class="ty-orders-detail__table-code"><?php echo $_smarty_tpl->__("code");?>
: <a href="<?php echo htmlspecialchars(fn_url("gift_certificates.verify?verify_code=".((string)$_smarty_tpl->tpl_vars['gift']->value['gift_cert_code'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['gift_cert_code'], ENT_QUOTES, 'ISO-8859-1');?>
</a></div>
        <?php }?>
        <div class="ty-gift-certificate-order">
            <a id="sw_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="cm-combination"><?php echo $_smarty_tpl->__("text_click_here");?>
</a>
            <div id="options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="ty-discount-info hidden">
                <span class="ty-caret-info"> <span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
                <div class="ty-gift-certificate-order__group">
                    <label class="ty-gift-certificate-order__group-label"><?php echo $_smarty_tpl->__("gift_cert_to");?>
:</label>
                    <span class="ty-gift-certificate-order__group-item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['recipient'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
                </div>
                <div class="ty-gift-certificate-order__group">
                    <label class="ty-gift-certificate-order__group-label"><?php echo $_smarty_tpl->__("gift_cert_from");?>
:</label>
                    <span class="ty-gift-certificate-order__group-item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['sender'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
                </div>
                <div class="ty-gift-certificate-order__group">
                    <label class="ty-gift-certificate-order__group-label"><?php echo $_smarty_tpl->__("amount");?>
:</label>
                    <span class="ty-gift-certificate-order__group-item"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['amount']), 0);?>
</span>
                </div>
                <div class="ty-gift-certificate-order__group">
                    <label class="ty-gift-certificate-order__group-label"><?php echo $_smarty_tpl->__("send_via");?>
:</label>
                    <span class="ty-gift-certificate-order__group-item"><?php if ($_smarty_tpl->tpl_vars['gift']->value['send_via']=="E") {
echo $_smarty_tpl->__("email");
} else {
echo $_smarty_tpl->__("postal_mail");
}?></span>
                </div>
            </div>
        </div>
    </td>
    
    <td><?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal']), 0);
} else {
echo $_smarty_tpl->__("free");
}?></td>
    <td class="ty-center">&nbsp;1</td>
    <td><?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal']), 0);
} else {
echo $_smarty_tpl->__("free");
}?></td>
</tr>
<?php } ?>

<?php }
}?><?php }} ?>
