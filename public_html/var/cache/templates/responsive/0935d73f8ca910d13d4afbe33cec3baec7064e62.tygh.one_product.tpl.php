<?php /* Smarty version Smarty-3.1.21, created on 2020-06-12 17:25:52
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/views/products/components/one_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:581636705ee400f035b428-80558706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0935d73f8ca910d13d4afbe33cec3baec7064e62' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/views/products/components/one_product.tpl',
      1 => 1565855938,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '581636705ee400f035b428-80558706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'obj_prefix' => 0,
    'product' => 0,
    'obj_id' => 0,
    'obj_id_prefix' => 0,
    'settings' => 0,
    'hide_info' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee400f03a1846_44491371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee400f03a1846_44491371')) {function content_5ee400f03a1846_44491371($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/modifier.truncate.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('more_link','verify','more_link','verify'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
<?php $_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['result_type']=="full") {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:one_product")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:one_product"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="product-container clearfix">
    <div class="product-image">
        <span class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
 image-reload" id="list_image_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
            <input type="hidden" name="image[list_image_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][data]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'], ENT_QUOTES, 'ISO-8859-1');?>
,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'], ENT_QUOTES, 'ISO-8859-1');?>
,product" />
            
            <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair']), 0);?>
</a>
        <!--list_image_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></span>
    </div>
    <div class="product-description">
        <?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/simple_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_name'=>true,'show_sku'=>true,'show_features'=>true,'show_descr'=>true,'show_old_price'=>true,'show_price'=>true,'show_list_discount'=>true,'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true,'show_product_amount'=>true,'show_product_options'=>true,'show_qty'=>true,'min_qty'=>true,'show_edp'=>true,'show_add_to_cart'=>true,'show_list_buttons'=>true,'but_role'=>"action"), 0);?>

    </div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:one_product"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } else { ?>
<div class="ty-search-result">
    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_additional_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_additional_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php if (!$_smarty_tpl->tpl_vars['hide_info']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['short_description']||$_smarty_tpl->tpl_vars['product']->value['full_description']) {?>
    <p>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['short_description']) {?>
        <?php echo $_smarty_tpl->tpl_vars['product']->value['short_description'];?>

    <?php } else { ?>
        <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['full_description']),280,"...");
if (strlen($_smarty_tpl->tpl_vars['product']->value['full_description'])>280) {?><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("more_link");?>
</a><?php }?>
    <?php }?>
    </p>
    <?php }?>

    <?php } elseif ($_smarty_tpl->tpl_vars['hide_info']->value=="age-verify") {?>
        <div class="box ty-mt-s">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['age_warning_message'], ENT_QUOTES, 'ISO-8859-1');?>

            <div class="buttons-container">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("verify"),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_role'=>"text"), 0);?>

            </div>
        </div>
    <?php }?>
</div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/one_product.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/one_product.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
<?php $_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['result_type']=="full") {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:one_product")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:one_product"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="product-container clearfix">
    <div class="product-image">
        <span class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
 image-reload" id="list_image_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
            <input type="hidden" name="image[list_image_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
][data]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id_prefix']->value, ENT_QUOTES, 'ISO-8859-1');?>
,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'], ENT_QUOTES, 'ISO-8859-1');?>
,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'], ENT_QUOTES, 'ISO-8859-1');?>
,product" />
            
            <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'],'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair']), 0);?>
</a>
        <!--list_image_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
--></span>
    </div>
    <div class="product-description">
        <?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/simple_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_name'=>true,'show_sku'=>true,'show_features'=>true,'show_descr'=>true,'show_old_price'=>true,'show_price'=>true,'show_list_discount'=>true,'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true,'show_product_amount'=>true,'show_product_options'=>true,'show_qty'=>true,'min_qty'=>true,'show_edp'=>true,'show_add_to_cart'=>true,'show_list_buttons'=>true,'but_role'=>"action"), 0);?>

    </div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:one_product"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } else { ?>
<div class="ty-search-result">
    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_additional_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_additional_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php if (!$_smarty_tpl->tpl_vars['hide_info']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['short_description']||$_smarty_tpl->tpl_vars['product']->value['full_description']) {?>
    <p>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['short_description']) {?>
        <?php echo $_smarty_tpl->tpl_vars['product']->value['short_description'];?>

    <?php } else { ?>
        <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['full_description']),280,"...");
if (strlen($_smarty_tpl->tpl_vars['product']->value['full_description'])>280) {?><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("more_link");?>
</a><?php }?>
    <?php }?>
    </p>
    <?php }?>

    <?php } elseif ($_smarty_tpl->tpl_vars['hide_info']->value=="age-verify") {?>
        <div class="box ty-mt-s">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['age_warning_message'], ENT_QUOTES, 'ISO-8859-1');?>

            <div class="buttons-container">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("verify"),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_role'=>"text"), 0);?>

            </div>
        </div>
    <?php }?>
</div>
<?php }
}?><?php }} ?>
