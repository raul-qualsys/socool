<?php /* Smarty version Smarty-3.1.21, created on 2020-08-03 13:59:31
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/gift_certificates/hooks/order_management/totals_extra.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20796752045f285e93509c32-71220218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84fa173f53571f1be1178da8d4be569159b3f903' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/gift_certificates/hooks/order_management/totals_extra.pre.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20796752045f285e93509c32-71220218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gift_certificates' => 0,
    'code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f285e9350d814_15548514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f285e9350d814_15548514')) {function content_5f285e9350d814_15548514($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('gift_cert_code'));
?>
<div class="control-group">
    <div class="controls">
        <select name="gift_cert_code" id="gift_cert_code">
            <option value="" disabled selected hidden><?php echo $_smarty_tpl->__("gift_cert_code");?>
</option>
            <option value=""> -- </option>
            <?php  $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["code"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gift_certificates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["code"]->key => $_smarty_tpl->tpl_vars["code"]->value) {
$_smarty_tpl->tpl_vars["code"]->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
            <?php } ?>
        </select>
    </div>
</div><?php }} ?>
