<?php /* Smarty version Smarty-3.1.21, created on 2020-06-25 16:32:07
         compiled from "/var/www/html/socool.mx/public_html/design/backend/mail/templates/common/wrap_document.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14890673985ef517d777e0f3-30723365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b157b011770e329becc4dc2b7515416fbe4f1fc' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/mail/templates/common/wrap_document.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14890673985ef517d777e0f3-30723365',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'language_direction' => 0,
    'content' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ef517d778a8b0_64452386',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef517d778a8b0_64452386')) {function content_5ef517d778a8b0_64452386($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><!DOCTYPE html>
<html dir="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
<head>

<style type="text/css" media="screen,print">
body {
    padding: 0;
    margin: 0;
    text-align: center;
}
a, a:link, a:visited, a:hover, a:active {
    color: #000000;
    text-decoration: underline;
}
a:hover {
    text-decoration: none;
}

#print-wrapp {
	max-width: 800px;
	width: 100%;
	margin: 0px auto;
	text-align: initial;
}

</style>

</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("common/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table id="print-wrapp">
	<tr>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		</td>
	</tr>
</table>
</body>
</html><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/wrap_document.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/wrap_document.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><!DOCTYPE html>
<html dir="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
<head>

<style type="text/css" media="screen,print">
body {
    padding: 0;
    margin: 0;
    text-align: center;
}
a, a:link, a:visited, a:hover, a:active {
    color: #000000;
    text-decoration: underline;
}
a:hover {
    text-decoration: none;
}

#print-wrapp {
	max-width: 800px;
	width: 100%;
	margin: 0px auto;
	text-align: initial;
}

</style>

</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("common/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table id="print-wrapp">
	<tr>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		</td>
	</tr>
</table>
</body>
</html><?php }?><?php }} ?>
