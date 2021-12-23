<?php /* Smarty version Smarty-3.1.21, created on 2020-09-17 12:32:02
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/views/functionality_restrictions/ultimate_or_storefront_license_required.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18759702965f639d928f9a13-96680546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5d5efa6826ae4eee54cf1896ec8fa3cbdd9f3b5' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/views/functionality_restrictions/ultimate_or_storefront_license_required.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18759702965f639d928f9a13-96680546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'store_mode' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f639d929113f7_51677742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f639d929113f7_51677742')) {function content_5f639d929113f7_51677742($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('max_storefronts_reached','ultimate_license','new_text_ultimate_license_required','upgrade_license','storefront_license','text_storefront_license_required','buy_new_storefront_license'));
?>
<?php if (fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['store_mode']->value!="ultimate") {?>
    <div id="restriction_promo_dialog" class="restriction-promo">
        <?php echo $_smarty_tpl->__("max_storefronts_reached",array("[product]"=>@constant('PRODUCT_NAME'),"[ultimate_license_url]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['ultimate_license_url'],"[storefront_license_url]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['storefront_license_url']));?>

        <div class="restriction-promo__wrapper">

            <div class="restriction-features">
                <div class="restriction-feature restriction-feature_storefronts">
                    <h2><?php echo $_smarty_tpl->__("ultimate_license",array("[product]"=>@constant('PRODUCT_NAME')));?>
</h2>

                    <?php echo $_smarty_tpl->__("new_text_ultimate_license_required",array("[product]"=>@constant('PRODUCT_NAME'),"[ultimate_license_url]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['ultimate_license_url']));?>


                </div>
            </div>

            <div class="center">
                <a class="restriction-update-btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['resources']['ultimate_license_url'], ENT_QUOTES, 'ISO-8859-1');?>
" target="_blank"><?php echo $_smarty_tpl->__("upgrade_license");?>
</a>
            </div>
        </div>

        <div class="restriction-promo__wrapper">

            <div class="restriction-features">
                <div class="restriction-feature restriction-feature_storefronts_plus">
                    <h2><?php echo $_smarty_tpl->__("storefront_license");?>
</h2>

                    <?php echo $_smarty_tpl->__("text_storefront_license_required",array("[product]"=>@constant('PRODUCT_NAME'),"[storefront_license_url]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['storefront_license_url']));?>


                </div>
            </div>

            <div class="center">
                <a class="restriction-update-btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['resources']['storefront_license_url'], ENT_QUOTES, 'ISO-8859-1');?>
" target="_blank">
                    <?php echo $_smarty_tpl->__("buy_new_storefront_license",array("[product]"=>''));?>

                </a>
            </div>
        </div>
    </div>
<?php }?><?php }} ?>
