<?php /* Smarty version Smarty-3.1.21, created on 2020-06-25 13:49:19
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/views/orders/components/promotions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:976228285ef4f1afe68359-08245309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '232247be459bfddf7b2dbabf540016aef5e57a3e' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/views/orders/components/promotions.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '976228285ef4f1afe68359-08245309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'promotions' => 0,
    'promotion' => 0,
    'promotion_id' => 0,
    'order_info' => 0,
    'bonus_name' => 0,
    'bonus' => 0,
    'lvar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ef4f1afe7cf03_39624481',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ef4f1afe7cf03_39624481')) {function content_5ef4f1afe7cf03_39624481($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('coupon_code','details','deleted'));
?>
<?php  $_smarty_tpl->tpl_vars["promotion"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["promotion"]->_loop = false;
 $_smarty_tpl->tpl_vars["promotion_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['promotions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["promotion"]->key => $_smarty_tpl->tpl_vars["promotion"]->value) {
$_smarty_tpl->tpl_vars["promotion"]->_loop = true;
 $_smarty_tpl->tpl_vars["promotion_id"]->value = $_smarty_tpl->tpl_vars["promotion"]->key;
?>

<?php if ($_smarty_tpl->tpl_vars['promotion']->value['name']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['promotion']->value['name']), 0);?>


    <?php  $_smarty_tpl->tpl_vars["bonus"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["bonus"]->_loop = false;
 $_smarty_tpl->tpl_vars["bonus_name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['promotions'][$_smarty_tpl->tpl_vars['promotion_id']->value]['bonuses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["bonus"]->key => $_smarty_tpl->tpl_vars["bonus"]->value) {
$_smarty_tpl->tpl_vars["bonus"]->_loop = true;
 $_smarty_tpl->tpl_vars["bonus_name"]->value = $_smarty_tpl->tpl_vars["bonus"]->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['bonus_name']->value=="give_coupon") {?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("coupon_code");?>
</label>
        <div class="controls">
            <a href="<?php echo htmlspecialchars(fn_url("promotions.update?promotion_id=".((string)$_smarty_tpl->tpl_vars['bonus']->value['value'])."&selected_section=conditions"), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bonus']->value['coupon_code'], ENT_QUOTES, 'ISO-8859-1');?>
</a>
        </div>
    </div>
    <?php }?>
    <?php } ?>

    <?php echo $_smarty_tpl->tpl_vars['promotion']->value['short_description'];?>

    <p><a href="<?php echo htmlspecialchars(fn_url("promotions.update?promotion_id=".((string)$_smarty_tpl->tpl_vars['promotion_id']->value)), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("details");?>
</a></p>
<?php } else { ?>
    <p><?php  $_smarty_tpl->tpl_vars["bonus"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["bonus"]->_loop = false;
 $_smarty_tpl->tpl_vars["bonus_name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['promotion']->value['bonuses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["bonus"]->key => $_smarty_tpl->tpl_vars["bonus"]->value) {
$_smarty_tpl->tpl_vars["bonus"]->_loop = true;
 $_smarty_tpl->tpl_vars["bonus_name"]->value = $_smarty_tpl->tpl_vars["bonus"]->key;
?>
        <?php $_smarty_tpl->tpl_vars["lvar"] = new Smarty_variable("promotion_bonus_".((string)$_smarty_tpl->tpl_vars['bonus_name']->value), null, 0);?><span><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['lvar']->value);?>
</span>
    <?php } ?> (<?php echo $_smarty_tpl->__("deleted");?>
)</p>
<?php }?>

<?php } ?><?php }} ?>
