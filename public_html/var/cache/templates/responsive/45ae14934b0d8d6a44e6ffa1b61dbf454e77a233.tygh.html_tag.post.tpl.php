<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 01:36:56
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/sd_facebook_pixel/hooks/index/html_tag.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:835753115ee1d10889c251-43248453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45ae14934b0d8d6a44e6ffa1b61dbf454e77a233' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/sd_facebook_pixel/hooks/index/html_tag.post.tpl',
      1 => 1578555956,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '835753115ee1d10889c251-43248453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_pixel' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee1d1088a76c0_11365346',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee1d1088a76c0_11365346')) {function content_5ee1d1088a76c0_11365346($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['product_pixel']->value) {?> prefix="og: http://ogp.me/ns# product: http://ogp.me/ns/product#"<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/sd_facebook_pixel/hooks/index/html_tag.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/sd_facebook_pixel/hooks/index/html_tag.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['product_pixel']->value) {?> prefix="og: http://ogp.me/ns# product: http://ogp.me/ns/product#"<?php }
}?><?php }} ?>
