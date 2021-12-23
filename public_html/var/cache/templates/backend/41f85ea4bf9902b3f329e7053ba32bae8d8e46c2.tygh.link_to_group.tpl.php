<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 12:00:02
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/product_variations/views/product_variations/components/link_to_group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3629971575ee263121fbb53-55231374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41f85ea4bf9902b3f329e7053ba32bae8d8e46c2' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/product_variations/views/product_variations/components/link_to_group.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3629971575ee263121fbb53-55231374',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_id' => 0,
    'group_codes' => 0,
    'group_id' => 0,
    'group_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee26312201ff7_79502048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee26312201ff7_79502048')) {function content_5ee26312201ff7_79502048($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.group_code.link','none','none','product_variations.group_code.link.description'));
?>
<div class="object-selector shift-left object-selector--mobile-full-width input-xlarge">
    <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="product_id">
    <select id="product_variations_code"
            class="cm-object-selector cm-object-variations-code-select object-selector--mobile-full-width product-variations__toolbar-code-link"
            name="group_id"
            data-ca-placeholder="<?php echo $_smarty_tpl->__("product_variations.group_code.link");?>
">
        <option value="">-<?php echo $_smarty_tpl->__("none");?>
-</option>
        <?php  $_smarty_tpl->tpl_vars['group_code'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_code']->_loop = false;
 $_smarty_tpl->tpl_vars['group_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group_codes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_code']->key => $_smarty_tpl->tpl_vars['group_code']->value) {
$_smarty_tpl->tpl_vars['group_code']->_loop = true;
 $_smarty_tpl->tpl_vars['group_id']->value = $_smarty_tpl->tpl_vars['group_code']->key;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_code']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
        <?php } ?>
        <option value="">-<?php echo $_smarty_tpl->__("none");?>
-</option>
    </select>
</div>
<div class="product-variations__toolbar-code-link-description">
    <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("product_variations.group_code.link.description"),'params'=>"product-variations__toolbar-code-link-tooltip"), 0);?>

</div><?php }} ?>
