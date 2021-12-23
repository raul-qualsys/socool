<?php /* Smarty version Smarty-3.1.21, created on 2020-09-17 12:31:44
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/product_variations/hooks/cart/product_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19371088405f639d804f52b9-85643190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc7926f2fee39eff44f93bd7d9296ddc40fa359a' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/product_variations/hooks/cart/product_info.pre.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19371088405f639d804f52b9-85643190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_product' => 0,
    'product' => 0,
    'variation_features' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f639d804fbb32_80596964',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f639d804fbb32_80596964')) {function content_5f639d804fbb32_80596964($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['_product']->value['product_id']&&$_smarty_tpl->tpl_vars['_product']->value['variation_features']) {?>
    
    <?php $_smarty_tpl->tpl_vars['variation_features'] = new Smarty_variable($_smarty_tpl->tpl_vars['_product']->value['variation_features'], null, 0);?>
<?php } elseif (!$_smarty_tpl->tpl_vars['_product']->value['product_id']&&$_smarty_tpl->tpl_vars['product']->value['variation_features']) {?>
    
    <?php $_smarty_tpl->tpl_vars['variation_features'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['variation_features'], null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['variation_features']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variation_features'=>$_smarty_tpl->tpl_vars['variation_features']->value,'features_secondary'=>true), 0);?>

<?php }?>
<?php }} ?>
