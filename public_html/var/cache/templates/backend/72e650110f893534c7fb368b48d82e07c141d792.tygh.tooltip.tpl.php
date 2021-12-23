<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 08:42:47
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/common/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1502843625ee234d7e98cc1-06253236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72e650110f893534c7fb368b48d82e07c141d792' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/common/tooltip.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1502843625ee234d7e98cc1-06253236',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tooltip' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee234d7e9b890_22952166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee234d7e9b890_22952166')) {function content_5ee234d7e9b890_22952166($_smarty_tpl) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'ISO-8859-1');
}?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><i class="icon-question-sign"></i></a><?php }?><?php }} ?>
