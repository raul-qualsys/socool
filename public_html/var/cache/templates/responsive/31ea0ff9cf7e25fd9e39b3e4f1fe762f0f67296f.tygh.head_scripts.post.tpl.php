<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 01:36:57
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/google_analytics/hooks/index/head_scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20340709115ee1d1091afb55-36276137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31ea0ff9cf7e25fd9e39b3e4f1fe762f0f67296f' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/google_analytics/hooks/index/head_scripts.post.tpl',
      1 => 1565883483,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20340709115ee1d1091afb55-36276137',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'addons' => 0,
    'ga_pageview_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee1d1091c2008_02761973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee1d1091c2008_02761973')) {function content_5ee1d1091c2008_02761973($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo '<script'; ?>
 type="text/javascript" data-no-defer>
(function(i,s,o,g,r,a,m){
    i['GoogleAnalyticsObject']=r;
    i[r]=i[r]||function()<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
(i[r].q=i[r].q||[]).push(arguments)<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
,i[r].l=1*new Date();
    a=s.createElement(o), m=s.getElementsByTagName(o)[0];
    a.async=1;
    a.src=g;
    m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['google_analytics']['tracking_code'], ENT_QUOTES, 'ISO-8859-1');?>
', 'auto');
ga('send', 'pageview', '<?php echo strtr($_smarty_tpl->tpl_vars['ga_pageview_url']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
<?php echo '</script'; ?>
>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/google_analytics/hooks/index/head_scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/google_analytics/hooks/index/head_scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><?php echo '<script'; ?>
 type="text/javascript" data-no-defer>
(function(i,s,o,g,r,a,m){
    i['GoogleAnalyticsObject']=r;
    i[r]=i[r]||function()<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
(i[r].q=i[r].q||[]).push(arguments)<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
,i[r].l=1*new Date();
    a=s.createElement(o), m=s.getElementsByTagName(o)[0];
    a.async=1;
    a.src=g;
    m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['google_analytics']['tracking_code'], ENT_QUOTES, 'ISO-8859-1');?>
', 'auto');
ga('send', 'pageview', '<?php echo strtr($_smarty_tpl->tpl_vars['ga_pageview_url']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
<?php echo '</script'; ?>
>

<?php }?><?php }} ?>
