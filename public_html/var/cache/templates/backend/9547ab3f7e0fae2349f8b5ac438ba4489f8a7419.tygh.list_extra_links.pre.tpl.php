<?php /* Smarty version Smarty-3.1.21, created on 2020-09-17 13:16:07
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/rus_boxberry/hooks/shipments/list_extra_links.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:282826825f63a7e757f212-41777643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9547ab3f7e0fae2349f8b5ac438ba4489f8a7419' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/rus_boxberry/hooks/shipments/list_extra_links.pre.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '282826825f63a7e757f212-41777643',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shipment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f63a7e7585199_62204368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f63a7e7585199_62204368')) {function content_5f63a7e7585199_62204368($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('rus_boxberry.print_label'));
?>
<?php if ($_smarty_tpl->tpl_vars['shipment']->value['boxberry_label']) {?>
    <li>
        <?php ob_start();?><?php echo $_smarty_tpl->__("rus_boxberry.print_label");?>
<?php $_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp1,'href'=>((string)$_smarty_tpl->tpl_vars['shipment']->value['boxberry_label']),'target'=>"_blank"));?>

    </li>
<?php }?>
<?php }} ?>
