<?php /* Smarty version Smarty-3.1.21, created on 2020-09-17 13:19:52
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/store_locator/hooks/orders/totals_shipping.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13188161695f63a8c8cb1642-53113666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2e8eb20af3f3b2df7a2054e912bc59d4e0c253b' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/store_locator/hooks/orders/totals_shipping.post.tpl',
      1 => 1565883483,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13188161695f63a8c8cb1642-53113666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_info' => 0,
    'shipping_method' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f63a8c8cd36e9_88943682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f63a8c8cd36e9_88943682')) {function content_5f63a8c8cd36e9_88943682($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_script')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('phone','store_locator.work_time','phone','store_locator.work_time'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["shipping_method"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping_method"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['shipping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipping_method"]->key => $_smarty_tpl->tpl_vars["shipping_method"]->value) {
$_smarty_tpl->tpl_vars["shipping_method"]->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']) {?>
        <p class="ty-strong">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['name'], ENT_QUOTES, 'ISO-8859-1');?>

        </p>
        <p class="ty-muted">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['city'], ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['pickup_address']) {?>, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['pickup_address'], ENT_QUOTES, 'ISO-8859-1');
}?></br>
            <?php if ($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['pickup_phone']) {?>
                <?php echo $_smarty_tpl->__("phone");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['pickup_phone'], ENT_QUOTES, 'ISO-8859-1');?>
</br>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['pickup_time']) {?>
                <?php echo $_smarty_tpl->__("store_locator.work_time");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['pickup_time'], ENT_QUOTES, 'ISO-8859-1');?>
</br>
            <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['description'];?>

        </p>

        <?php $_smarty_tpl->tpl_vars['store'] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping_method']->value['store_data'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['map_container_id'] = new Smarty_variable("sl_pickup_order_map", null, 0);?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:store_locator_orders_map")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:store_locator_orders_map"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:store_locator_orders_map"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php }?>

    <?php echo smarty_function_script(array('src'=>"js/addons/store_locator/pickup.js"),$_smarty_tpl);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/store_locator/hooks/orders/totals_shipping.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/store_locator/hooks/orders/totals_shipping.post.tpl"),$_smarty_tpl);?>
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
	<?php if ($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']) {?>
        <p class="ty-strong">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['name'], ENT_QUOTES, 'ISO-8859-1');?>

        </p>
        <p class="ty-muted">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['city'], ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['pickup_address']) {?>, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['pickup_address'], ENT_QUOTES, 'ISO-8859-1');
}?></br>
            <?php if ($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['pickup_phone']) {?>
                <?php echo $_smarty_tpl->__("phone");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['pickup_phone'], ENT_QUOTES, 'ISO-8859-1');?>
</br>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['pickup_time']) {?>
                <?php echo $_smarty_tpl->__("store_locator.work_time");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['pickup_time'], ENT_QUOTES, 'ISO-8859-1');?>
</br>
            <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['shipping_method']->value['store_data']['description'];?>

        </p>

        <?php $_smarty_tpl->tpl_vars['store'] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping_method']->value['store_data'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['map_container_id'] = new Smarty_variable("sl_pickup_order_map", null, 0);?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:store_locator_orders_map")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:store_locator_orders_map"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:store_locator_orders_map"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php }?>

    <?php echo smarty_function_script(array('src'=>"js/addons/store_locator/pickup.js"),$_smarty_tpl);?>

<?php }
}?><?php }} ?>
