<?php /* Smarty version Smarty-3.1.21, created on 2020-06-15 09:35:20
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/sd_mercadopago/views/payments/components/cc_processors/mercado_pago_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11910970735ee78728be8e04-96185187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de072752606731fbaec818ca063d106b171772db' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/sd_mercadopago/views/payments/components/cc_processors/mercado_pago_payment.tpl',
      1 => 1568422500,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11910970735ee78728be8e04-96185187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'processor_params' => 0,
    'mercadopago_currencies' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee78728bfb526_30001989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee78728bfb526_30001989')) {function content_5ee78728bfb526_30001989($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('addons.sd_mercadopago.processor_info','addons.sd_mercadopago.access_token','addons.sd_mercadopago.client_id','addons.sd_mercadopago.client_secret','currency'));
?>
<p><?php echo $_smarty_tpl->__("addons.sd_mercadopago.processor_info");?>
</p>
<?php $_smarty_tpl->tpl_vars['mercadopago_currencies'] = new Smarty_variable(fn_sd_mercadopago_get_currencies(), null, 0);?>

<div class="control-group">
    <label class="control-label" for="access_token"><?php echo $_smarty_tpl->__("addons.sd_mercadopago.access_token");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][access_token]" id="access_token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['access_token'], ENT_QUOTES, 'ISO-8859-1');?>
" size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="client_id"><?php echo $_smarty_tpl->__("addons.sd_mercadopago.client_id");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][client_id]" id="client_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['client_id'], ENT_QUOTES, 'ISO-8859-1');?>
" size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="client_secret"><?php echo $_smarty_tpl->__("addons.sd_mercadopago.client_secret");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][client_secret]" id="client_secret" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['client_secret'], ENT_QUOTES, 'ISO-8859-1');?>
" size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="currency"><?php echo $_smarty_tpl->__("currency");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][currency]" id="currency">
            <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mercadopago_currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['code'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php if (!$_smarty_tpl->tpl_vars['currency']->value['active']) {?> disabled="disabled"<?php }
if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']==$_smarty_tpl->tpl_vars['currency']->value['code']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
</option>
            <?php } ?>
        </select>
    </div>
</div>
<?php }} ?>
