<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 12:00:00
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/product_variations/hooks/products/update_product_popularity.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21241789775ee26310140a74-98547757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bfaae1d96cc6d794c426d18d45a06780b6cd6d9' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/product_variations/hooks/products/update_product_popularity.override.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21241789775ee26310140a74-98547757',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee26310142709_45955492',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee26310142709_45955492')) {function content_5ee26310142709_45955492($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("popularity")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }?>
<?php }} ?>
