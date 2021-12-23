<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 01:37:01
         compiled from "68fa5e9f2b8d8cfeee5038e6ba00146c2c72f039" */ ?>
<?php /*%%SmartyHeaderCode:10227533075ee1d10dcffa95-59148887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68fa5e9f2b8d8cfeee5038e6ba00146c2c72f039' => 
    array (
      0 => '68fa5e9f2b8d8cfeee5038e6ba00146c2c72f039',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '10227533075ee1d10dcffa95-59148887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee1d10dd06409_28927285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee1d10dd06409_28927285')) {function content_5ee1d10dd06409_28927285($_smarty_tpl) {?>                            <ul id="customer_service_links">
                            <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("orders.search"), ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow">Acerca de mi compra</a></li>
                            <?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']&&$_smarty_tpl->tpl_vars['addons']->value['wishlist']['status']=='A') {?>
                                <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow">Wishlist</a></li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products']=='Y') {?>
                                <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("product_features.compare"), ENT_QUOTES, 'ISO-8859-1');?>
" rel="nofollow">Comparison list</a></li>
                            <?php }?>
                            </ul><?php }} ?>
