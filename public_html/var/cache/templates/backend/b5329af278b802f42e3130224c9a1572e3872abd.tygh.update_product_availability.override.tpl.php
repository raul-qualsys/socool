<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 11:59:59
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/product_variations/hooks/products/update_product_availability.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1235704925ee2630fe7cdf4-91853727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5329af278b802f42e3130224c9a1572e3872abd' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/product_variations/hooks/products/update_product_availability.override.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1235704925ee2630fe7cdf4-91853727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee2630fe7e918_00763611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee2630fe7e918_00763611')) {function content_5ee2630fe7e918_00763611($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("availability")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }?>
<?php }} ?>
