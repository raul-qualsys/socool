<?php /* Smarty version Smarty-3.1.21, created on 2020-06-23 23:28:03
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/views/auth/recover_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15077481955ef2d653e8b072-50626666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a28960fcd7834647a2f52bd7ebee6a78ab5fe7c3' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/views/auth/recover_password.tpl',
      1 => 1565855938,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15077481955ef2d653e8b072-50626666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'action' => 0,
    'ekey' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ef2d653ea8bd2_59468438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef2d653ea8bd2_59468438')) {function content_5ef2d653ea8bd2_59468438($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('email','press_continue_to_recover_password','continue','recover_password','email','press_continue_to_recover_password','continue','recover_password'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-recover-password">
    <form name="recoverfrm"
          action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
"
          method="post"
    >
        <?php if ($_smarty_tpl->tpl_vars['action']->value=="request") {?>
            <div class="ty-control-group">
                <label class="ty-login__filed-label ty-control-group__label cm-trim cm-required"
                       for="login_id"
                ><?php echo $_smarty_tpl->__("email");?>
</label>
                <input type="text"
                       id="login_id"
                       name="user_email"
                       size="30"
                       value=""
                       class="ty-login__input cm-focus"
                />
            </div>
            <div class="buttons-container login-recovery">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/reset_password.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[auth.recover_password]"), 0);?>

            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['action']->value=="recover") {?>
            <input type="hidden"
                   name="ekey"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ekey']->value, ENT_QUOTES, 'ISO-8859-1');?>
"
            />
            <div class="ty-control-group">
                <p><?php echo $_smarty_tpl->__("press_continue_to_recover_password");?>
</p>
            </div>
            <div class="buttons-container login-recovery">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("continue"),'but_meta'=>"ty-btn__secondary",'but_name'=>"dispatch[auth.recover_password]"), 0);?>

            </div>
        <?php }?>
    </form>
</div>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->__("recover_password");
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/auth/recover_password.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/auth/recover_password.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-recover-password">
    <form name="recoverfrm"
          action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
"
          method="post"
    >
        <?php if ($_smarty_tpl->tpl_vars['action']->value=="request") {?>
            <div class="ty-control-group">
                <label class="ty-login__filed-label ty-control-group__label cm-trim cm-required"
                       for="login_id"
                ><?php echo $_smarty_tpl->__("email");?>
</label>
                <input type="text"
                       id="login_id"
                       name="user_email"
                       size="30"
                       value=""
                       class="ty-login__input cm-focus"
                />
            </div>
            <div class="buttons-container login-recovery">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/reset_password.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[auth.recover_password]"), 0);?>

            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['action']->value=="recover") {?>
            <input type="hidden"
                   name="ekey"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ekey']->value, ENT_QUOTES, 'ISO-8859-1');?>
"
            />
            <div class="ty-control-group">
                <p><?php echo $_smarty_tpl->__("press_continue_to_recover_password");?>
</p>
            </div>
            <div class="buttons-container login-recovery">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("continue"),'but_meta'=>"ty-btn__secondary",'but_name'=>"dispatch[auth.recover_password]"), 0);?>

            </div>
        <?php }?>
    </form>
</div>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->__("recover_password");
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?><?php }} ?>
