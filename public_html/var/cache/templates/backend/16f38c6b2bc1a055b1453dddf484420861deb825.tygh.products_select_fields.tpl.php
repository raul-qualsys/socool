<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 08:42:47
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/views/products/components/products_select_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7157340905ee234d7c549e2-77424382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16f38c6b2bc1a055b1453dddf484420861deb825' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/views/products/components/products_select_fields.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7157340905ee234d7c549e2-77424382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected_fields' => 0,
    'columns' => 0,
    'rows' => 0,
    'splitted_selected_fields' => 0,
    'sfs' => 0,
    'sf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee234d7c666d4_01295426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee234d7c666d4_01295426')) {function content_5ee234d7c666d4_01295426($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/modifier.count.php';
if (!is_callable('smarty_function_math')) include '/var/www/html/socool.mx/public_html/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_modifier_sort_by')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/modifier.sort_by.php';
if (!is_callable('smarty_function_split')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.split.php';
?><input type="hidden" name="selected_fields[object]" value="product" />
<?php echo smarty_function_math(array('equation'=>"ceil(n/c)",'assign'=>"rows",'n'=>smarty_modifier_count($_smarty_tpl->tpl_vars['selected_fields']->value),'c'=>(($tmp = @$_smarty_tpl->tpl_vars['columns']->value)===null||$tmp==='' ? "5" : $tmp)),$_smarty_tpl);?>


<?php echo smarty_function_split(array('data'=>smarty_modifier_sort_by($_smarty_tpl->tpl_vars['selected_fields']->value,"text"),'size'=>$_smarty_tpl->tpl_vars['rows']->value,'assign'=>"splitted_selected_fields",'vertical_delimition'=>false,'size_is_horizontal'=>true),$_smarty_tpl);?>


<div class="table-wrapper">
    <table cellpadding="10" width="100%">
    <tr valign="top">
        <?php  $_smarty_tpl->tpl_vars["sfs"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sfs"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_selected_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["sfs"]->key => $_smarty_tpl->tpl_vars["sfs"]->value) {
$_smarty_tpl->tpl_vars["sfs"]->_loop = true;
?>
            <td>
            <ul class="unstyled">
                <?php  $_smarty_tpl->tpl_vars["sf"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sf"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sfs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["sf"]->key => $_smarty_tpl->tpl_vars["sf"]->value) {
$_smarty_tpl->tpl_vars["sf"]->_loop = true;
?>
                    <li>
                        <?php if ($_smarty_tpl->tpl_vars['sf']->value) {?>
                            <?php if ($_smarty_tpl->tpl_vars['sf']->value['disabled']=="Y") {?><input type="hidden" value="Y" name="selected_fields<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sf']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
" /><?php }?>
                            <label class="checkbox" for="elm_<?php echo htmlspecialchars(md5($_smarty_tpl->tpl_vars['sf']->value['name']), ENT_QUOTES, 'ISO-8859-1');?>
"><input type="checkbox" value="Y" name="selected_fields<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sf']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
" id="elm_<?php echo htmlspecialchars(md5($_smarty_tpl->tpl_vars['sf']->value['name']), ENT_QUOTES, 'ISO-8859-1');?>
" checked="checked" <?php if ($_smarty_tpl->tpl_vars['sf']->value['disabled']=="Y") {?>disabled="disabled"<?php }?> class="cm-item-s" />
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sf']->value['text'], ENT_QUOTES, 'ISO-8859-1');?>
</label>
                        <?php }?>
                    </li>
                <?php } ?>
            </ul>
            </td>
        <?php } ?>
    </tr></table>
</div>
<p>
<?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_target'=>"s",'style'=>"links"), 0);?>

</p><?php }} ?>
