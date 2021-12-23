<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 12:10:24
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/common/theme_editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10974621255ee26580aafef6-41189182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62d6c001fc266bbe0921c5f65f06093504f872bf' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/common/theme_editor.tpl',
      1 => 1564032795,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '10974621255ee26580aafef6-41189182',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee26580ab3ea6_78663235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee26580ab3ea6_78663235')) {function content_5ee26580ab3ea6_78663235($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/lib/ace/ace.js"),$_smarty_tpl);?>

<div id="theme_editor">
<div class="theme-editor"></div>
<?php echo '<script'; ?>
>
(function(_, $) {
    $.extend(_, {
        query_string: encodeURIComponent('<?php echo strtr($_SERVER['QUERY_STRING'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
')
    });
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/tygh/theme_editor.js"),$_smarty_tpl);?>

<!--theme_editor--></div>
<?php }} ?>
