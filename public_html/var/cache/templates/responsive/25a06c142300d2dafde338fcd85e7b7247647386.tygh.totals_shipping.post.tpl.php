<?php /* Smarty version Smarty-3.1.21, created on 2020-09-17 13:19:52
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/rus_boxberry/hooks/orders/totals_shipping.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20211919005f63a8c8c8de94-61846535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25a06c142300d2dafde338fcd85e7b7247647386' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/rus_boxberry/hooks/orders/totals_shipping.post.tpl',
      1 => 1565883483,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20211919005f63a8c8c8de94-61846535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_info' => 0,
    'shipping_method' => 0,
    'shipping' => 0,
    'shipments' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f63a8c8cacdb4_39650135',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f63a8c8cacdb4_39650135')) {function content_5f63a8c8cacdb4_39650135($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('phone','phone'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["shipping_method"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping_method"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['shipping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipping_method"]->key => $_smarty_tpl->tpl_vars["shipping_method"]->value) {
$_smarty_tpl->tpl_vars["shipping_method"]->_loop = true;
?>

	<?php if ($_smarty_tpl->tpl_vars['shipping_method']->value['module']=='rus_boxberry') {?>
        <?php $_smarty_tpl->tpl_vars['shipment_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['shipment_id'], null, 0);?>
        <p class="ty-strong">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_method']->value['pickup_data']['type'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_method']->value['pickup_data']['address'], ENT_QUOTES, 'ISO-8859-1');?>

        </p>
        <p class="ty-muted">
            <?php if ($_smarty_tpl->tpl_vars['shipping_method']->value['pickup_data']['full_address']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_method']->value['pickup_data']['full_address'], ENT_QUOTES, 'ISO-8859-1');
}?></br>
            <?php if ($_smarty_tpl->tpl_vars['shipping_method']->value['pickup_data']['phone']) {?>
                <?php echo $_smarty_tpl->__("phone");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_method']->value['pickup_data']['phone'], ENT_QUOTES, 'ISO-8859-1');?>
</br>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['shipping_method']->value['pickup_data']['trip_description']) {?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_method']->value['pickup_data']['trip_description'], ENT_QUOTES, 'ISO-8859-1');?>

            <?php }?>
        </p>
    <?php }?>
<?php } ?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_boxberry/hooks/orders/totals_shipping.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_boxberry/hooks/orders/totals_shipping.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["shipping_method"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping_method"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['shipping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipping_method"]->key => $_smarty_tpl->tpl_vars["shipping_method"]->value) {
$_smarty_tpl->tpl_vars["shipping_method"]->_loop = true;
?>

	<?php if ($_smarty_tpl->tpl_vars['shipping_method']->value['module']=='rus_boxberry') {?>
        <?php $_smarty_tpl->tpl_vars['shipment_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['shipments']->value[$_smarty_tpl->tpl_vars['shipping']->value['group_key']]['shipment_id'], null, 0);?>
        <p class="ty-strong">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_method']->value['pickup_data']['type'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_method']->value['pickup_data']['address'], ENT_QUOTES, 'ISO-8859-1');?>

        </p>
        <p class="ty-muted">
            <?php if ($_smarty_tpl->tpl_vars['shipping_method']->value['pickup_data']['full_address']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_method']->value['pickup_data']['full_address'], ENT_QUOTES, 'ISO-8859-1');
}?></br>
            <?php if ($_smarty_tpl->tpl_vars['shipping_method']->value['pickup_data']['phone']) {?>
                <?php echo $_smarty_tpl->__("phone");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_method']->value['pickup_data']['phone'], ENT_QUOTES, 'ISO-8859-1');?>
</br>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['shipping_method']->value['pickup_data']['trip_description']) {?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_method']->value['pickup_data']['trip_description'], ENT_QUOTES, 'ISO-8859-1');?>

            <?php }?>
        </p>
    <?php }?>
<?php } ?>
<?php }?><?php }} ?>
