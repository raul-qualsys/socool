<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 18:17:46
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/reward_points/hooks/checkout/payment_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3447344645ee2bb9a36bd30-37789320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0103db07b2e20d23dbecc878a9e58cf722f9b96a' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/reward_points/hooks/checkout/payment_extra.post.tpl',
      1 => 1565883483,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3447344645ee2bb9a36bd30-37789320',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'cart_products' => 0,
    'cart' => 0,
    'user_info' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee2bb9a379c19_41873082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee2bb9a379c19_41873082')) {function content_5ee2bb9a379c19_41873082($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="checkout"&&$_smarty_tpl->tpl_vars['cart_products']->value&&$_smarty_tpl->tpl_vars['cart']->value['points_info']['total_price']&&$_smarty_tpl->tpl_vars['user_info']->value['points']>0) {?>
<div class="ty-right">
    <?php echo $_smarty_tpl->getSubTemplate ("addons/reward_points/hooks/checkout/payment_options.post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/checkout/payment_extra.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/checkout/payment_extra.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="checkout"&&$_smarty_tpl->tpl_vars['cart_products']->value&&$_smarty_tpl->tpl_vars['cart']->value['points_info']['total_price']&&$_smarty_tpl->tpl_vars['user_info']->value['points']>0) {?>
<div class="ty-right">
    <?php echo $_smarty_tpl->getSubTemplate ("addons/reward_points/hooks/checkout/payment_options.post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<?php }?>
<?php }?><?php }} ?>
