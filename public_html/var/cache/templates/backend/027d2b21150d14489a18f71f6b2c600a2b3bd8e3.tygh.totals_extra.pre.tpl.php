<?php /* Smarty version Smarty-3.1.21, created on 2020-08-03 13:59:31
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/reward_points/hooks/order_management/totals_extra.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7521802825f285e935116f8-39194899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '027d2b21150d14489a18f71f6b2c600a2b3bd8e3' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/reward_points/hooks/order_management/totals_extra.pre.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7521802825f285e935116f8-39194899',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'user_points' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f285e9351b163_56839536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f285e9351b163_56839536')) {function content_5f285e9351b163_56839536($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('points_to_use','available','maximum'));
?>
<?php if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['total_price']&&$_smarty_tpl->tpl_vars['user_points']->value) {?>
<div class="control-group">
    <label for="points_to_use" class="control-label"><?php echo $_smarty_tpl->__("points_to_use");?>
:</label>
    <div class="controls">
        <input type="text" name="points_to_use" id="points_to_use" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['points'], ENT_QUOTES, 'ISO-8859-1');?>
" />
        <p class="help-block">(<?php echo $_smarty_tpl->__("available");?>
:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['points'], ENT_QUOTES, 'ISO-8859-1');?>
&nbsp;<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['user_points']->value)===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
&nbsp;/&nbsp;<?php echo $_smarty_tpl->__("maximum");?>
:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['points_info']['total_price'], ENT_QUOTES, 'ISO-8859-1');?>
)</p>
    </div>
</div>
<?php }?><?php }} ?>
