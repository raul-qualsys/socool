<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 12:47:49
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/sd_facebook_pixel/hooks/buttons/add_to_cart.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8990101265ee26e453899a4-20079442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfa7ed00e20fe263d57c092231869b10a23d4661' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/sd_facebook_pixel/hooks/buttons/add_to_cart.post.tpl',
      1 => 1578555956,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8990101265ee26e453899a4-20079442',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'facebook_pixel_ids' => 0,
    'addons' => 0,
    'product' => 0,
    'obj_prefix' => 0,
    'primary_currency' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee26e453a20e1_72796538',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee26e453a20e1_72796538')) {function content_5ee26e453a20e1_72796538($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['facebook_pixel_ids']->value&&$_smarty_tpl->tpl_vars['addons']->value['sd_facebook_pixel']['add_to_cart_facebook_pixel']=="Y") {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        (function(_, $) {
            $('#button_cart_ajax<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
, #button_cart_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['product']->value['variation_product_id']) {?>_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['variation_product_id'], ENT_QUOTES, 'ISO-8859-1');
}?>, #button_cart_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
').unbind("click").click(function() {
                var milliseconds = new Date().getTime();
                window._fbq.push(['track', 'AddToCart', {
                    <?php if ($_smarty_tpl->tpl_vars['addons']->value['sd_facebook_pixel']['account_facebook_pixel']=='business') {?>
                    content_type: 'product',
                    content_ids: ['<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
'],
                    value: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'ISO-8859-1');?>
',
                    currency: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['primary_currency']->value, ENT_QUOTES, 'ISO-8859-1');?>
',
                    <?php }?>
                    timestamp: milliseconds
                }]);
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
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/sd_facebook_pixel/hooks/buttons/add_to_cart.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/sd_facebook_pixel/hooks/buttons/add_to_cart.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['facebook_pixel_ids']->value&&$_smarty_tpl->tpl_vars['addons']->value['sd_facebook_pixel']['add_to_cart_facebook_pixel']=="Y") {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        (function(_, $) {
            $('#button_cart_ajax<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
, #button_cart_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');
if ($_smarty_tpl->tpl_vars['product']->value['variation_product_id']) {?>_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['variation_product_id'], ENT_QUOTES, 'ISO-8859-1');
}?>, #button_cart_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'ISO-8859-1');
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
').unbind("click").click(function() {
                var milliseconds = new Date().getTime();
                window._fbq.push(['track', 'AddToCart', {
                    <?php if ($_smarty_tpl->tpl_vars['addons']->value['sd_facebook_pixel']['account_facebook_pixel']=='business') {?>
                    content_type: 'product',
                    content_ids: ['<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
'],
                    value: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'ISO-8859-1');?>
',
                    currency: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['primary_currency']->value, ENT_QUOTES, 'ISO-8859-1');?>
',
                    <?php }?>
                    timestamp: milliseconds
                }]);
            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
>
<?php }?>
<?php }?><?php }} ?>
