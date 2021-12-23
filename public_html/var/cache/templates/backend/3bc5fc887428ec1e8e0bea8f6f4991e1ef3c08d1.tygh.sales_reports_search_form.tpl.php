<?php /* Smarty version Smarty-3.1.21, created on 2020-06-25 13:48:34
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/views/sales_reports/components/sales_reports_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13809113255ef4f182093975-70040088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bc5fc887428ec1e8e0bea8f6f4991e1ef3c08d1' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/views/sales_reports/components/sales_reports_search_form.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13809113255ef4f182093975-70040088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'report' => 0,
    'period' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ef4f18209cb57_17919615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef4f18209cb57_17919615')) {function content_5ef4f18209cb57_17919615($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search'));
?>
<div class="sidebar-row">
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="report_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['report']->value['report_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
<h6><?php echo $_smarty_tpl->__("search");?>
</h6>
    <?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>
        <input type="hidden" name="report_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['report']->value['report_id'], ENT_QUOTES, 'ISO-8859-1');?>
">
        <input type="hidden" name="selected_section" value="">
        <?php echo $_smarty_tpl->getSubTemplate ("common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('period'=>$_smarty_tpl->tpl_vars['period']->value,'display'=>"form"), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_adv_link'=>true,'simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'not_saved'=>true,'dispatch'=>"sales_reports.set_report_view"), 0);?>

</form>
</div><?php }} ?>
