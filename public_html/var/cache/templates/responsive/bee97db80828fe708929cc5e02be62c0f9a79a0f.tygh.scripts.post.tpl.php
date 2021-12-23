<?php /* Smarty version Smarty-3.1.21, created on 2020-09-17 13:19:42
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/janrain/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3802550155f63a8be92ab28-53045037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bee97db80828fe708929cc5e02be62c0f9a79a0f' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/janrain/hooks/index/scripts.post.tpl',
      1 => 1565883483,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3802550155f63a8be92ab28-53045037',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'escaped_return_url' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f63a8be9475c3_61904493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f63a8be9475c3_61904493')) {function content_5f63a8be9475c3_61904493($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_REQUEST['return_url']) {?>
    <?php $_smarty_tpl->tpl_vars["escaped_return_url"] = new Smarty_variable(rawurlencode($_REQUEST['return_url']), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["escaped_return_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
//<![CDATA[
(function() {
    if (typeof window.janrain !== 'object') window.janrain = {};
    var _languages = ['ar', 'bg', 'cs', 'da', 'de', 'el', 'en', 'es', 'fi', 'fr', 'he', 'hr', 'hu', 'id', 'it', 'ja', 'lt', 'nb', 'nl', 'no', 'pl', 'pt', 'ro', 'ru', 'sk', 'sl', 'sv', 'th', 'uk', 'zh'];
    window.janrain.settings = {
        type: 'modal',
        language: fn_get_listed_lang(_languages),
        tokenUrl: '<?php echo htmlspecialchars(fn_url("auth.login?return_url=".((string)$_smarty_tpl->tpl_vars['escaped_return_url']->value),"C","current"), ENT_QUOTES, 'ISO-8859-1');?>
'
    };

    function isReady() { janrain.ready = true; };
    if (document.addEventListener) {
        document.addEventListener("DOMContentLoaded", isReady, false);
    } else {
        window.attachEvent('onload', isReady);
    }

    var e = document.createElement('script');
    e.type = 'text/javascript';
    e.id = 'janrainAuthWidget';

    if (document.location.protocol === 'https:') {
        e.src = 'https://rpxnow.com/js/lib/<?php echo htmlspecialchars(fn_janrain_parse_app_domain($_smarty_tpl->tpl_vars['addons']->value['janrain']['appdomain']), ENT_QUOTES, 'ISO-8859-1');?>
/engage.js';
    } else {
        e.src = 'http://widget-cdn.rpxnow.com/js/lib/<?php echo htmlspecialchars(fn_janrain_parse_app_domain($_smarty_tpl->tpl_vars['addons']->value['janrain']['appdomain']), ENT_QUOTES, 'ISO-8859-1');?>
/engage.js';
    }

    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(e, s);
})();
//]]>
<?php echo '</script'; ?>
>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/janrain/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/janrain/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_REQUEST['return_url']) {?>
    <?php $_smarty_tpl->tpl_vars["escaped_return_url"] = new Smarty_variable(rawurlencode($_REQUEST['return_url']), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["escaped_return_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
//<![CDATA[
(function() {
    if (typeof window.janrain !== 'object') window.janrain = {};
    var _languages = ['ar', 'bg', 'cs', 'da', 'de', 'el', 'en', 'es', 'fi', 'fr', 'he', 'hr', 'hu', 'id', 'it', 'ja', 'lt', 'nb', 'nl', 'no', 'pl', 'pt', 'ro', 'ru', 'sk', 'sl', 'sv', 'th', 'uk', 'zh'];
    window.janrain.settings = {
        type: 'modal',
        language: fn_get_listed_lang(_languages),
        tokenUrl: '<?php echo htmlspecialchars(fn_url("auth.login?return_url=".((string)$_smarty_tpl->tpl_vars['escaped_return_url']->value),"C","current"), ENT_QUOTES, 'ISO-8859-1');?>
'
    };

    function isReady() { janrain.ready = true; };
    if (document.addEventListener) {
        document.addEventListener("DOMContentLoaded", isReady, false);
    } else {
        window.attachEvent('onload', isReady);
    }

    var e = document.createElement('script');
    e.type = 'text/javascript';
    e.id = 'janrainAuthWidget';

    if (document.location.protocol === 'https:') {
        e.src = 'https://rpxnow.com/js/lib/<?php echo htmlspecialchars(fn_janrain_parse_app_domain($_smarty_tpl->tpl_vars['addons']->value['janrain']['appdomain']), ENT_QUOTES, 'ISO-8859-1');?>
/engage.js';
    } else {
        e.src = 'http://widget-cdn.rpxnow.com/js/lib/<?php echo htmlspecialchars(fn_janrain_parse_app_domain($_smarty_tpl->tpl_vars['addons']->value['janrain']['appdomain']), ENT_QUOTES, 'ISO-8859-1');?>
/engage.js';
    }

    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(e, s);
})();
//]]>
<?php echo '</script'; ?>
>
<?php }?><?php }} ?>
