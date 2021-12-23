<?php /* Smarty version Smarty-3.1.21, created on 2020-06-22 18:21:34
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/product_variations/hooks/product_list/product_data.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7319094225ef13cfeaa2b46-13219714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e1b6322057e9d4c1680b323989dfba46aab9354' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/product_variations/hooks/product_list/product_data.pre.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7319094225ef13cfeaa2b46-13219714',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ef13cfeaa5671_56642859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef13cfeaa5671_56642859')) {function content_5ef13cfeaa5671_56642859($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product']->value['variation_name']) {?>
    <input type="hidden" id="product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_alt" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['variation_name'], ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php }?>
<?php }} ?>
