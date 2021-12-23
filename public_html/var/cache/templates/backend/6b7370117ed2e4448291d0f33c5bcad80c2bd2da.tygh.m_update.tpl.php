<?php /* Smarty version Smarty-3.1.21, created on 2020-06-22 17:56:07
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/views/products/m_update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10055066265ef137078cc411-03012718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b7370117ed2e4448291d0f33c5bcad80c2bd2da' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/views/products/m_update.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10055066265ef137078cc411-03012718',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filled_groups' => 0,
    'field_names' => 0,
    'field_key' => 0,
    'field_name' => 0,
    'type' => 0,
    'localizations' => 0,
    'field_groups' => 0,
    'field' => 0,
    'v' => 0,
    'name' => 0,
    'v_id' => 0,
    'v_name' => 0,
    'settings' => 0,
    'product_data' => 0,
    'layout' => 0,
    'item' => 0,
    'taxes' => 0,
    'tax' => 0,
    'all_product_features' => 0,
    'all_features_search' => 0,
    'product' => 0,
    'products_data' => 0,
    'primary_currency' => 0,
    'option_name' => 0,
    'tabindex' => 0,
    'categories_data' => 0,
    'product_features' => 0,
    'features_search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ef137079bd8a0_17055880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef137079bd8a0_17055880')) {function content_5ef137079bd8a0_17055880($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_block_hook')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_enum')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_modifier_in_array')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/modifier.in_array.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('override_product_data','vendor','track_with_options','track_without_options','dont_track','zpa_refuse','zpa_permit','zpa_ask_price','apply','vendor','track_with_options','track_without_options','dont_track','zpa_refuse','zpa_permit','zpa_ask_price','update_products'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $) {

    function getFieldType(element) {
        if ($(element).is('input[type=radio], input[type=checkbox], select')) {
            return 'elm-disabled';
        } else if ($(element).is('div')){
            return '';
        } else {
            return 'input-text-disabled';
        }
    }

    $(document).ready(function(){
        $(_.doc).on('click', '[id*=elements-switcher-]', function(){
            var id = $(this).prop('id');
            var id_template = /elements-switcher-(\S+)/i;
            id = 'field_' + id.match(id_template)[1];

            var checked = $(this).prop('checked');
            $('[id*=' + id + ']').each(function(index, element){
                $el = $(element);
                $el.toggleClass(getFieldType(element), !checked);
                $el.prop('disabled', !checked);
                if (!checked) {
                    $el.prop('checked', false);
                }
            });
            $('#' + id + ' .correct-picker-but input').prop('disabled', !checked);
            $('#' + id + ' .correct-picker-but a').toggle(checked);
        });

        $('[id*=field_] .correct-picker-but a').hide();

        // Double scroll
        var elm_orig = $("#scrolled_div");
        var elm_scroller = $("#scrolled_div_top");

        var dummy = $("<div></div>");
        dummy.width(elm_orig.get(0).scrollWidth);
        dummy.height(24);
        elm_scroller.append(dummy);

        elm_scroller.scroll(function(){
            elm_orig.scrollLeft(elm_scroller.scrollLeft());
        });
        elm_orig.scroll(function(){
            elm_scroller.scrollLeft(elm_orig.scrollLeft());
        });
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->tpl_vars["all_categories_list"] = new Smarty_variable(fn_get_plain_categories_tree(0,false), null, 0);?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("extra_tools", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("override_product_data"),'but_onclick'=>"Tygh."."$"."('#override_box').toggle()",'but_role'=>"tool"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div id="override_box" class="hidden">

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="override_form" class="form-horizontal form-edit products-update" enctype="multipart/form-data">
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars(fn_url("products.m_update"), ENT_QUOTES, 'ISO-8859-1');?>
" />

<div class="table-wrapper">
    <table class="products-update__table">
    <tr>
        <td>
            <div class="scroll-x scroll-border">
            <table class="table-fixed table--relative">
            <tr>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filled_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                <th>&nbsp;</th>
                <?php } ?>
                <?php  $_smarty_tpl->tpl_vars["field_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field_name"]->_loop = false;
 $_smarty_tpl->tpl_vars["field_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field_names']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field_name"]->key => $_smarty_tpl->tpl_vars["field_name"]->value) {
$_smarty_tpl->tpl_vars["field_name"]->_loop = true;
 $_smarty_tpl->tpl_vars["field_key"]->value = $_smarty_tpl->tpl_vars["field_name"]->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['field_key']->value=="company_id") {?>
                <th><?php echo $_smarty_tpl->__("vendor");?>
</th>
                <?php } else { ?>
                <th><?php if (is_array($_smarty_tpl->tpl_vars['field_name']->value)) {
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field_key']->value);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'ISO-8859-1');
}?></th>
                <?php }?>
                <?php } ?>
            </tr>
            <tr >
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filled_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <td valign="top" class="pad">
                <?php if ($_smarty_tpl->tpl_vars['type']->value!="L"||$_smarty_tpl->tpl_vars['type']->value=="L"&&$_smarty_tpl->tpl_vars['localizations']->value) {?>
                    <table>
                    <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field_groups']->value[$_smarty_tpl->tpl_vars['type']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['field']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['v']->value[$_smarty_tpl->tpl_vars['field']->value]) {?>
                    <tr>
                        <td valign="top" class="nowrap pad <?php if ($_smarty_tpl->tpl_vars['field']->value=="product") {?>strong<?php }?>"><label class="checkbox" for="elements-switcher-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
__"><input type="checkbox" name="" id="elements-switcher-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
__" value="Y" /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value[$_smarty_tpl->tpl_vars['field']->value], ENT_QUOTES, 'ISO-8859-1');?>
:&nbsp;</label></td>
                        <td valign="top" class="pad">
                            <?php if ($_smarty_tpl->tpl_vars['type']->value=="A") {?>
                            <input id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
__" type="text" value="" name="override_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" disabled="disabled" />
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="B") {?>
                            <input id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
__" type="text" value=""  size="3" name="override_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" disabled="disabled" />
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="C") {?>
                            <input id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
__h" type="hidden" name="override_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="N" disabled="disabled" />
                            <input id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
__" type="checkbox" class="elm-disabled" name="override_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="Y" disabled="disabled" />
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="D") {?>
                            <textarea id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
__" name="override_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" rows="3" cols="40" disabled="disabled"></textarea>
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="S") {?>
                            <select id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
__" name="override_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" class="elm-disabled" disabled="disabled">
                            <?php  $_smarty_tpl->tpl_vars['v_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v_name']->_loop = false;
 $_smarty_tpl->tpl_vars['v_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['name']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v_name']->key => $_smarty_tpl->tpl_vars['v_name']->value) {
$_smarty_tpl->tpl_vars['v_name']->_loop = true;
 $_smarty_tpl->tpl_vars['v_id']->value = $_smarty_tpl->tpl_vars['v_name']->key;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['v_name']->value);?>
</option>
                            <?php } ?>
                            </select>
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="T") {?>
                                <div class="correct-picker-but">
                                <?php if ($_smarty_tpl->tpl_vars['field']->value=="timestamp") {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"field_".((string)$_smarty_tpl->tpl_vars['field']->value)."__date",'date_name'=>"override_".((string)$_smarty_tpl->tpl_vars['name']->value)."[".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'date_val'=>@constant('TIME'),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>" disabled=\"disabled\"",'date_meta'=>"input-text-disabled"), 0);?>

                                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="avail_since") {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"field_".((string)$_smarty_tpl->tpl_vars['field']->value)."__date",'date_name'=>"override_".((string)$_smarty_tpl->tpl_vars['name']->value)."[".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'date_val'=>@constant('TIME'),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>" disabled=\"disabled\"",'date_meta'=>"input-text-disabled"), 0);?>

                                <?php }?>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="L") {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_div'=>true,'disabled'=>true,'id'=>"field_".((string)$_smarty_tpl->tpl_vars['field']->value)."__",'data_name'=>"override_products_data[localization]"), 0);?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="E") {?> 
                            <div class="clear" id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
__">
                                <div class="correct-picker-but">
                                    <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_id'=>"categories",'input_name'=>"override_".((string)$_smarty_tpl->tpl_vars['name']->value)."[category_ids]",'radio_input_name'=>"override_".((string)$_smarty_tpl->tpl_vars['name']->value)."[main_category]",'item_ids'=>'','hide_link'=>true,'display_input_id'=>"category_ids",'view_mode'=>"list"), 0);?>

                                </div>
                            </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="W") {?> 
                                <select id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
__" name="override_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" class="elm-disabled" disabled="disabled">
                                <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_smarty_tpl->tpl_vars["layout"] = new Smarty_Variable;
 $_from = fn_get_product_details_views($_smarty_tpl->tpl_vars['product_data']->value['product_id']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
 $_smarty_tpl->tpl_vars["layout"]->value = $_smarty_tpl->tpl_vars["item"]->key;
?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
                                <?php } ?>
                                </select>
                            <?php } else { ?> 
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:update_types")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:update_types"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:update_types"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php }?>
                        </td>
                    </tr>
                    <?php }?>
                    <?php } ?>
                    </table>
                <?php }?>
                </td>
                <?php } ?>


                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field_names']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars["field"]->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <td valign="top" class="pad">
                <?php if ($_smarty_tpl->tpl_vars['field']->value!="localization"||$_smarty_tpl->tpl_vars['field']->value=="localization"&&$_smarty_tpl->tpl_vars['localizations']->value) {?>
                    <table class="no-border">
                    <tr>
                        <td valign="top" class="pad"><?php if ($_smarty_tpl->tpl_vars['field']->value!="main_pair"&&$_smarty_tpl->tpl_vars['field']->value!="features") {?><input type="checkbox" name="" value="Y" id="elements-switcher-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
__" /><?php } else { ?>&nbsp;<?php }?></td>
                        <td valign="top" class="pad">
                        <?php if ($_smarty_tpl->tpl_vars['field']->value=="main_pair") {?>
                            <table width="420">
                            <tr>
                                <td><?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"product_main",'image_object_type'=>"product",'image_type'=>"M",'no_thumbnail'=>true), 0);?>
</td>
                            </tr>
                            </table>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="tracking") {?>
                            <select    id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
__" name="override_products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" class="elm-disabled" disabled="disabled">
                                <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProductTracking::TRACK_WITH_OPTIONS"), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("track_with_options");?>
</option>
                                <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProductTracking::TRACK_WITHOUT_OPTIONS"), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("track_without_options");?>
</option>
                                <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProductTracking::DO_NOT_TRACK"), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("dont_track");?>
</option>
                            </select>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="zero_price_action") {?>
                            <select id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
__" name="override_products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" class="elm-disabled" disabled="disabled">
                                <option value="R"><?php echo $_smarty_tpl->__("zpa_refuse");?>
</option>
                                <option value="P"><?php echo $_smarty_tpl->__("zpa_permit");?>
</option>
                                <option value="A"><?php echo $_smarty_tpl->__("zpa_ask_price");?>
</option>
                            </select>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="taxes") {?>
                            <input id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
__h" type="hidden" name="override_products_data[tax_ids]" value="" disabled="disabled" />
                            <?php  $_smarty_tpl->tpl_vars["tax"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tax"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['taxes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tax"]->key => $_smarty_tpl->tpl_vars["tax"]->value) {
$_smarty_tpl->tpl_vars["tax"]->_loop = true;
?>
                            <div class="select-field nowrap no-padding">
                                <label class="checkbox" for="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><input type="checkbox" name="override_products_data[tax_ids][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'ISO-8859-1');?>
"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'ISO-8859-1');?>
" disabled="disabled" /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax'], ENT_QUOTES, 'ISO-8859-1');?>
</label>
                            </div>
                            <?php } ?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="features") {?>
                            <?php if ($_smarty_tpl->tpl_vars['all_product_features']->value) {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/products_m_update_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_features'=>$_smarty_tpl->tpl_vars['all_product_features']->value,'features_search'=>$_smarty_tpl->tpl_vars['all_features_search']->value,'product_id'=>0,'over'=>true,'data_name'=>"override_products_data"), 0);?>

                            <?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="timestamp") {?>
                            <div class="correct-picker-but">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"field_".((string)$_smarty_tpl->tpl_vars['field']->value),'date_name'=>"override_products_data[".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'date_val'=>@constant('TIME'),'extra'=>" disabled=\"disabled\"",'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="localization") {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_div'=>true,'data_name'=>"products_data[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."][localization]",'data_from'=>$_smarty_tpl->tpl_vars['product']->value['localization']), 0);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="usergroup_ids") {?>
                            <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/select_usergroups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"field_".((string)$_smarty_tpl->tpl_vars['field']->value)."_",'name'=>"override_products_data[".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'usergroups'=>fn_get_usergroups(array("type"=>"C","status"=>array("A","H")),@constant('DESCR_SL')),'usergroup_ids'=>'','input_extra'=>" disabled=\"disabled\"",'list_mode'=>true), 0);?>

                            <?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="company_id") {?>
                            <div class="clear" id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
__">
                                <div class="correct-picker-but">
                                <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/products_m_update_company.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('override_box'=>"Y"), 0);?>

                                </div>
                            </div>
                        <?php } else { ?>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:update_fields")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:update_fields"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:update_fields_inner")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:update_fields_inner"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <input id="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
__" type="text" value="" name="override_products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" disabled="disabled" />
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:update_fields_inner"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:update_fields"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <?php }?>
                        </td>
                    </tr>
                    </table>
                <?php }?>
                </td>
                <?php } ?>
            </tr>
            </table>
            </div>
        </td>
    </tr>
    </table>
</div>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("apply"),'but_name'=>"dispatch[products.m_override]",'but_role'=>"button_main"), 0);?>

</div>

</form>
</div>


<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="products_m_update_form" class="products-update" enctype="multipart/form-data">
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars(fn_url("products.m_update"), ENT_QUOTES, 'ISO-8859-1');?>
" />

<div class="table-wrapper">
    <table class="products-update__table">
    <tr>
        <td>

            <div id="scrolled_div_top" class="scroll-x scroll-top"></div>
            <div id="scrolled_div" class="scroll-x scroll-border">
            <table class="table-fixed table--relative">
            <tr>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filled_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                <th>&nbsp;</th>
                <?php } ?>
                <?php  $_smarty_tpl->tpl_vars["field_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field_name"]->_loop = false;
 $_smarty_tpl->tpl_vars['field_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field_names']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field_name"]->key => $_smarty_tpl->tpl_vars["field_name"]->value) {
$_smarty_tpl->tpl_vars["field_name"]->_loop = true;
 $_smarty_tpl->tpl_vars['field_key']->value = $_smarty_tpl->tpl_vars["field_name"]->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['field_key']->value=="company_id") {?>
                <th><?php echo $_smarty_tpl->__("vendor");?>
</th>
                <?php } else { ?>
                <th><?php if (is_array($_smarty_tpl->tpl_vars['field_name']->value)) {
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field_key']->value);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'ISO-8859-1');
}?></th>
                <?php }?>
                <?php } ?>
            </tr>
            <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
            <tr >
                <td valign="top" class="nowrap pad products-list__image">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image'=>(($tmp = @$_smarty_tpl->tpl_vars['product']->value['main_pair']['icon'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed'] : $tmp),'image_id'=>$_smarty_tpl->tpl_vars['product']->value['main_pair']['image_id'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_height'],'href'=>fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),'image_css_class'=>"products-list__image--img",'link_css_class'=>"products-list__image--link"), 0);?>

                </td>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filled_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <td valign="top" class="pad">
                <?php if ($_smarty_tpl->tpl_vars['type']->value!="L"||$_smarty_tpl->tpl_vars['type']->value=="L"&&$_smarty_tpl->tpl_vars['localizations']->value) {?>
                    <table class="no-border">
                    <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field_groups']->value[$_smarty_tpl->tpl_vars['type']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['field']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['v']->value[$_smarty_tpl->tpl_vars['field']->value]) {?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:update_fields_item")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:update_fields_item"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <tr>
                        <td valign="top" class="nowrap pad <?php if ($_smarty_tpl->tpl_vars['field']->value=="product") {?>strong<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value[$_smarty_tpl->tpl_vars['field']->value], ENT_QUOTES, 'ISO-8859-1');?>
:&nbsp;</td>
                        <td valign="top" class="pad nowrap">
                            <?php if ($_smarty_tpl->tpl_vars['field']->value=="price"||$_smarty_tpl->tpl_vars['field']->value=="list_price") {?>
                                <input type="text" value="<?php echo htmlspecialchars(fn_format_price($_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value],$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'ISO-8859-1');?>
" class="input-medium" size="5" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" />
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="A") {?>
                                <input 
                                    type="text"
                                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value], ENT_QUOTES, 'ISO-8859-1');?>
"
                                    class="input-medium"
                                    name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
]"
                                    <?php if ($_smarty_tpl->tpl_vars['field']->value=="product_code") {?>
                                        maxlength=<?php echo htmlspecialchars(smarty_modifier_enum("ProductFieldsLength::PRODUCT_CODE"), ENT_QUOTES, 'ISO-8859-1');?>

                                    <?php }?>
                                />
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="B") {?>
                                <input type="text" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'ISO-8859-1');?>
" class="input-medium" size="5" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" />
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="C") {?>
                                <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="N" />
                            <input type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value]=="Y") {?>checked="checked"<?php }?> />
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="D") {?>
                                <textarea class="input-xlarge" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" rows="3" cols="40"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value], ENT_QUOTES, 'ISO-8859-1');?>
</textarea>
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="S") {?>
                                <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
]">
                                    <?php  $_smarty_tpl->tpl_vars['v_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v_name']->_loop = false;
 $_smarty_tpl->tpl_vars['v_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['name']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v_name']->key => $_smarty_tpl->tpl_vars['v_name']->value) {
$_smarty_tpl->tpl_vars['v_name']->_loop = true;
 $_smarty_tpl->tpl_vars['v_id']->value = $_smarty_tpl->tpl_vars['v_name']->key;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['name']->value['skip_lang']) {?>
                                            <?php $_smarty_tpl->tpl_vars["option_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['v_name']->value, null, 0);?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->tpl_vars["option_name"] = new Smarty_variable($_smarty_tpl->__($_smarty_tpl->tpl_vars['v_name']->value), null, 0);?>
                                        <?php }?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value]==$_smarty_tpl->tpl_vars['v_id']->value) {?>selected="selection"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
                                    <?php } ?>
                                </select>
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="T") {?>
                                <div class="correct-picker-but">
                                <?php if ($_smarty_tpl->tpl_vars['field']->value=="timestamp") {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"date_timestamp_holder_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'date_name'=>((string)$_smarty_tpl->tpl_vars['name']->value)."[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."][".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'date_val'=>$_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

                                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="avail_since") {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"date_avail_holder_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'date_name'=>((string)$_smarty_tpl->tpl_vars['name']->value)."[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."][".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'date_val'=>$_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

                                <?php }?>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="L") {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_div'=>true,'data_from'=>$_smarty_tpl->tpl_vars['product']->value['localization'],'data_name'=>"products_data[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."][localization]"), 0);?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="E") {?> 
                                <?php echo $_smarty_tpl->getSubTemplate ("common/select2_categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('select2_tabindex'=>$_smarty_tpl->tpl_vars['tabindex']->value,'select2_multiple'=>true,'select2_name'=>((string)$_smarty_tpl->tpl_vars['name']->value)."[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."][category_ids]",'select2_allow_sorting'=>"true",'select2_category_ids'=>$_smarty_tpl->tpl_vars['product']->value['category_ids'],'select2_main_category'=>$_smarty_tpl->tpl_vars['product']->value['main_category'],'categories_data'=>$_smarty_tpl->tpl_vars['categories_data']->value,'disable_categories'=>true,'select2_select_id'=>"categories_add_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'select2_wrapper_meta'=>"form-inline object-categories-add--fix-width",'select2_width'=>"100%"), 0);?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="W") {?> 
                                <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
]">
                                <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_smarty_tpl->tpl_vars["layout"] = new Smarty_Variable;
 $_from = fn_get_product_details_views($_smarty_tpl->tpl_vars['product_data']->value['product_id']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
 $_smarty_tpl->tpl_vars["layout"]->value = $_smarty_tpl->tpl_vars["item"]->key;
?>
                                    <option <?php if ($_smarty_tpl->tpl_vars['product']->value['details_layout']==$_smarty_tpl->tpl_vars['layout']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
                                <?php } ?>
                                </select>
                            <?php } else { ?> 
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:update_types_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:update_types_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:update_types_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php }?>
                        </td>
                    </tr>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:update_fields_item"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php }?>
                    <?php } ?>
                    </table>
                <?php }?>
                </td>
                <?php } ?>

                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field_names']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars["field"]->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['field']->value!="product_id"&&($_smarty_tpl->tpl_vars['field']->value!="localization"||$_smarty_tpl->tpl_vars['field']->value=="localization"&&$_smarty_tpl->tpl_vars['localizations']->value)) {?>
                <td valign="top" class="pad">
                        <?php if ($_smarty_tpl->tpl_vars['field']->value=="main_pair") {?>
                            <table width="420"><tr><td><?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"product_main",'image_key'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'image_pair'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_object_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'image_object_type'=>"product",'image_type'=>"M",'no_thumbnail'=>true), 0);?>
</td></tr></table>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="tracking") {?>
                            <select    name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
]">
                                <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProductTracking::TRACK_WITH_OPTIONS"), ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value['tracking']==smarty_modifier_enum("ProductTracking::TRACK_WITH_OPTIONS")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("track_with_options");?>
</option>
                                <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProductTracking::TRACK_WITHOUT_OPTIONS"), ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value['tracking']==smarty_modifier_enum("ProductTracking::TRACK_WITHOUT_OPTIONS")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("track_without_options");?>
</option>
                                <option value="<?php echo htmlspecialchars(smarty_modifier_enum("ProductTracking::DO_NOT_TRACK"), ENT_QUOTES, 'ISO-8859-1');?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value['tracking']==smarty_modifier_enum("ProductTracking::DO_NOT_TRACK")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("dont_track");?>
</option>
                            </select>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="zero_price_action") {?>
                            <select name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
]">
                                <option value="R" <?php if ($_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="R") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("zpa_refuse");?>
</option>
                                <option value="P" <?php if ($_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="P") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("zpa_permit");?>
</option>
                                <option value="A" <?php if ($_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="A") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("zpa_ask_price");?>
</option>
                            </select>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="taxes") {?>
                            <input type="hidden" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][tax_ids]" value="" />
                            <?php  $_smarty_tpl->tpl_vars["tax"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tax"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['taxes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tax"]->key => $_smarty_tpl->tpl_vars["tax"]->value) {
$_smarty_tpl->tpl_vars["tax"]->_loop = true;
?>
                            <div class="select-field nowrap">
                                <label class="checkbox" for="products_taxes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'ISO-8859-1');?>
"><input type="checkbox" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][tax_ids][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'ISO-8859-1');?>
]" id="products_taxes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['tax']->value['tax_id'],$_smarty_tpl->tpl_vars['product']->value['tax_ids'])) {?>checked="checked"<?php }?>  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax_id'], ENT_QUOTES, 'ISO-8859-1');?>
" />
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['tax'], ENT_QUOTES, 'ISO-8859-1');?>
</label>
                            </div>
                            <?php } ?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="features") {?>
                            <?php if ($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['product']->value['product_id']]) {?>

                            <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/products_m_update_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_features'=>$_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['product']->value['product_id']],'features_search'=>$_smarty_tpl->tpl_vars['features_search']->value[$_smarty_tpl->tpl_vars['product']->value['product_id']],'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'data_name'=>"products_data[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]"), 0);?>


                            <input type="hidden" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][features_exist]" value="Y" />
                            <?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="timestamp") {?>
                            <div class="correct-picker-but">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"prod_date",'date_name'=>"products_data[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."][".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['product']->value['timestamp'])===null||$tmp==='' ? @constant('TIME') : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="localization") {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_div'=>true,'data_name'=>"products_data[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."][localization]",'data_from'=>$_smarty_tpl->tpl_vars['product']->value['localization']), 0);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="usergroup_ids") {?>
                            <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/select_usergroups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"product_ug_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'name'=>"products_data[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."][".((string)$_smarty_tpl->tpl_vars['field']->value)."]",'usergroups'=>fn_get_usergroups(array("type"=>"C","status"=>array("A","H")),@constant('DESCR_SL')),'usergroup_ids'=>$_smarty_tpl->tpl_vars['product']->value['usergroup_ids'],'input_extra'=>'','list_mode'=>true), 0);?>

                            <?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value=="company_id") {?>
                            <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/products_m_update_company.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <?php } else { ?>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:update_fields_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:update_fields_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:update_fields_inner_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:update_fields_inner_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value[$_smarty_tpl->tpl_vars['field']->value], ENT_QUOTES, 'ISO-8859-1');?>
" class="input-medium" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value, ENT_QUOTES, 'ISO-8859-1');?>
]" />
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:update_fields_inner_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:update_fields_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <?php }?>
                </td>
                <?php }?>
                <?php } ?>
            </tr>
            <?php } ?>
            </table>
            </div>
        </td>
    </tr>
    </table>
</div>

</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[products.m_update]",'but_role'=>"submit-link",'but_target_form'=>"products_m_update_form"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("update_products"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'extra_tools'=>Smarty::$_smarty_vars['capture']['extra_tools'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
