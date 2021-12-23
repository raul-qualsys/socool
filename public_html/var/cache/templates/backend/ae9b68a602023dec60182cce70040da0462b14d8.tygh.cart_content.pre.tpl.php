<?php /* Smarty version Smarty-3.1.21, created on 2020-08-03 13:52:39
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/wishlist/hooks/cart/cart_content.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20627266705f285cf74750e3-49984795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae9b68a602023dec60182cce70040da0462b14d8' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/wishlist/hooks/cart/cart_content.pre.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20627266705f285cf74750e3-49984795',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'customer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f285cf747ba85_46300899',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f285cf747ba85_46300899')) {function content_5f285cf747ba85_46300899($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('wishlist_short'));
?>
<?php if ($_smarty_tpl->tpl_vars['customer']->value['wishlist_products']) {?>
    <div class="muted"><?php echo $_smarty_tpl->__("wishlist_short");?>
: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['customer']->value['wishlist_products'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
</div>
<?php }?><?php }} ?>
