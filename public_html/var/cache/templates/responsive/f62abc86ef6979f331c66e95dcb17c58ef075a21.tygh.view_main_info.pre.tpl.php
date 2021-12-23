<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 12:47:49
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/sd_facebook_pixel/hooks/products/view_main_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67893025ee26e45281e12-28049723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f62abc86ef6979f331c66e95dcb17c58ef075a21' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/sd_facebook_pixel/hooks/products/view_main_info.pre.tpl',
      1 => 1578555956,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '67893025ee26e45281e12-28049723',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'facebook_pixel_ids' => 0,
    'addons' => 0,
    'secondary_currency' => 0,
    'currencies' => 0,
    'categories_pixel' => 0,
    'category' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee26e452bc061_33784952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee26e452bc061_33784952')) {function content_5ee26e452bc061_33784952($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/html/socool.mx/public_html/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['category'] = new Smarty_variable(fn_get_category_name($_smarty_tpl->tpl_vars['product']->value['main_category']), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['facebook_pixel_ids']->value&&$_smarty_tpl->tpl_vars['addons']->value['sd_facebook_pixel']['view_content_facebook_pixel']=="Y") {?>
    <?php echo '<script'; ?>
>
        (function(_, $) {
            var milliseconds = new Date().getTime();
            fbq('track', 'ViewContent', {
                <?php if ($_smarty_tpl->tpl_vars['addons']->value['sd_facebook_pixel']['account_facebook_pixel']=='business') {?>
                content_type: 'product',
                content_ids: ['<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
'],
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['price']) {?>
                value: <?php ob_start();
if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]) {?><?php echo " / ";?><?php echo (string)$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['coefficient'];?><?php echo " ";?><?php }
$_tmp1=ob_get_clean();?><?php echo smarty_function_math(array('equation'=>((string)$_smarty_tpl->tpl_vars['product']->value['price']).$_tmp1,'format'=>"%.".((string)$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['decimals'])."f"),$_smarty_tpl);?>
,
                <?php }?>
                content_category: '<?php echo strtr($_smarty_tpl->tpl_vars['categories_pixel']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                currency: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['secondary_currency']->value, ENT_QUOTES, 'ISO-8859-1');?>
',
                product_name: '<?php echo strtr($_smarty_tpl->tpl_vars['product']->value['product'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                date_published: '<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['product']->value['updated_timestamp'],"%Y-%m-%d"), ENT_QUOTES, 'ISO-8859-1');?>
',
                url: '<?php echo strtr(fn_url("products.view&product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                timestamp: milliseconds
            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['facebook_pixel_ids']->value&&$_smarty_tpl->tpl_vars['addons']->value['sd_facebook_pixel']['lead_facebook_pixel']=="Y") {?>
    <?php echo '<script'; ?>
>
        (function(_, $) {
            var milliseconds = new Date().getTime();
            fbq('track', 'Lead', {
                content_name: '<?php echo strtr($_smarty_tpl->tpl_vars['product']->value['product'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                content_category: '<?php echo strtr($_smarty_tpl->tpl_vars['category']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                <?php if ($_smarty_tpl->tpl_vars['product']->value['price']) {?>
                value: <?php ob_start();
if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]) {?><?php echo " / ";?><?php echo (string)$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['coefficient'];?><?php echo " ";?><?php }
$_tmp2=ob_get_clean();?><?php echo smarty_function_math(array('equation'=>((string)$_smarty_tpl->tpl_vars['product']->value['price']).$_tmp2,'format'=>"%.".((string)$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['decimals'])."f"),$_smarty_tpl);?>
,
                <?php }?>
                currency: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['secondary_currency']->value, ENT_QUOTES, 'ISO-8859-1');?>
',
                timestamp: milliseconds
            });
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
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/sd_facebook_pixel/hooks/products/view_main_info.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/sd_facebook_pixel/hooks/products/view_main_info.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['category'] = new Smarty_variable(fn_get_category_name($_smarty_tpl->tpl_vars['product']->value['main_category']), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['facebook_pixel_ids']->value&&$_smarty_tpl->tpl_vars['addons']->value['sd_facebook_pixel']['view_content_facebook_pixel']=="Y") {?>
    <?php echo '<script'; ?>
>
        (function(_, $) {
            var milliseconds = new Date().getTime();
            fbq('track', 'ViewContent', {
                <?php if ($_smarty_tpl->tpl_vars['addons']->value['sd_facebook_pixel']['account_facebook_pixel']=='business') {?>
                content_type: 'product',
                content_ids: ['<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
'],
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['price']) {?>
                value: <?php ob_start();
if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]) {?><?php echo " / ";?><?php echo (string)$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['coefficient'];?><?php echo " ";?><?php }
$_tmp3=ob_get_clean();?><?php echo smarty_function_math(array('equation'=>((string)$_smarty_tpl->tpl_vars['product']->value['price']).$_tmp3,'format'=>"%.".((string)$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['decimals'])."f"),$_smarty_tpl);?>
,
                <?php }?>
                content_category: '<?php echo strtr($_smarty_tpl->tpl_vars['categories_pixel']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                currency: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['secondary_currency']->value, ENT_QUOTES, 'ISO-8859-1');?>
',
                product_name: '<?php echo strtr($_smarty_tpl->tpl_vars['product']->value['product'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                date_published: '<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['product']->value['updated_timestamp'],"%Y-%m-%d"), ENT_QUOTES, 'ISO-8859-1');?>
',
                url: '<?php echo strtr(fn_url("products.view&product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                timestamp: milliseconds
            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['facebook_pixel_ids']->value&&$_smarty_tpl->tpl_vars['addons']->value['sd_facebook_pixel']['lead_facebook_pixel']=="Y") {?>
    <?php echo '<script'; ?>
>
        (function(_, $) {
            var milliseconds = new Date().getTime();
            fbq('track', 'Lead', {
                content_name: '<?php echo strtr($_smarty_tpl->tpl_vars['product']->value['product'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                content_category: '<?php echo strtr($_smarty_tpl->tpl_vars['category']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                <?php if ($_smarty_tpl->tpl_vars['product']->value['price']) {?>
                value: <?php ob_start();
if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]) {?><?php echo " / ";?><?php echo (string)$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['coefficient'];?><?php echo " ";?><?php }
$_tmp4=ob_get_clean();?><?php echo smarty_function_math(array('equation'=>((string)$_smarty_tpl->tpl_vars['product']->value['price']).$_tmp4,'format'=>"%.".((string)$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['decimals'])."f"),$_smarty_tpl);?>
,
                <?php }?>
                currency: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['secondary_currency']->value, ENT_QUOTES, 'ISO-8859-1');?>
',
                timestamp: milliseconds
            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php }?>
<?php }?><?php }} ?>
