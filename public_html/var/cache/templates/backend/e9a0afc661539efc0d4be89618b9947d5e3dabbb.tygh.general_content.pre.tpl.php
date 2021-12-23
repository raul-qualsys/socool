<?php /* Smarty version Smarty-3.1.21, created on 2020-09-17 13:30:02
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/geo_maps/hooks/profiles/general_content.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7962382345f63ab2a470e01-80725782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9a0afc661539efc0d4be89618b9947d5e3dabbb' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/geo_maps/hooks/profiles/general_content.pre.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7962382345f63ab2a470e01-80725782',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f63ab2a47a031_22597263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f63ab2a47a031_22597263')) {function content_5f63ab2a47a031_22597263($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('geo_maps.shipping_address_on_map'));
?>
<?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_id']&&$_smarty_tpl->tpl_vars['user_data']->value['user_type']=='C') {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
        <div class="sidebar-row">
            <h6><?php echo $_smarty_tpl->__("geo_maps.shipping_address_on_map");?>
</h6>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_country_descr']||$_smarty_tpl->tpl_vars['user_data']->value['s_city']||$_smarty_tpl->tpl_vars['user_data']->value['s_address']) {?>
                <div class="cm-geo-map-container cm-aom-map-container"
                     data-ca-geo-map-controls-enable-zoom="true"
                     data-ca-geo-map-controls-enable-fullscreen="true"
                     data-ca-geo-map-controls-enable-layers="true"
                     data-ca-geo-map-controls-enable-ruler="true"
                     data-ca-geo-map-behaviors-enable-drag="true"
                     data-ca-geo-map-behaviors-enable-dbl-click-zoom="true"
                     data-ca-geo-map-behaviors-enable-multi-touch="true"
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
        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>
<?php }} ?>
