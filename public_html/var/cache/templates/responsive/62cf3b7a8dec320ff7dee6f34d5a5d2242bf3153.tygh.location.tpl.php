<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 01:37:01
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/views/block_manager/render/location.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5876179795ee1d10dd70166-39298369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62cf3b7a8dec320ff7dee6f34d5a5d2242bf3153' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/views/block_manager/render/location.tpl',
      1 => 1565855938,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5876179795ee1d10dd70166-39298369',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'containers' => 0,
    'show_entry_page' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee1d10dd7cd24_91541441',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee1d10dd7cd24_91541441')) {function content_5ee1d10dd7cd24_91541441($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('choose_your_country'));
?>

<?php if ($_smarty_tpl->tpl_vars['containers']->value['top_panel']) {?>
<div class="tygh-top-panel clearfix">
    <?php echo $_smarty_tpl->tpl_vars['containers']->value['top_panel'];?>

</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['containers']->value['header']) {?>
<div class="tygh-header clearfix">
    <?php echo $_smarty_tpl->tpl_vars['containers']->value['header'];?>

</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['containers']->value['content']) {?>
<div class="tygh-content clearfix">
    <?php echo $_smarty_tpl->tpl_vars['containers']->value['content'];?>

</div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['containers']->value['footer']) {?>
<div class="tygh-footer clearfix" id="tygh_footer">
    <?php echo $_smarty_tpl->tpl_vars['containers']->value['footer'];?>

</div>
<?php }?>

<?php if (fn_allowed_for("ULTIMATE")) {?>
    
    <?php if ($_smarty_tpl->tpl_vars['show_entry_page']->value) {?>
        <div id="entry_page"></div>
            <?php echo '<script'; ?>
 type="text/javascript">
                $('#entry_page').ceDialog('open', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
href: fn_url('companies.entry_page'), resizable: false, title: '<?php echo $_smarty_tpl->__("choose_your_country");?>
', width: 325, height: 420, dialogClass: 'entry-page'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
);
            <?php echo '</script'; ?>
>
    <?php }?>
<?php }?>

<?php if (fn_check_meta_redirect($_REQUEST['meta_redirect_url'])) {?>
    <meta http-equiv="refresh" content="1;url=<?php echo htmlspecialchars(fn_url(fn_check_meta_redirect($_REQUEST['meta_redirect_url'])), ENT_QUOTES, 'ISO-8859-1');?>
" />
<?php }?><?php }} ?>
