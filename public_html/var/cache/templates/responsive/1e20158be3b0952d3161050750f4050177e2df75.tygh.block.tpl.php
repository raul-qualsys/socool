<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 01:36:57
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/views/block_manager/render/block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10361687425ee1d1092fe061-09153176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e20158be3b0952d3161050750f4050177e2df75' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/views/block_manager/render/block.tpl',
      1 => 1565855938,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10361687425ee1d1092fe061-09153176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'location_data' => 0,
    'block' => 0,
    'content_alignment' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee1d109307913_57180577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee1d109307913_57180577')) {function content_5ee1d109307913_57180577($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']&&$_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("backend:views/block_manager/frontend_render/block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']||$_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT'||$_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>
        <div class="<?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'ISO-8859-1');
}?> <?php if ($_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT') {?>ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>ty-float-left<?php }?>">
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']||$_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT'||$_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>
        </div>
    <?php }?>
<?php }?>
<?php }} ?>
