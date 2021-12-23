<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 12:42:42
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/common/sidebox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6689725035ee26d1291ac88-02347659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01731e071d95d4c9c249eda66ecaa286f1fe439f' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/common/sidebox.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6689725035ee26d1291ac88-02347659',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee26d1291e8b2_43227775',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee26d1291e8b2_43227775')) {function content_5ee26d1291e8b2_43227775($_smarty_tpl) {?><?php if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="sidebar-row">
        <h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'ISO-8859-1');?>
</h6>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? "&nbsp;" : $tmp);?>

    </div>
    <hr />
<?php }?><?php }} ?>
