<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 12:00:02
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/views/block_manager/render/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14807397275ee26312d23e03-26765314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2682a34c2efd8f7de19c89d9f8d4eecb24915420' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/views/block_manager/render/container.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14807397275ee26312d23e03-26765314',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'container' => 0,
    'content' => 0,
    'dynamic_object' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee26312d3c848_37744317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee26312d3c848_37744317')) {function content_5ee26312d3c848_37744317($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('set_custom_configuration','use_default_block_configuration','insert_grid','insert_grid','container_options','enable_or_disable_container'));
?>
<div class="device-specific-block container container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['width'], ENT_QUOTES, 'ISO-8859-1');?>
 <?php if ($_smarty_tpl->tpl_vars['container']->value['uses_default_content']) {?>container-lock<?php }?> <?php if ($_smarty_tpl->tpl_vars['container']->value['status']!="A") {?>container-off<?php }?>"
     data-ca-status="<?php if ($_smarty_tpl->tpl_vars['container']->value['status']!="A") {?>disabled<?php } else { ?>active<?php }?>"
     <?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/components/device_availability_attributes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>$_smarty_tpl->tpl_vars['container']->value), 0);?>

     id="container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['container_id'], ENT_QUOTES, 'ISO-8859-1');?>
"
>
    <?php if ($_smarty_tpl->tpl_vars['container']->value['linked_message']) {?>
        <p>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['linked_message'], ENT_QUOTES, 'ISO-8859-1');?>

            <a class="cm-post" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['set_custom_config_url'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("set_custom_configuration");?>
</a>
        </p>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['container']->value['has_displayable_content']) {?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php }?>
    
    <div class="clearfix"></div>
    <div class="grid-control-menu bm-control-menu">
        <?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/components/device_icons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>$_smarty_tpl->tpl_vars['container']->value,'wrapper_class'=>"pull-right"), 0);?>


        <h4 class="grid-control-title">
            <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['container']->value['position']);?>

            <?php if ($_smarty_tpl->tpl_vars['container']->value['can_be_reset_to_default']) {?>
                <a class="cm-post" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['set_default_config_url'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("use_default_block_configuration");?>
</a>
            <?php }?>
        </h4>

        <?php if ($_smarty_tpl->tpl_vars['container']->value['has_displayable_content']&&!$_smarty_tpl->tpl_vars['dynamic_object']->value) {?>
            <div class="grid-control-menu-actions">
                <div class="btn-group action">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon-plus cm-tooltip" data-ce-tooltip-position="top" title="<?php echo $_smarty_tpl->__("insert_grid");?>
"></span></a>
                    <ul class="dropdown-menu droptop">
                        <li><a href="#" class="cm-action bm-action-add-grid"><?php echo $_smarty_tpl->__("insert_grid");?>
</a></li>
                    </ul>
                </div>
                <div class="cm-tooltip cm-action icon-cog bm-action-properties action" data-ce-tooltip-position="top" title="<?php echo $_smarty_tpl->__("container_options");?>
"></div>
                <div class="cm-action bm-action-switch cm-tooltip icon-off action" data-ce-tooltip-position="top" title="<?php echo $_smarty_tpl->__("enable_or_disable_container");?>
"></div>
            </div>
        <?php }?>
    </div>
<!--container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['container_id'], ENT_QUOTES, 'ISO-8859-1');?>
--></div>

<hr />
<?php }} ?>
