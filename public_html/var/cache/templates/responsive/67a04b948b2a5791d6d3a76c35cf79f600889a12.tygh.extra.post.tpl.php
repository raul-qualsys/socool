<?php /* Smarty version Smarty-3.1.21, created on 2020-06-20 08:49:00
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/hybrid_auth/hooks/auth_info/extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2860030165eee13ccd9aec5-20217426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67a04b948b2a5791d6d3a76c35cf79f600889a12' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/hybrid_auth/hooks/auth_info/extra.post.tpl',
      1 => 1565883483,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2860030165eee13ccd9aec5-20217426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5eee13ccdb01e7_46930453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eee13ccdb01e7_46930453')) {function content_5eee13ccdb01e7_46930453($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('hybrid_auth.connect_social_title','hybrid_auth.text_connect_social','hybrid_auth.specify_email_title','hybrid_auth.text_specify_email','hybrid_auth.connect_social_title','hybrid_auth.text_connect_social','hybrid_auth.specify_email_title','hybrid_auth.text_specify_email'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth") {?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="connect_social") {?>
    <h4 class="ty-login-info__title"><?php echo $_smarty_tpl->__("hybrid_auth.connect_social_title");?>
</h4>
    <div class="ty-login-info__txt"><?php echo $_smarty_tpl->__("hybrid_auth.text_connect_social");?>
</div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="specify_email") {?>
        <h4 class="ty-login-info__title"><?php echo $_smarty_tpl->__("hybrid_auth.specify_email_title");?>
</h4>
        <div class="ty-login-info__txt"><?php echo $_smarty_tpl->__("hybrid_auth.text_specify_email");?>
</div>
    <?php }?>
<?php }?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hybrid_auth/hooks/auth_info/extra.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/hybrid_auth/hooks/auth_info/extra.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth") {?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="connect_social") {?>
    <h4 class="ty-login-info__title"><?php echo $_smarty_tpl->__("hybrid_auth.connect_social_title");?>
</h4>
    <div class="ty-login-info__txt"><?php echo $_smarty_tpl->__("hybrid_auth.text_connect_social");?>
</div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="specify_email") {?>
        <h4 class="ty-login-info__title"><?php echo $_smarty_tpl->__("hybrid_auth.specify_email_title");?>
</h4>
        <div class="ty-login-info__txt"><?php echo $_smarty_tpl->__("hybrid_auth.text_specify_email");?>
</div>
    <?php }?>
<?php }?>

<?php }?><?php }} ?>
