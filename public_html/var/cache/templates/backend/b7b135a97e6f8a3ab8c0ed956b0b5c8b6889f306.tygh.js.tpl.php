<?php /* Smarty version Smarty-3.1.21, created on 2020-06-23 10:08:32
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/banners/pickers/banners/js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16205879525ef21af053bf33-81413743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7b135a97e6f8a3ab8c0ed956b0b5c8b6889f306' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/banners/pickers/banners/js.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16205879525ef21af053bf33-81413743',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner_id' => 0,
    'default_name' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'clone' => 0,
    'holder' => 0,
    'position_field' => 0,
    'input_name' => 0,
    'position' => 0,
    'banner' => 0,
    'hide_delete_button' => 0,
    'view_only' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ef21af0550884_55532898',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef21af0550884_55532898')) {function content_5ef21af0550884_55532898($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/html/socool.mx/public_html/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('delete'));
?>
<?php if ($_smarty_tpl->tpl_vars['banner_id']->value=="0") {?>
    <?php $_smarty_tpl->tpl_vars["banner"] = new Smarty_variable($_smarty_tpl->tpl_vars['default_name']->value, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["banner"] = new Smarty_variable((($tmp = @fn_get_banner_name($_smarty_tpl->tpl_vars['banner_id']->value))===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['ldelim']->value)."banner".((string)$_smarty_tpl->tpl_vars['rdelim']->value) : $tmp), null, 0);?>
<?php }?>

<tr <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['position_field']->value) {?>
        <td>
            <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo smarty_function_math(array('equation'=>"a*b",'a'=>$_smarty_tpl->tpl_vars['position']->value,'b'=>10),$_smarty_tpl);?>
" size="3" class="input-micro" <?php if ($_smarty_tpl->tpl_vars['clone']->value) {?>disabled="disabled"<?php }?> />
        </td>
    <?php }?>
    <td><a href="<?php echo htmlspecialchars(fn_url("banners.update?banner_id=".((string)$_smarty_tpl->tpl_vars['banner_id']->value)), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value, ENT_QUOTES, 'ISO-8859-1');?>
</a></td>
    <td>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <?php if (!$_smarty_tpl->tpl_vars['hide_delete_button']->value&&!$_smarty_tpl->tpl_vars['view_only']->value) {?>
                <li><a onclick="Tygh.$.cePicker('delete_js_item', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'ISO-8859-1');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
', 'b'); return false;"><?php echo $_smarty_tpl->__("delete");?>
</a></li>
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <div class="hidden-tools">
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        </div>
    </td>
</tr><?php }} ?>
