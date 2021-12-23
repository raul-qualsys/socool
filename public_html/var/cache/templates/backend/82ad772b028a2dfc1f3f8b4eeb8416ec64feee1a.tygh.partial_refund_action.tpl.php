<?php /* Smarty version Smarty-3.1.21, created on 2020-06-15 09:42:09
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/paypal/settings/partial_refund_action.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4503268735ee788c1be0502-25348004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82ad772b028a2dfc1f3f8b4eeb8416ec64feee1a' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/paypal/settings/partial_refund_action.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4503268735ee788c1be0502-25348004',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'pp_settings' => 0,
    'statuses' => 0,
    'k' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee788c1bed6f3_94724935',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee788c1bed6f3_94724935')) {function content_5ee788c1bed6f3_94724935($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('order_status','tt_addons_paypal_settings_partial_refund_action_order_status','addons.paypal.do_not_change','addons.paypal.set_status_to'));
?>
<?php if (fn_allowed_for('ULTIMATE')&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']||$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']||fn_allowed_for('MULTIVENDOR')) {?>
    <?php $_smarty_tpl->tpl_vars['statuses'] = new Smarty_variable(fn_get_simple_statuses(@constant('STATUSES_ORDER')), null, 0);?>

    <div id="text_paypal_partial_refund_action" class="in collapse">
        <div class="control-group">
            <label class="control-label" for="elm_partial_refund"><?php echo $_smarty_tpl->__("order_status");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_addons_paypal_settings_partial_refund_action_order_status")), 0);?>
:</label>
            <div class="controls">
                <select name="pp_settings[partial_refund_action]" id="elm_partial_refund">
                    <option value="<?php echo htmlspecialchars(@constant('PAYPAL_PARTIAL_REFUND_IGNORE'), ENT_QUOTES, 'ISO-8859-1');?>
"<?php if ($_smarty_tpl->tpl_vars['pp_settings']->value['partial_refund_action']==((string)@constant('PAYPAL_PARTIAL_REFUND_IGNORE'))) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("addons.paypal.do_not_change");?>
</option>
                    <optgroup label="<?php echo $_smarty_tpl->__("addons.paypal.set_status_to");?>
">
                        <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'ISO-8859-1');?>
"<?php if ($_smarty_tpl->tpl_vars['pp_settings']->value['partial_refund_action']==$_smarty_tpl->tpl_vars['k']->value) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
                        <?php } ?>
                    </optgroup>
                </select>
            </div>
        </div>
    </div>
<?php }?><?php }} ?>
