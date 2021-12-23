<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 18:22:19
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/discussion/hooks/orders/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:682648585ee2bcab578253-79347952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9dd5479d22da06cb02af4da26ef37791aa67f88' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/discussion/hooks/orders/tabs_content.post.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '682648585ee2bcab578253-79347952',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee2bcab579c74_93691630',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee2bcab579c74_93691630')) {function content_5ee2bcab579c74_93691630($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_id'=>$_smarty_tpl->tpl_vars['order_info']->value['user_id'],'object_company_id'=>$_smarty_tpl->tpl_vars['order_info']->value['company_id']), 0);?>
<?php }} ?>
