<?php /* Smarty version Smarty-3.1.21, created on 2020-09-17 13:17:03
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/views/orders/modify_invoice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:340808745f63a81f287d01-82970543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f6eb4263084f4e439bccfd6b79aefd056f9fff8' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/views/orders/modify_invoice.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '340808745f63a81f287d01-82970543',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'company_data' => 0,
    'invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f63a81f29efd2_88423275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f63a81f29efd2_88423275')) {function content_5f63a81f29efd2_88423275($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('subject','email_order_invoice_subject','email','invoice','email_template.params.attach_order_document','send'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post" name="edit_order_invoice_form" class="form-horizontal form-edit">
        <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'ISO-8859-1');?>
" name="order_id" />
        <div class="control-group">
            <label for="elm_subject" class="cm-required control-label"><?php echo $_smarty_tpl->__("subject");?>
:</label>
            <div class="controls">
                <input id="elm_subject" type="text" name="invoice[subject]" value="<?php echo $_smarty_tpl->__("email_order_invoice_subject",array("[company_name]"=>$_smarty_tpl->tpl_vars['company_data']->value['company_name'],"[order_id]"=>$_smarty_tpl->tpl_vars['order_info']->value['order_id']));?>
" class="span9">
            </div>
        </div>

        <div class="control-group">
            <label for="elm_email" class="cm-required cm-email control-label"><?php echo $_smarty_tpl->__("email");?>
:</label>
            <div class="controls">
                <input id="elm_email" type="text" name="invoice[email]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['email'], ENT_QUOTES, 'ISO-8859-1');?>
" class="span9">
            </div>
        </div>

        <div class="control-group">
            <label for="elm_invoice" class="cm-required control-label"><?php echo $_smarty_tpl->__("invoice");?>
:</label>
            <div class="controls">
                <textarea id="elm_invoice" name="invoice[body]" cols="55" rows="14" class="cm-wysiwyg input-textarea-long"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value, ENT_QUOTES, 'ISO-8859-1');?>
</textarea>
            </div>
        </div>

        <div class="control-group">
            <label for="elm_attach_invoice" class="control-label"><?php echo $_smarty_tpl->__("email_template.params.attach_order_document");?>
:</label>
            <div class="controls">
                <input type="hidden" name="invoice[attach]" value="N" />
                <input type="checkbox" id="elm_attach_invoice" name="invoice[attach]" value="Y" />
            </div>
        </div>
    </form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("send"),'but_name'=>"dispatch[orders.modify_invoice]",'but_target_form'=>"edit_order_invoice_form",'but_role'=>"submit-link"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title_start'=>$_smarty_tpl->__('editing_order_invoice_responsive'),'title_end'=>"#".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
