<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 08:42:37
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/views/products/components/bulk_edit/categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8045294295ee234cdd11971-03297798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1a73fc0876903b951e84857bfaa7445354365ae' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/views/products/components/bulk_edit/categories.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8045294295ee234cdd11971-03297798',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bulk_edit' => 0,
    'rnd' => 0,
    'bulk_edit_ids_flat' => 0,
    'bulk_edit_ids' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee234cdd1d7c0_31209615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee234cdd1d7c0_31209615')) {function content_5ee234cdd1d7c0_31209615($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('categories','bulk_edit.what_do_these_checkboxes_mean','show','bulk_edit.what_do_these_checkboxes_mean_checked','bulk_edit.what_do_these_checkboxes_mean_unchecked','bulk_edit.what_do_these_checkboxes_mean_indeterminate','reset','apply'));
?>
<div class="bulk-edit-inner bulk-edit-inner--categories">
    <div class="bulk-edit-inner__header">
        <span><?php echo $_smarty_tpl->__("categories");?>
</span>
    </div>

    <div class="bulk-edit-inner__body" id="bulk_edit_categories_list">
        <?php if ($_smarty_tpl->tpl_vars['bulk_edit']->value) {?>

        <div class="bulk-edit-inner__hint">
            <p><strong><?php echo $_smarty_tpl->__("bulk_edit.what_do_these_checkboxes_mean");?>
 (<a href="#" class="cm-toggle" data-toggle=".bulk-edit-inner--categories .bulk-edit-inner__hint > .bulk-edit--category-hint-wrapper" data-show-text="<?php echo $_smarty_tpl->__('show');?>
" data-hide-text="<?php echo $_smarty_tpl->__('hide');?>
" data-state="show"><?php echo $_smarty_tpl->__("show");?>
</a>)</strong></p>

            <div class="bulk-edit--category-hint-wrapper hidden">
                <span><input type="checkbox" class="cm-readonly no-margin" checked="checked" /> <?php echo $_smarty_tpl->__("bulk_edit.what_do_these_checkboxes_mean_checked");?>
</span> <br />
                <span><input type="checkbox" class="cm-readonly no-margin" /> <?php echo $_smarty_tpl->__("bulk_edit.what_do_these_checkboxes_mean_unchecked");?>
</span> <br />
                <span><input type="checkbox" class="cm-readonly no-margin" data-set-indeterminate="true" /> <?php echo $_smarty_tpl->__("bulk_edit.what_do_these_checkboxes_mean_indeterminate");?>
</span>
                
                <hr>
            </div>
        </div>

        <div class="control-group">
            <div class="controls" id="bulk_edit_categories_list_content">
                <?php ob_start();
echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['rnd']->value)===null||$tmp==='' ? uniqid() : $tmp), ENT_QUOTES, 'ISO-8859-1');
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/select2_categories_bulkedit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('select2_multiple'=>true,'select2_select_id'=>"product_categories_add_".$_tmp1,'select2_name'=>"product_data[category_ids]",'select2_allow_sorting'=>true,'select2_dropdown_parent'=>"#bulk_edit_categories_list_content",'select2_category_ids'=>$_smarty_tpl->tpl_vars['bulk_edit_ids_flat']->value,'select2_bulk_edit_mode'=>true,'select2_bulk_edit_mode_category_ids'=>$_smarty_tpl->tpl_vars['bulk_edit_ids']->value,'disable_categories'=>true,'select2_wrapper_meta'=>"cm-field-container",'select2_select_meta'=>"input-large"), 0);?>

            <!--bulk_edit_categories_list_content--></div>
        </div>
        <?php }?>
    <!--bulk_edit_categories_list--></div>

    <div class="bulk-edit-inner__footer">
        <button class="btn bulk-edit-inner__btn"
                role="button"
                data-ca-bulkedit-mod-cat-cancel
        ><?php echo $_smarty_tpl->__("reset");?>
</button>
        <button class="btn btn-primary bulk-edit-inner__btn"
                role="button"
                data-ca-bulkedit-mod-cat-update
                data-ca-bulkedit-mod-target-form="[name=manage_products_form]"
                data-ca-bulkedit-mod-target-form-active-objects="tr.selected:has(input[type=checkbox].cm-item:checked)"
                data-ca-bulkedit-mod-dispatch="products.bulk_edit_get_categories_list"
        ><?php echo $_smarty_tpl->__("apply");?>
</button>
    </div>
</div>
<?php }} ?>
