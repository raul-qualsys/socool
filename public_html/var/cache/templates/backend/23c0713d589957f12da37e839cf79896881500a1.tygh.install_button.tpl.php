<?php /* Smarty version Smarty-3.1.21, created on 2020-06-15 09:51:05
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/views/upgrade_center/components/install_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6528326545ee78ad9be9a98-77634819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23c0713d589957f12da37e839cf79896881500a1' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/views/upgrade_center/components/install_button.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6528326545ee78ad9be9a98-77634819',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'show_pre_upgrade_notice' => 0,
    'caption' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee78ad9beda54_41363411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee78ad9beda54_41363411')) {function content_5ee78ad9beda54_41363411($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('install'));
?>
<div class="upgrade-center_install" id="install_button_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    <?php if ($_smarty_tpl->tpl_vars['show_pre_upgrade_notice']->value) {?>
        <input type="submit" class="btn btn-primary cm-dialog-opener cm-dialog-auto-size" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['caption']->value, ENT_QUOTES, 'ISO-8859-1');?>
" data-ca-target-id="content_upgrade_center_wizard_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    <?php } else { ?>
        <input type="submit" name="dispatch[upgrade_center.install]" class="btn btn-primary cm-ajax cm-comet cm-dialog-closer" value="<?php echo $_smarty_tpl->__("install");?>
">
    <?php }?>
<!--install_button_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></div><?php }} ?>
