<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 18:22:19
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/barcode/hooks/orders/staff_only_note.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18446319505ee2bcab405b91-61576731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ed86857e0319af88a8539401ac94c2b48dd57a6' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/barcode/hooks/orders/staff_only_note.post.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18446319505ee2bcab405b91-61576731',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee2bcab40d216_71185640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee2bcab40d216_71185640')) {function content_5ee2bcab40d216_71185640($_smarty_tpl) {?><div class="center">
    <img src="<?php echo htmlspecialchars(fn_url("image.barcode?id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&type=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['type'])."&width=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['width'])."&height=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['height'])."&xres=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['resolution'])."&font=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['text_font'])."&no_session=Y"), ENT_QUOTES, 'ISO-8859-1');?>
" alt="BarCode" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['barcode']['width'], ENT_QUOTES, 'ISO-8859-1');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['barcode']['height'], ENT_QUOTES, 'ISO-8859-1');?>
">
</div><?php }} ?>
