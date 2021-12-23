<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 18:22:19
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/rus_boxberry/hooks/orders/customer_shot_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6816181705ee2bcab4f7551-49900661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d6cacac926546c3fb4ba50c2b3d08d217b84d69' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/rus_boxberry/hooks/orders/customer_shot_info.post.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6816181705ee2bcab4f7551-49900661',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'shipping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee2bcab4fde85_13143972',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee2bcab4fde85_13143972')) {function content_5ee2bcab4fde85_13143972($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('rus_boxberry.pickuppoint'));
?>
<?php  $_smarty_tpl->tpl_vars["shipping"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['shipping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipping"]->key => $_smarty_tpl->tpl_vars["shipping"]->value) {
$_smarty_tpl->tpl_vars["shipping"]->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['module']=='rus_boxberry'&&$_smarty_tpl->tpl_vars['shipping']->value['pickup_data']) {?>
        <div class="well orders-right-pane form-horizontal">
            <div class="control-group">
                <div class="control-label">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("rus_boxberry.pickuppoint")), 0);?>

                </div>
            </div>
            <p class="strong">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['pickup_data']['name'], ENT_QUOTES, 'ISO-8859-1');?>

            </p>
            <p class="muted">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['pickup_data']['full_address'], ENT_QUOTES, 'ISO-8859-1');?>
<br />
                <bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['pickup_data']['phone'], ENT_QUOTES, 'ISO-8859-1');?>
</bdi>
            </p>
        </div>
    <?php }?>
<?php } ?>
<?php }} ?>
