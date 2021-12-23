<?php /* Smarty version Smarty-3.1.21, created on 2020-08-03 13:59:31
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/reward_points/hooks/products/select_options.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10486380565f285e934cbb18-68306871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc88f842953a86fb80d9085f85dd3cb0cc1df4ec' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/reward_points/hooks/products/select_options.post.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10486380565f285e934cbb18-68306871',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f285e934cf364_89184337',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f285e934cf364_89184337')) {function content_5f285e934cf364_89184337($_smarty_tpl) {?><?php if (floatval($_smarty_tpl->tpl_vars['vr']->value['point_modifier'])) {?>&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("addons/reward_points/common/point_modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['point_modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['point_modifier']), 0);
}?><?php }} ?>
