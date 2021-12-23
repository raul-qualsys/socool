<?php /* Smarty version Smarty-3.1.21, created on 2020-09-17 13:13:01
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/sd_facebook_pixel/hooks/checkout/order_confirmation.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15917768545f63a72d2c6b88-08236148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2930300ab519d60ef2a2a7cec05a525b23f8a5b' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/sd_facebook_pixel/hooks/checkout/order_confirmation.pre.tpl',
      1 => 1578555956,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15917768545f63a72d2c6b88-08236148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'facebook_pixel_orders' => 0,
    'facebook_pixel_ids' => 0,
    'addons' => 0,
    'company_id' => 0,
    'pixel_id' => 0,
    'pixel_order' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f63a72d2e1569_36763006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f63a72d2e1569_36763006')) {function content_5f63a72d2e1569_36763006($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['facebook_pixel_orders']->value&&$_smarty_tpl->tpl_vars['facebook_pixel_ids']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['sd_facebook_pixel']['purchase_facebook_pixel']=="Y") {?>
        <?php echo '<script'; ?>
>
            (function(_, $) {
                <?php  $_smarty_tpl->tpl_vars['pixel_order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pixel_order']->_loop = false;
 $_smarty_tpl->tpl_vars['company_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['facebook_pixel_orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pixel_order']->key => $_smarty_tpl->tpl_vars['pixel_order']->value) {
$_smarty_tpl->tpl_vars['pixel_order']->_loop = true;
 $_smarty_tpl->tpl_vars['company_id']->value = $_smarty_tpl->tpl_vars['pixel_order']->key;
?>
                    <?php $_smarty_tpl->tpl_vars['pixel_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['facebook_pixel_ids']->value[$_smarty_tpl->tpl_vars['company_id']->value], null, 0);?>

                    fbq('trackSingle', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pixel_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
', 'Purchase', {
                        value: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pixel_order']->value['value'], ENT_QUOTES, 'ISO-8859-1');?>
',
                        currency: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pixel_order']->value['currency'], ENT_QUOTES, 'ISO-8859-1');?>
',
                        num_items: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pixel_order']->value['num_items'], ENT_QUOTES, 'ISO-8859-1');?>
',
                        contents: <?php echo json_encode($_smarty_tpl->tpl_vars['pixel_order']->value['contents']);?>
,
                        content_type: 'product'
                    });
                <?php } ?>
            }(Tygh, Tygh.$));
        <?php echo '</script'; ?>
>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['addons']->value['sd_facebook_pixel']['add_payment_info_facebook_pixel']=="Y") {?>
        <?php echo '<script'; ?>
>
            (function(_, $) {
                fbq('track', 'AddPaymentInfo');
            }(Tygh, Tygh.$));
        <?php echo '</script'; ?>
>
    <?php }?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/sd_facebook_pixel/hooks/checkout/order_confirmation.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/sd_facebook_pixel/hooks/checkout/order_confirmation.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['facebook_pixel_orders']->value&&$_smarty_tpl->tpl_vars['facebook_pixel_ids']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['sd_facebook_pixel']['purchase_facebook_pixel']=="Y") {?>
        <?php echo '<script'; ?>
>
            (function(_, $) {
                <?php  $_smarty_tpl->tpl_vars['pixel_order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pixel_order']->_loop = false;
 $_smarty_tpl->tpl_vars['company_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['facebook_pixel_orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pixel_order']->key => $_smarty_tpl->tpl_vars['pixel_order']->value) {
$_smarty_tpl->tpl_vars['pixel_order']->_loop = true;
 $_smarty_tpl->tpl_vars['company_id']->value = $_smarty_tpl->tpl_vars['pixel_order']->key;
?>
                    <?php $_smarty_tpl->tpl_vars['pixel_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['facebook_pixel_ids']->value[$_smarty_tpl->tpl_vars['company_id']->value], null, 0);?>

                    fbq('trackSingle', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pixel_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
', 'Purchase', {
                        value: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pixel_order']->value['value'], ENT_QUOTES, 'ISO-8859-1');?>
',
                        currency: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pixel_order']->value['currency'], ENT_QUOTES, 'ISO-8859-1');?>
',
                        num_items: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pixel_order']->value['num_items'], ENT_QUOTES, 'ISO-8859-1');?>
',
                        contents: <?php echo json_encode($_smarty_tpl->tpl_vars['pixel_order']->value['contents']);?>
,
                        content_type: 'product'
                    });
                <?php } ?>
            }(Tygh, Tygh.$));
        <?php echo '</script'; ?>
>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['addons']->value['sd_facebook_pixel']['add_payment_info_facebook_pixel']=="Y") {?>
        <?php echo '<script'; ?>
>
            (function(_, $) {
                fbq('track', 'AddPaymentInfo');
            }(Tygh, Tygh.$));
        <?php echo '</script'; ?>
>
    <?php }?>
<?php }?>
<?php }?><?php }} ?>
