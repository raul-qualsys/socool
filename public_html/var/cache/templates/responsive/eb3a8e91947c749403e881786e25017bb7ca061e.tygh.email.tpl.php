<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 12:51:11
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/social_buttons/providers/email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18854692535ee26f0f3b9987-48297003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb3a8e91947c749403e881786e25017bb7ca061e' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/social_buttons/providers/email.tpl',
      1 => 1565883483,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18854692535ee26f0f3b9987-48297003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'provider_settings' => 0,
    'product_tab_id' => 0,
    'config' => 0,
    'send_data' => 0,
    'auth' => 0,
    'user_info' => 0,
    'product' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee26f0f3f5ee2_94451144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee26f0f3f5ee2_94451144')) {function content_5ee26f0f3f5ee2_94451144($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('name_of_friend','email_of_friend','your_name','your_email','your_message','send','sb_share','share_via_email','name_of_friend','email_of_friend','your_name','your_email','your_message','send','sb_share','share_via_email'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['email_enable']=="Y"&&$_smarty_tpl->tpl_vars['provider_settings']->value['email']['data']) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array("popup_content", null, null); ob_start(); ?>
<form name="email_share_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post">
<input type="hidden" name="selected_section" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_tab_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'ISO-8859-1');?>
" />

<div class="ty-control-group">
    <label class="ty-control-group__title" for="send_name"><?php echo $_smarty_tpl->__("name_of_friend");?>
</label>
    <input id="send_name" class="ty-input-text" size="50" type="text" name="send_data[to_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['send_data']->value['to_name'], ENT_QUOTES, 'ISO-8859-1');?>
" />
</div>

<div class="ty-control-group">
    <label for="send_email" class="ty-control-group__title cm-required cm-email"><?php echo $_smarty_tpl->__("email_of_friend");?>
</label>
    <input id="send_email" class="ty-input-text" size="50" type="text" name="send_data[to_email]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['send_data']->value['to_email'], ENT_QUOTES, 'ISO-8859-1');?>
" />
</div>

<div class="ty-control-group">
    <label class="ty-control-group__title" for="send_yourname"><?php echo $_smarty_tpl->__("your_name");?>
</label>
    <input id="send_yourname" size="50" class="ty-input-text" type="text" name="send_data[from_name]" value="<?php if ($_smarty_tpl->tpl_vars['send_data']->value['from_name']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['send_data']->value['from_name'], ENT_QUOTES, 'ISO-8859-1');
} elseif ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['firstname'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['lastname'], ENT_QUOTES, 'ISO-8859-1');
}?>" />
</div>

<div class="ty-control-group">
    <label for="send_youremail" class="ty-control-group__title cm-email"><?php echo $_smarty_tpl->__("your_email");?>
</label>
    <input id="send_youremail" class="ty-input-text" size="50" type="text" name="send_data[from_email]" value="<?php if ($_smarty_tpl->tpl_vars['send_data']->value['from_email']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['send_data']->value['from_email'], ENT_QUOTES, 'ISO-8859-1');
} elseif ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['email'], ENT_QUOTES, 'ISO-8859-1');
}?>" />
</div>

<div class="ty-control-group">
    <label for="send_notes" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("your_message");?>
</label>
    <textarea id="send_notes"  class="ty-input-textarea" rows="5" cols="72" name="send_data[notes]"><?php if ($_smarty_tpl->tpl_vars['send_data']->value['notes']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['send_data']->value['notes'], ENT_QUOTES, 'ISO-8859-1');
} elseif ($_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"social_buttons:send_notes_product")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"social_buttons:send_notes_product"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['product'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"social_buttons:send_notes_product"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} elseif ($_smarty_tpl->tpl_vars['page']->value) {
echo $_smarty_tpl->tpl_vars['page']->value['page'];
}?></textarea>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('option'=>"email_share",'align'=>"left"), 0);?>


<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("send"),'but_name'=>"dispatch[share_by_email.send]",'but_role'=>"submit"), 0);?>

</div>

</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"elm_email_sharing",'link_text'=>$_smarty_tpl->__("sb_share"),'link_icon'=>"ty-social-buttons__email-icon ty-icon-mail",'link_meta'=>"ty-social-buttons__email-sharing",'text'=>$_smarty_tpl->__("share_via_email"),'content'=>Smarty::$_smarty_vars['capture']['popup_content']), 0);?>


<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/providers/email.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/social_buttons/providers/email.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['email_enable']=="Y"&&$_smarty_tpl->tpl_vars['provider_settings']->value['email']['data']) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array("popup_content", null, null); ob_start(); ?>
<form name="email_share_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post">
<input type="hidden" name="selected_section" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_tab_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" />
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'ISO-8859-1');?>
" />

<div class="ty-control-group">
    <label class="ty-control-group__title" for="send_name"><?php echo $_smarty_tpl->__("name_of_friend");?>
</label>
    <input id="send_name" class="ty-input-text" size="50" type="text" name="send_data[to_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['send_data']->value['to_name'], ENT_QUOTES, 'ISO-8859-1');?>
" />
</div>

<div class="ty-control-group">
    <label for="send_email" class="ty-control-group__title cm-required cm-email"><?php echo $_smarty_tpl->__("email_of_friend");?>
</label>
    <input id="send_email" class="ty-input-text" size="50" type="text" name="send_data[to_email]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['send_data']->value['to_email'], ENT_QUOTES, 'ISO-8859-1');?>
" />
</div>

<div class="ty-control-group">
    <label class="ty-control-group__title" for="send_yourname"><?php echo $_smarty_tpl->__("your_name");?>
</label>
    <input id="send_yourname" size="50" class="ty-input-text" type="text" name="send_data[from_name]" value="<?php if ($_smarty_tpl->tpl_vars['send_data']->value['from_name']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['send_data']->value['from_name'], ENT_QUOTES, 'ISO-8859-1');
} elseif ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['firstname'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['lastname'], ENT_QUOTES, 'ISO-8859-1');
}?>" />
</div>

<div class="ty-control-group">
    <label for="send_youremail" class="ty-control-group__title cm-email"><?php echo $_smarty_tpl->__("your_email");?>
</label>
    <input id="send_youremail" class="ty-input-text" size="50" type="text" name="send_data[from_email]" value="<?php if ($_smarty_tpl->tpl_vars['send_data']->value['from_email']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['send_data']->value['from_email'], ENT_QUOTES, 'ISO-8859-1');
} elseif ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['email'], ENT_QUOTES, 'ISO-8859-1');
}?>" />
</div>

<div class="ty-control-group">
    <label for="send_notes" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("your_message");?>
</label>
    <textarea id="send_notes"  class="ty-input-textarea" rows="5" cols="72" name="send_data[notes]"><?php if ($_smarty_tpl->tpl_vars['send_data']->value['notes']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['send_data']->value['notes'], ENT_QUOTES, 'ISO-8859-1');
} elseif ($_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"social_buttons:send_notes_product")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"social_buttons:send_notes_product"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['product'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"social_buttons:send_notes_product"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} elseif ($_smarty_tpl->tpl_vars['page']->value) {
echo $_smarty_tpl->tpl_vars['page']->value['page'];
}?></textarea>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('option'=>"email_share",'align'=>"left"), 0);?>


<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("send"),'but_name'=>"dispatch[share_by_email.send]",'but_role'=>"submit"), 0);?>

</div>

</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"elm_email_sharing",'link_text'=>$_smarty_tpl->__("sb_share"),'link_icon'=>"ty-social-buttons__email-icon ty-icon-mail",'link_meta'=>"ty-social-buttons__email-sharing",'text'=>$_smarty_tpl->__("share_via_email"),'content'=>Smarty::$_smarty_vars['capture']['popup_content']), 0);?>


<?php }?>
<?php }?><?php }} ?>
