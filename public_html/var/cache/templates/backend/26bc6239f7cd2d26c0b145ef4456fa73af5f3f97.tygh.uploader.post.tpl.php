<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 12:00:00
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/hidpi/hooks/fileuploader/uploader.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17722324395ee263106def05-65693304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26bc6239f7cd2d26c0b145ef4456fa73af5f3f97' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/hidpi/hooks/fileuploader/uploader.post.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17722324395ee263106def05-65693304',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_image' => 0,
    'var_name' => 0,
    'id_var_name' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee263106e5e74_84548143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee263106e5e74_84548143')) {function content_5ee263106e5e74_84548143($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('hidpi.upload_high_res_image','hidpi.upload_high_res_image.tooltip'));
?>
<?php if ($_smarty_tpl->tpl_vars['is_image']->value) {?>
    <input type="hidden" name="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars(@constant('HIDPI_IS_HIGH_RES_FALSE'), ENT_QUOTES, 'ISO-8859-1');?>
" id="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
_hidden" class="cm-image-field" />
    <label for="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="hidpi-mark">
        <input type="checkbox" name="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php echo htmlspecialchars(@constant('HIDPI_IS_HIGH_RES_TRUE'), ENT_QUOTES, 'ISO-8859-1');?>
" id="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['addons']->value['hidpi']['default_upload_high_res_image']==="Y") {?>checked="checked"<?php }?> class="cm-image-field" />
        <?php echo $_smarty_tpl->__("hidpi.upload_high_res_image");?>
 <i class="cm-tooltip icon-question-sign" title="<?php echo $_smarty_tpl->__("hidpi.upload_high_res_image.tooltip");?>
"></i>
    </label>
<?php }?><?php }} ?>
