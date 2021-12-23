<?php /* Smarty version Smarty-3.1.21, created on 2020-06-15 09:42:09
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/paypal/settings/logo_uploader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11208376405ee788c1bf5830-97018361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '596eb4f552fbf648e383d39a7ed74069992d0815' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/paypal/settings/logo_uploader.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11208376405ee788c1bf5830-97018361',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'pp_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee788c1c03181_12166039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee788c1c03181_12166039')) {function content_5ee788c1c03181_12166039($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('paypal_logo','ttc_paypal_logo'));
?>
<div id="paypal_logo_uploader" class="in collapse<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!fn_allowed_for('MULTIVENDOR')&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?> disable-overlay-wrap<?php }?>">
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!fn_allowed_for('MULTIVENDOR')&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
    <div class="disable-overlay" id="pp_logo_disable_overlay"></div>
    <?php }?>
    <div class="control-group">
        <label class="control-label" for="elm_paypal_logo"><?php echo $_smarty_tpl->__("paypal_logo");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_paypal_logo")), 0);?>
:</label>
        <div class="controls">
            <?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"paypal_logo",'image_object_type'=>"paypal_logo",'image_pair'=>$_smarty_tpl->tpl_vars['pp_settings']->value['main_pair'],'no_thumbnail'=>true), 0);?>

            <?php if (fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            <div class="right update-for-all">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>true,'object_id'=>"pp_settings",'name'=>"pp_settings[pp_logo_update_all_vendors]",'hide_element'=>"paypal_logo_uploader"), 0);?>

            </div>
            <?php }?>
        </div>
    </div>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    Tygh.$(document).ready(function(){
    var $ = Tygh.$;
    $('.cm-update-for-all-icon[data-ca-hide-id=paypal_logo_uploader]').on('click', function() {
        $('#paypal_logo_uploader').toggleClass('disable-overlay-wrap');
        $('#pp_logo_disable_overlay').toggleClass('disable-overlay');
    });
});
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
