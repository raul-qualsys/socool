<?php /* Smarty version Smarty-3.1.21, created on 2020-08-15 06:55:00
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/sd_facebook_pixel/hooks/profiles/success_registration.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16006153295f37cd14000429-28361011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a09b8acae3fcc7d686c0436c723b1df65e5829b2' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/sd_facebook_pixel/hooks/profiles/success_registration.pre.tpl',
      1 => 1578555956,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16006153295f37cd14000429-28361011',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'facebook_pixel_ids' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f37cd1400ccf0_93651850',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f37cd1400ccf0_93651850')) {function content_5f37cd1400ccf0_93651850($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['facebook_pixel_ids']->value&&$_smarty_tpl->tpl_vars['addons']->value['sd_facebook_pixel']['complete_registration_facebook_pixel']=="Y") {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        (function(_, $) {
            fbq('track', 'CompleteRegistration');
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/sd_facebook_pixel/hooks/profiles/success_registration.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/sd_facebook_pixel/hooks/profiles/success_registration.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['facebook_pixel_ids']->value&&$_smarty_tpl->tpl_vars['addons']->value['sd_facebook_pixel']['complete_registration_facebook_pixel']=="Y") {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        (function(_, $) {
            fbq('track', 'CompleteRegistration');
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php }?>
<?php }?><?php }} ?>
