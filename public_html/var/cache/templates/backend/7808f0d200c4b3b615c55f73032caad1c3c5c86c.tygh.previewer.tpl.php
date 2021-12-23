<?php /* Smarty version Smarty-3.1.21, created on 2020-06-22 18:33:46
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/common/previewer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13628934365ef13fdaa3a8e6-14930348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7808f0d200c4b3b615c55f73032caad1c3c5c86c' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/common/previewer.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13628934365ef13fdaa3a8e6-14930348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ef13fdaa3c1a4_36772638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef13fdaa3c1a4_36772638')) {function content_5ef13fdaa3c1a4_36772638($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>
<?php }} ?>
