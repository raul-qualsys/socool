<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 18:22:19
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/geo_maps/hooks/order_management/profiles_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6750463255ee2bcab6e08f5-23811073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '187c49c4a44f1ec58044074abe294506487fd226' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/geo_maps/hooks/order_management/profiles_info.post.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6750463255ee2bcab6e08f5-23811073',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee2bcab6e66e6_37026839',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee2bcab6e66e6_37026839')) {function content_5ee2bcab6e66e6_37026839($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('geo_maps.shipping_address_on_map'));
?>
<div class="sidebar-row" id="om_ajax_location_map">
    <h6><?php echo $_smarty_tpl->__("geo_maps.shipping_address_on_map");?>
</h6>
    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_country_descr']||$_smarty_tpl->tpl_vars['user_data']->value['s_city']||$_smarty_tpl->tpl_vars['user_data']->value['s_address']) {?>
        <div class="cm-geo-map-container cm-aom-map-container"
             data-ca-geo-map-language="<?php echo htmlspecialchars(@constant('CART_LANGUAGE'), ENT_QUOTES, 'ISO-8859-1');?>
"
             data-ca-aom-country="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_country_descr'], ENT_QUOTES, 'ISO-8859-1');?>
"
             data-ca-aom-city="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_city'], ENT_QUOTES, 'ISO-8859-1');?>
"
             data-ca-aom-address="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_address'], ENT_QUOTES, 'ISO-8859-1');?>
"
        ></div>
    <?php } else { ?>
        <?php echo $_smarty_tpl->__('no_data');?>

    <?php }?>
<!--om_ajax_location_map--></div>
<?php }} ?>
