<?php /* Smarty version Smarty-3.1.21, created on 2020-08-03 13:59:31
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/rus_boxberry/hooks/order_management/shipping_method.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20895117885f285e936a2375-30690547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d130f0423c73b993263b85fa6265e5e56c9e3e4' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/rus_boxberry/hooks/order_management/shipping_method.post.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20895117885f285e936a2375-30690547',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_groups' => 0,
    'group' => 0,
    'group_key' => 0,
    'cart' => 0,
    'shipping' => 0,
    'shipping_id' => 0,
    'pickup_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f285e936b78c6_57570100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f285e936b78c6_57570100')) {function content_5f285e936b78c6_57570100($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('rus_boxberry.pickuppoint'));
?>
<?php echo smarty_function_script(array('src'=>"js/addons/rus_boxberry/boxberry.js"),$_smarty_tpl);?>


<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['group_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['group_key']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['group']->value['shippings']&&!$_smarty_tpl->tpl_vars['group']->value['shipping_no_required']) {?>

        <?php  $_smarty_tpl->tpl_vars['shipping'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shipping']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['shippings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->key => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]==$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']) {?>

                <?php $_smarty_tpl->tpl_vars['shipping_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], null, 0);?>
                <?php $_smarty_tpl->tpl_vars['pickup_data'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['pickup_data'], null, 0);?>

                <?php if ($_smarty_tpl->tpl_vars['pickup_data']->value) {?>
                    <div class="control-group">
                        <div class="control-label">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("rus_boxberry.pickuppoint")), 0);?>

                        </div>
                    </div>

                    <div class="strong">
                        <input type="hidden" class="cm-submit cm-ajax cm-skip-validation"
                               name="boxberry_selected_point[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
]"
                               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['point_id'], ENT_QUOTES, 'ISO-8859-1');?>
"
                               data-ca-dispatch="dispatch[order_management.update_shipping]">
                        <a class="select_pvz_link" href="#"
                           data-boxberry-open="true"
                           data-boxberry-token="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['apiKeyWidget'], ENT_QUOTES, 'ISO-8859-1');?>
"
                           data-boxberry-city="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['package_info']['location']['city'], ENT_QUOTES, 'ISO-8859-1');?>
"
                           data-boxberry-weight="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['boxberry_weight'], ENT_QUOTES, 'ISO-8859-1');?>
"
                           data-boxberry-target-start="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['boxberry_target_start'], ENT_QUOTES, 'ISO-8859-1');?>
"
                           data-paymentsum="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['boxberry_paymentsum'], ENT_QUOTES, 'ISO-8859-1');?>
"
                           data-ordersum="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['boxberry_ordersum'], ENT_QUOTES, 'ISO-8859-1');?>
"
                           data-boxberry-point-input="boxberry_selected_point[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
]"
                        ><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['pickup_data']->value['full_address'])===null||$tmp==='' ? $_smarty_tpl->__('rus_boxberry.select_pickup_point') : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
</a>
                    </div>
                <?php }?>

            <?php }?>
        <?php } ?>
    <?php }?>
<?php } ?>






<?php }} ?>
