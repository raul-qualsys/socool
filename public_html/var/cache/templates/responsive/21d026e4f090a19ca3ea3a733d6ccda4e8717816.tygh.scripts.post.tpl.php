<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 01:37:02
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/image_zoom/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15578089205ee1d10e0274b6-68631356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21d026e4f090a19ca3ea3a733d6ccda4e8717816' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/addons/image_zoom/hooks/index/scripts.post.tpl',
      1 => 1565883483,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15578089205ee1d10e0274b6-68631356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'language_direction' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee1d10e0373e2_76098210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee1d10e0373e2_76098210')) {function content_5ee1d10e0373e2_76098210($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/addons/image_zoom/lib/easyzoom.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/image_zoom/index.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
 type="application/javascript">
    (function (_, $) {
        $.ceEvent('on', 'ce.commoninit', function (context) {
            var positionId = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_zoom_position'], ENT_QUOTES, 'ISO-8859-1');?>
;
            if ('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'ISO-8859-1');?>
' === 'rtl') {
                positionId = $.ceImageZoom('translateFlyoutPositionToRtl', positionId);
            }

            var $body = $('body', _.doc);

            $('.cm-previewer', context).each(function (i, elm) {
                setTimeout(function() {
                    var isMobile = $body.hasClass('screen--xs') ||
                        $body.hasClass('screen--xs-large') ||
                        $body.hasClass('screen--sm') ||
                        $body.hasClass('screen--sm-large');

                    if (isMobile && Modernizr.touchevents) {
                        return false;
                    }

                    $.ceImageZoom('init', $(elm), positionId);
                }, 220);
            });
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/image_zoom/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/image_zoom/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/addons/image_zoom/lib/easyzoom.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/image_zoom/index.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
 type="application/javascript">
    (function (_, $) {
        $.ceEvent('on', 'ce.commoninit', function (context) {
            var positionId = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_zoom_position'], ENT_QUOTES, 'ISO-8859-1');?>
;
            if ('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'ISO-8859-1');?>
' === 'rtl') {
                positionId = $.ceImageZoom('translateFlyoutPositionToRtl', positionId);
            }

            var $body = $('body', _.doc);

            $('.cm-previewer', context).each(function (i, elm) {
                setTimeout(function() {
                    var isMobile = $body.hasClass('screen--xs') ||
                        $body.hasClass('screen--xs-large') ||
                        $body.hasClass('screen--sm') ||
                        $body.hasClass('screen--sm-large');

                    if (isMobile && Modernizr.touchevents) {
                        return false;
                    }

                    $.ceImageZoom('init', $(elm), positionId);
                }, 220);
            });
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php }?><?php }} ?>
