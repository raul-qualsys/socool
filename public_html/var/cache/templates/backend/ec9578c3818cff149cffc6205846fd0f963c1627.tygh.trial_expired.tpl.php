<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 08:39:50
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/views/settings/trial_expired.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7499902775ee23426951543-76982892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec9578c3818cff149cffc6205846fd0f963c1627' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/views/settings/trial_expired.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7499902775ee23426951543-76982892',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show' => 0,
    'store_mode_errors' => 0,
    'message' => 0,
    'config' => 0,
    'store_mode_license' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee23426960be2_28923990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee23426960be2_28923990')) {function content_5ee23426960be2_28923990($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('trial_expired','text_input_license_code','please_enter_license_here','activate','text_buy_new_license','buy_license','text_money_back_guarantee'));
?>
<?php if ($_smarty_tpl->tpl_vars['show']->value) {?>
    <a id="trial" class="cm-dialog-opener cm-dialog-auto-size hidden cm-dialog-non-closable" data-ca-target-id="trial_dialog"></a>

    <div class="hidden trial-expired-dialog" title="<?php echo $_smarty_tpl->__("trial_expired",array("[product]"=>@constant('PRODUCT_NAME')));?>
" id="trial_dialog">
        <?php if ($_smarty_tpl->tpl_vars['store_mode_errors']->value) {?>
            <div class="alert alert-error notification-content">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php  $_smarty_tpl->tpl_vars["message"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["message"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['store_mode_errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["message"]->key => $_smarty_tpl->tpl_vars["message"]->value) {
$_smarty_tpl->tpl_vars["message"]->_loop = true;
?>
                    <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['title'], ENT_QUOTES, 'ISO-8859-1');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['message']->value['text'];?>
<br>
                <?php } ?>
            </div>
        <?php }?>

        <form name="trial_form" id="trial_dialog_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'ISO-8859-1');?>
" method="post">
            <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'ISO-8859-1');?>
">
            <input type="hidden" name="store_mode" value="full">
            <div class="trial-expired">
                <p><?php echo $_smarty_tpl->__("text_input_license_code",array("[product]"=>@constant('PRODUCT_NAME')));?>
</p>

                <div class="license <?php if ($_smarty_tpl->tpl_vars['store_mode_errors']->value) {?> type-error<?php }?> item">
                    <input type="text" name="license_number" class="<?php if ($_smarty_tpl->tpl_vars['store_mode_errors']->value) {?> type-error<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_mode_license']->value, ENT_QUOTES, 'ISO-8859-1');?>
" placeholder="<?php echo $_smarty_tpl->__("please_enter_license_here");?>
">
                    <input name="dispatch[settings.change_store_mode]" type="submit" value="<?php echo $_smarty_tpl->__("activate");?>
" class="btn btn-primary">
                </div>
                <div class="trial-purchase">
                    <p>
                        <?php echo $_smarty_tpl->__("text_buy_new_license");?>

                    </p>
                        <a class="btn btn-large btn-buy" target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['resources']['product_buy_url'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("buy_license");?>
</a>
                    <p>
                        <?php echo $_smarty_tpl->__("text_money_back_guarantee");?>

                    </p>
                </div>
            </div>
        </form>
    </div>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
        Tygh.$(document).ready(function () {
            Tygh.$('#trial').trigger('click');
        });

        Tygh.$(window).load(function () {
            Tygh.$('#trial_dialog_form').off('submit');
        });
    <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
