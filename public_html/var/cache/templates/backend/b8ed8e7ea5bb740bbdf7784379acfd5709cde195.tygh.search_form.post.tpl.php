<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 08:42:47
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/bestsellers/hooks/products/search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:722305615ee234d7f0adb5-16218757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8ed8e7ea5bb740bbdf7784379acfd5709cde195' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/bestsellers/hooks/products/search_form.post.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '722305615ee234d7f0adb5-16218757',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee234d7f0fa59_36185668',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee234d7f0fa59_36185668')) {function content_5ee234d7f0fa59_36185668($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sales_amount'));
?>
<div class="control-group">
    <label class="control-label" for="sales_amount_from"><?php echo $_smarty_tpl->__("sales_amount");?>
</label>
    <div class="controls">
        <input type="text" name="sales_amount_from" id="sales_amount_from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sales_amount_from'], ENT_QUOTES, 'ISO-8859-1');?>
" onfocus="this.select();" class="input-mini" /> - <input type="text" name="sales_amount_to" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sales_amount_to'], ENT_QUOTES, 'ISO-8859-1');?>
" onfocus="this.select();" class="input-mini" />
    </div>
</div><?php }} ?>
