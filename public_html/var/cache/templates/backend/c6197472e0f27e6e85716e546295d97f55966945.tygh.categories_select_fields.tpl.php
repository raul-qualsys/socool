<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 08:42:21
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/views/categories/components/categories_select_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16489990865ee234bda423f4-55152143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6197472e0f27e6e85716e546295d97f55966945' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/views/categories/components/categories_select_fields.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16489990865ee234bda423f4-55152143',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee234bda5bac3_89995831',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee234bda5bac3_89995831')) {function content_5ee234bda5bac3_89995831($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('status','meta_description','product_details_view','position','name','meta_keywords','creation_date','localization','category_description','image_pair','title','usergroups'));
?>
<input type="hidden" name="selected_fields[object]" value="category" />

<div class="table-wrapper">
    <table width="100%">
    <tr valign="top">
        <td>
            <label class="checkbox" for="elm_status"><input type="hidden" value="status" name="selected_fields[data][]" />
            <input type="checkbox" value="status" name="selected_fields[data][]" id="elm_status" checked="checked" disabled="disabled" class="cm-item-s" />
            <?php echo $_smarty_tpl->__("status");?>
</label>
            
            <label class="checkbox" for="elm_meta_description"><input type="checkbox" value="meta_description" name="selected_fields[data][]" id="elm_meta_description" checked="checked" class="cm-item-s" /><?php echo $_smarty_tpl->__("meta_description");?>
</label>

            <label class="checkbox" for="elm_product_details_view"><input type="checkbox" value="product_details_view" name="selected_fields[data][]" id="elm_product_details_view" checked="checked" class="cm-item-s" /><?php echo $_smarty_tpl->__("product_details_view");?>
</label>

            <label for="elm_position" class="checkbox"><input type="checkbox" value="position" name="selected_fields[data][]" id="elm_position" checked="checked" class="cm-item-s" /><?php echo $_smarty_tpl->__("position");?>
</label>
        </td>
        <td>
            <label for="elm_name" class="checkbox"><input type="hidden" value="category" name="selected_fields[data][]" />
            <input type="checkbox" value="category" name="selected_fields[data][]" id="elm_category_name" checked="checked" disabled="disabled" class="cm-item-s" />
            <?php echo $_smarty_tpl->__("name");?>
</label>
            
            <label class="checkbox" for="elm_meta_keywords"><input type="checkbox" value="meta_keywords" name="selected_fields[data][]" id="elm_meta_keywords" checked="checked" class="checkbox cm-item-s" /><?php echo $_smarty_tpl->__("meta_keywords");?>
</label>

            <label for="elm_timestamp" class="checkbox"><input type="checkbox" value="timestamp" id="elm_timestamp" name="selected_fields[data][]" checked="checked" class="cm-item-s" /><?php echo $_smarty_tpl->__("creation_date");?>
</label>

            <?php if ($_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_localizations']==false) {?>
                <label class="checkbox" for="elm_localization"><input type="checkbox" id="elm_localization" value="localization" name="selected_fields[data][]" checked="checked" class="cm-item-s" /><?php echo $_smarty_tpl->__("localization");?>
</label>
            <?php }?>
        </td>
        <td>
            <label for="elm_description" class="checkbox"><input type="checkbox" value="description" name="selected_fields[data][]" id="elm_description" checked="checked" class="cm-item-s" /><?php echo $_smarty_tpl->__("category_description");?>
</label>

            <label class="checkbox" for="elm_image_pair"><input type="checkbox" value="image_pair" name="selected_fields[images][]" id="elm_image_pair" checked="checked" class="cm-item-s" /><?php echo $_smarty_tpl->__("image_pair");?>
</label>

            <label class="checkbox" for="elm_page_title"><input type="checkbox" value="page_title" id="elm_page_title" name="selected_fields[data][]" checked="checked" class="cm-item-s" /><?php echo $_smarty_tpl->__("title");?>
</label>

            <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
                <label class="checkbox" for="elm_usergroup_ids"><input type="checkbox" value="usergroup_ids" name="selected_fields[data][]" id="elm_usergroup_ids" checked="checked" class="cm-item-s" /><?php echo $_smarty_tpl->__("usergroups");?>
</label>
            <?php }?>
        </td>
        <td>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"categories:fields_to_edit")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"categories:fields_to_edit"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"categories:fields_to_edit"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </td>

    </tr>
    </table>
</div>
<p>
<?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_target'=>"s",'style'=>"links"), 0);?>

</p><?php }} ?>
