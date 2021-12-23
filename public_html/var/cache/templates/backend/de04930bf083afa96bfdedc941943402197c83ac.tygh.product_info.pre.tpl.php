<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 18:22:19
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/product_variations/hooks/orders/product_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20599885075ee2bcab2ee8f4-83598485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de04930bf083afa96bfdedc941943402197c83ac' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/product_variations/hooks/orders/product_info.pre.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20599885075ee2bcab2ee8f4-83598485',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee2bcab2f3b69_37098311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee2bcab2f3b69_37098311')) {function content_5ee2bcab2f3b69_37098311($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['cp']->value['variation_features']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variation_features'=>$_smarty_tpl->tpl_vars['cp']->value['variation_features'],'features_secondary'=>true), 0);?>

<?php }?>
<?php }} ?>
