<?php /* Smarty version Smarty-3.1.21, created on 2020-07-01 05:56:45
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/common/switcher.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18213584945efc6beddc6948-31836714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62049a3c17a4a48c168cf3fd9f29deb99daffc28' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/common/switcher.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18213584945efc6beddc6948-31836714',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta' => 0,
    'extra_attrs' => 0,
    'id' => 0,
    'checked' => 0,
    'input_name' => 0,
    'input_value' => 0,
    'input_id' => 0,
    'input_attrs' => 0,
    'input_class' => 0,
    'input_readonly' => 0,
    'input_disabled' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5efc6beddd9be8_28707091',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5efc6beddd9be8_28707091')) {function content_5efc6beddd9be8_28707091($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_render_tag_attrs')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/modifier.render_tag_attrs.php';
?><div class="switch-mini ty-switch-checkbox cm-switch-checkbox list-btns <?php if ($_smarty_tpl->tpl_vars['meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'ISO-8859-1');
}?>"
     <?php if ($_smarty_tpl->tpl_vars['extra_attrs']->value) {?>
         <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['extra_attrs']->value);?>

     <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
         id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"
     <?php }?>
>
    <input type="checkbox"
           <?php if ($_smarty_tpl->tpl_vars['checked']->value) {?>
               checked="checked"
           <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['input_name']->value) {?>
               name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
"
           <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['input_value']->value) {?>
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_value']->value, ENT_QUOTES, 'ISO-8859-1');?>
"
           <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['input_id']->value) {?>
               id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
"
           <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['input_attrs']->value) {?>
               <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value);?>

           <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['input_class']->value) {?>
               class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_class']->value, ENT_QUOTES, 'ISO-8859-1');?>
"
           <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['input_readonly']->value) {?>
               readonly
           <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['input_disabled']->value) {?>
               disabled
           <?php }?>
    />
</div>
<?php }} ?>
