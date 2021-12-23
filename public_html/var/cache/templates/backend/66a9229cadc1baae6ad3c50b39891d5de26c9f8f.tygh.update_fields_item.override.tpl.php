<?php /* Smarty version Smarty-3.1.21, created on 2020-06-22 17:56:07
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/product_variations/hooks/products/update_fields_item.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11390223725ef13707a67597-82513669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66a9229cadc1baae6ad3c50b39891d5de26c9f8f' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/product_variations/hooks/products/update_fields_item.override.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11390223725ef13707a67597-82513669',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'field' => 0,
    'v' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ef13707a735f6_96623557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef13707a735f6_96623557')) {function content_5ef13707a735f6_96623557($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product']->value['variation_features']&&$_smarty_tpl->tpl_vars['field']->value==="product") {?>
    <tr>
        <td valign="top" class="nowrap pad strong"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value[$_smarty_tpl->tpl_vars['field']->value], ENT_QUOTES, 'ISO-8859-1');?>
:&nbsp;</td>
        <td valign="top" class="pad nowrap">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['parent_product_id']) {?>
                <div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
                <input
                    type="hidden"
                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'ISO-8859-1');?>
"
                    name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][product]"
                />
            <?php } else { ?>
                <input 
                    type="text"
                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'ISO-8859-1');?>
"
                    class="input-medium input--no-margin"
                    name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'ISO-8859-1');?>
][product]"
                />
            <?php }?>
            <div>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['variation_features']) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variation_features'=>$_smarty_tpl->tpl_vars['product']->value['variation_features'],'features_inline'=>true,'features_mini'=>true,'features_secondary'=>true), 0);?>

                <?php }?>
            </div>
        </td>
    </tr>
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['product']->value['type']->isFieldAvailable($_smarty_tpl->tpl_vars['field']->value)) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }?>
<?php }} ?>
