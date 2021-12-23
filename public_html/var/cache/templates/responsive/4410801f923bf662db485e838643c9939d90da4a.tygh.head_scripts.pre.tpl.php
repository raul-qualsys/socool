<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 01:36:57
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/sd_facebook_pixel/hooks/index/head_scripts.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18708822025ee1d109187105-20481572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4410801f923bf662db485e838643c9939d90da4a' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/sd_facebook_pixel/hooks/index/head_scripts.pre.tpl',
      1 => 1578555956,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18708822025ee1d109187105-20481572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_pixel' => 0,
    'facebook_pixel_ids' => 0,
    'pixel_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee1d1091acbb2_27942461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee1d1091acbb2_27942461')) {function content_5ee1d1091acbb2_27942461($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['product_pixel']->value) {?>
    <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['title'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['url'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['image'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <meta property="og:image:width" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['image_width'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <meta property="og:image:height" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['image_height'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['site_name'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <meta property="og:type" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['type'], ENT_QUOTES, 'ISO-8859-1');?>
">

    <meta property="product:brand" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['brand'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <meta property="product:availability" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['availability'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <meta property="product:condition" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['condition'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['price'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['currency'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <meta property="product:retailer_item_id" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['id'], ENT_QUOTES, 'ISO-8859-1');?>
">
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['facebook_pixel_ids']->value) {?>
    <!-- Facebook Pixel Code -->
    <?php echo '<script'; ?>
 type="text/javascript" data-no-defer>
        
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        
        <?php  $_smarty_tpl->tpl_vars['pixel_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pixel_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['facebook_pixel_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pixel_id']->key => $_smarty_tpl->tpl_vars['pixel_id']->value) {
$_smarty_tpl->tpl_vars['pixel_id']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['pixel_id']->value) {?>
                fbq('init', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pixel_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
);
            <?php }?>
        <?php } ?>
        fbq('track', 'PageView');
    <?php echo '</script'; ?>
>
    <?php  $_smarty_tpl->tpl_vars['pixel_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pixel_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['facebook_pixel_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pixel_id']->key => $_smarty_tpl->tpl_vars['pixel_id']->value) {
$_smarty_tpl->tpl_vars['pixel_id']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['pixel_id']->value) {?>
            <noscript><img height="1" width="1" style="display:none"
                src="https://www.facebook.com/tr?id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pixel_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
&ev=PageView&noscript=1"
            /></noscript>
        <?php }?>
    <?php } ?>
    <!-- End Facebook Pixel Code -->
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/sd_facebook_pixel/hooks/index/head_scripts.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/sd_facebook_pixel/hooks/index/head_scripts.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['product_pixel']->value) {?>
    <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['title'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['url'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['image'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <meta property="og:image:width" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['image_width'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <meta property="og:image:height" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['image_height'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['site_name'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <meta property="og:type" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['type'], ENT_QUOTES, 'ISO-8859-1');?>
">

    <meta property="product:brand" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['brand'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <meta property="product:availability" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['availability'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <meta property="product:condition" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['condition'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['price'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['currency'], ENT_QUOTES, 'ISO-8859-1');?>
">
    <meta property="product:retailer_item_id" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_pixel']->value['id'], ENT_QUOTES, 'ISO-8859-1');?>
">
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['facebook_pixel_ids']->value) {?>
    <!-- Facebook Pixel Code -->
    <?php echo '<script'; ?>
 type="text/javascript" data-no-defer>
        
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        
        <?php  $_smarty_tpl->tpl_vars['pixel_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pixel_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['facebook_pixel_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pixel_id']->key => $_smarty_tpl->tpl_vars['pixel_id']->value) {
$_smarty_tpl->tpl_vars['pixel_id']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['pixel_id']->value) {?>
                fbq('init', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pixel_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
);
            <?php }?>
        <?php } ?>
        fbq('track', 'PageView');
    <?php echo '</script'; ?>
>
    <?php  $_smarty_tpl->tpl_vars['pixel_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pixel_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['facebook_pixel_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pixel_id']->key => $_smarty_tpl->tpl_vars['pixel_id']->value) {
$_smarty_tpl->tpl_vars['pixel_id']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['pixel_id']->value) {?>
            <noscript><img height="1" width="1" style="display:none"
                src="https://www.facebook.com/tr?id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pixel_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
&ev=PageView&noscript=1"
            /></noscript>
        <?php }?>
    <?php } ?>
    <!-- End Facebook Pixel Code -->
<?php }?>
<?php }?><?php }} ?>
