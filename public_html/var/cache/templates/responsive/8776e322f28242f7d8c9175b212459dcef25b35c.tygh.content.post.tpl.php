<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 01:37:01
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/sd_facebook_pixel/hooks/index/content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14373555025ee1d10dd81fc0-03406379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8776e322f28242f7d8c9175b212459dcef25b35c' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/sd_facebook_pixel/hooks/index/content.post.tpl',
      1 => 1578555956,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14373555025ee1d10dd81fc0-03406379',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'facebook_pixel_ids' => 0,
    'auth' => 0,
    'user_data' => 0,
    'facebook_checkout' => 0,
    'company_id' => 0,
    'pixel_id' => 0,
    'order' => 0,
    'secondary_currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee1d10dda8b64_18610389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee1d10dda8b64_18610389')) {function content_5ee1d10dda8b64_18610389($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['sd_facebook_pixel']['complete_registration_facebook_pixel']=="Y") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/sd_facebook_pixel/func.js"),$_smarty_tpl);?>

<?php }?>


<?php if ($_smarty_tpl->tpl_vars['facebook_pixel_ids']->value&&$_smarty_tpl->tpl_vars['runtime']->value['controller']=="checkout") {?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=='checkout'&&$_smarty_tpl->tpl_vars['addons']->value['sd_facebook_pixel']['initiate_checkout_facebook_pixel']=="Y") {?>
        <?php echo '<script'; ?>
>
            (function(_, $) {
                var is_init_checkout = false,
                    user_id = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['auth']->value['user_id'], ENT_QUOTES, 'ISO-8859-1');?>
',
                    user_data = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['firstname'], ENT_QUOTES, 'ISO-8859-1');?>
';

                var Initiate = function() {
                    <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_smarty_tpl->tpl_vars['company_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['facebook_checkout']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
 $_smarty_tpl->tpl_vars['company_id']->value = $_smarty_tpl->tpl_vars['order']->key;
?>
                        <?php $_smarty_tpl->tpl_vars['pixel_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['facebook_pixel_ids']->value[$_smarty_tpl->tpl_vars['company_id']->value], null, 0);?>

                        fbq('trackSingle', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pixel_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
', 'InitiateCheckout', {
                            value: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['value'], ENT_QUOTES, 'ISO-8859-1');?>
',
                            currency: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['secondary_currency']->value, ENT_QUOTES, 'ISO-8859-1');?>
',
                            num_items: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['num_items'], ENT_QUOTES, 'ISO-8859-1');?>
',
                            contents: <?php echo json_encode($_smarty_tpl->tpl_vars['order']->value['contents']);?>
,
                            content_type: 'product'
                        });
                    <?php } ?>
                }

                if (!is_init_checkout) {
                    <?php if ($_smarty_tpl->tpl_vars['addons']->value['sd_facebook_pixel']['track_initiate_checkout']=="only_after_auth") {?>
                        if (user_id != 0 || user_data) {
                            Initiate();
                            is_init_checkout == true;
                        }
                    <?php } elseif ($_smarty_tpl->tpl_vars['addons']->value['sd_facebook_pixel']['track_initiate_checkout']=="all_stages") {?>
                        Initiate();
                        is_init_checkout == true;
                    <?php }?>
                }
            }(Tygh, Tygh.$));
        <?php echo '</script'; ?>
>
    <?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/sd_facebook_pixel/hooks/index/content.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/sd_facebook_pixel/hooks/index/content.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['sd_facebook_pixel']['complete_registration_facebook_pixel']=="Y") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/sd_facebook_pixel/func.js"),$_smarty_tpl);?>

<?php }?>


<?php if ($_smarty_tpl->tpl_vars['facebook_pixel_ids']->value&&$_smarty_tpl->tpl_vars['runtime']->value['controller']=="checkout") {?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=='checkout'&&$_smarty_tpl->tpl_vars['addons']->value['sd_facebook_pixel']['initiate_checkout_facebook_pixel']=="Y") {?>
        <?php echo '<script'; ?>
>
            (function(_, $) {
                var is_init_checkout = false,
                    user_id = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['auth']->value['user_id'], ENT_QUOTES, 'ISO-8859-1');?>
',
                    user_data = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['firstname'], ENT_QUOTES, 'ISO-8859-1');?>
';

                var Initiate = function() {
                    <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_smarty_tpl->tpl_vars['company_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['facebook_checkout']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
 $_smarty_tpl->tpl_vars['company_id']->value = $_smarty_tpl->tpl_vars['order']->key;
?>
                        <?php $_smarty_tpl->tpl_vars['pixel_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['facebook_pixel_ids']->value[$_smarty_tpl->tpl_vars['company_id']->value], null, 0);?>

                        fbq('trackSingle', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pixel_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
', 'InitiateCheckout', {
                            value: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['value'], ENT_QUOTES, 'ISO-8859-1');?>
',
                            currency: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['secondary_currency']->value, ENT_QUOTES, 'ISO-8859-1');?>
',
                            num_items: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['num_items'], ENT_QUOTES, 'ISO-8859-1');?>
',
                            contents: <?php echo json_encode($_smarty_tpl->tpl_vars['order']->value['contents']);?>
,
                            content_type: 'product'
                        });
                    <?php } ?>
                }

                if (!is_init_checkout) {
                    <?php if ($_smarty_tpl->tpl_vars['addons']->value['sd_facebook_pixel']['track_initiate_checkout']=="only_after_auth") {?>
                        if (user_id != 0 || user_data) {
                            Initiate();
                            is_init_checkout == true;
                        }
                    <?php } elseif ($_smarty_tpl->tpl_vars['addons']->value['sd_facebook_pixel']['track_initiate_checkout']=="all_stages") {?>
                        Initiate();
                        is_init_checkout == true;
                    <?php }?>
                }
            }(Tygh, Tygh.$));
        <?php echo '</script'; ?>
>
    <?php }?>
<?php }
}?><?php }} ?>
