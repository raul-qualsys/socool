<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 18:18:11
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/rus_boxberry/hooks/checkout/shipping_method.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18884005515ee2bbb3b37822-05511293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40cb333768dbe56402d3ab64972a8fc67070e6ae' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/rus_boxberry/hooks/checkout/shipping_method.post.tpl',
      1 => 1565883483,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18884005515ee2bbb3b37822-05511293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'group_key' => 0,
    'cart' => 0,
    'shipping' => 0,
    'shipping_id' => 0,
    'group' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee2bbb3b668c7_76443772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee2bbb3b668c7_76443772')) {function content_5ee2bbb3b668c7_76443772($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]==$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']&&$_smarty_tpl->tpl_vars['shipping']->value['module']=='rus_boxberry') {?>
    <?php $_smarty_tpl->tpl_vars['shipping_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_code']=='boxberry_self'||$_smarty_tpl->tpl_vars['shipping']->value['service_code']=='boxberry_self_prepaid') {?>
	<div style="margin:10px 23px;">
        <label for="selected_point_id" class="cm-required"><?php echo $_smarty_tpl->__('rus_boxberry.pickup_point');?>
:</label>
        <input id="selected_point_id" type="hidden" name="boxberry_selected_point[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['point_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
        <a style="font-weight:bold;" class="select_pvz_link" href="#"
           data-boxberry-open="true"
           data-boxberry-token="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['apiKeyWidget'], ENT_QUOTES, 'ISO-8859-1');?>
"
           data-boxberry-city="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['package_info']['location']['city'], ENT_QUOTES, 'ISO-8859-1');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['package_info']['location']['state_descr'], ENT_QUOTES, 'ISO-8859-1');?>
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
           data-boxberry-point-full-name-input="boxberry_selected_point_full_name[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
]"
        ><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['pickup_data']['address'])===null||$tmp==='' ? $_smarty_tpl->__('rus_boxberry.select_pickup_point') : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
</a>
	</div>
    <?php echo smarty_function_script(array('src'=>"js/addons/rus_boxberry/boxberry.js"),$_smarty_tpl);?>

    <?php }?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_boxberry/hooks/checkout/shipping_method.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_boxberry/hooks/checkout/shipping_method.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'][$_smarty_tpl->tpl_vars['group_key']->value]==$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']&&$_smarty_tpl->tpl_vars['shipping']->value['module']=='rus_boxberry') {?>
    <?php $_smarty_tpl->tpl_vars['shipping_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_code']=='boxberry_self'||$_smarty_tpl->tpl_vars['shipping']->value['service_code']=='boxberry_self_prepaid') {?>
	<div style="margin:10px 23px;">
        <label for="selected_point_id" class="cm-required"><?php echo $_smarty_tpl->__('rus_boxberry.pickup_point');?>
:</label>
        <input id="selected_point_id" type="hidden" name="boxberry_selected_point[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['point_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
        <a style="font-weight:bold;" class="select_pvz_link" href="#"
           data-boxberry-open="true"
           data-boxberry-token="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['apiKeyWidget'], ENT_QUOTES, 'ISO-8859-1');?>
"
           data-boxberry-city="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['package_info']['location']['city'], ENT_QUOTES, 'ISO-8859-1');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['package_info']['location']['state_descr'], ENT_QUOTES, 'ISO-8859-1');?>
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
           data-boxberry-point-full-name-input="boxberry_selected_point_full_name[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
]"
        ><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['cart']->value['shippings_extra']['boxberry'][$_smarty_tpl->tpl_vars['group_key']->value][$_smarty_tpl->tpl_vars['shipping_id']->value]['pickup_data']['address'])===null||$tmp==='' ? $_smarty_tpl->__('rus_boxberry.select_pickup_point') : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
</a>
	</div>
    <?php echo smarty_function_script(array('src'=>"js/addons/rus_boxberry/boxberry.js"),$_smarty_tpl);?>

    <?php }?>
<?php }?>
<?php }?><?php }} ?>
