<?php /* Smarty version Smarty-3.1.21, created on 2020-09-17 12:31:44
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/gift_certificates/hooks/cart/products_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5560518925f639d80527947-55692422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff05d8e6b66c6e0d277c704600eba812bf0c17d4' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/gift_certificates/hooks/cart/products_list.post.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5560518925f639d80527947-55692422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f639d8052c7e0_00074820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f639d8052c7e0_00074820')) {function content_5f639d8052c7e0_00074820($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('gift_certificate'));
?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['item_type']=="G") {?>
    <?php echo $_smarty_tpl->__("gift_certificate");?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['item_type']=="C") {?>
    <a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>
<?php }?><?php }} ?>
