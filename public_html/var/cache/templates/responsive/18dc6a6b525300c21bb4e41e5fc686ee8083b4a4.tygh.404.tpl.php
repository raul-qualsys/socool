<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 14:08:37
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/blocks/static_templates/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6809947315ee28135b81117-69321537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18dc6a6b525300c21bb4e41e5fc686ee8083b4a4' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/blocks/static_templates/404.tpl',
      1 => 1565855938,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6809947315ee28135b81117-69321537',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'exception_status' => 0,
    'config' => 0,
    'return_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee28135ba9085_59106870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee28135ba9085_59106870')) {function content_5ee28135ba9085_59106870($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('exception_error','exception_title','access_denied_text','page_not_found_text','exception_error_code','access_denied','page_not_found','go_to_the_homepage','go_back','exception_error','exception_title','access_denied_text','page_not_found_text','exception_error_code','access_denied','page_not_found','go_to_the_homepage','go_back'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-exception">
    <div class="ty-exception__code">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['exception_status']->value, ENT_QUOTES, 'ISO-8859-1');?>

        <span class="ty-exception__code-txt"><?php echo $_smarty_tpl->__("exception_error");?>
</span>
    </div>
    <div class="ty-exception__title-info">
        <h1 class="ty-exception__title"><?php echo $_smarty_tpl->__("exception_title");?>
</h1>
        <p class="ty-exception__info">
            <?php if (@constant('HTTPS')===true) {?>
                <?php $_smarty_tpl->tpl_vars["return_url"] = new Smarty_variable(fn_url($_smarty_tpl->tpl_vars['config']->value['https_location']), null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["return_url"] = new Smarty_variable(fn_url($_smarty_tpl->tpl_vars['config']->value['http_location']), null, 0);?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['exception_status']->value=="403") {?>
                <?php echo $_smarty_tpl->__("access_denied_text");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['exception_status']->value=="404") {?>
                <?php echo $_smarty_tpl->__("page_not_found_text");?>

            <?php }?>
        </p>

        <p class="ty-exception__info"><?php echo $_smarty_tpl->__("exception_error_code");?>

            <?php if ($_smarty_tpl->tpl_vars['exception_status']->value=="403") {?>
                <?php echo $_smarty_tpl->__("access_denied");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['exception_status']->value=="404") {?>
                <?php echo $_smarty_tpl->__("page_not_found");?>

            <?php }?>
        </p>
        <ul class="ty-exception__links">
            <li class="ty-exception__links-item">
                <a class="ty-exception__links-a" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("go_to_the_homepage");?>
</a>
            </li>
            <li class="ty-exception__links-item" id="go_back">
                <a class="ty-exception__links-a cm-back-link"><?php echo $_smarty_tpl->__("go_back");?>
</a>
            </li>
        </ul>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    
    Tygh.$(document).ready(function() {
        var $ = Tygh.$;
        $.each($.browser, function(i, val) {
            if ((i == 'opera') && (val == true)) {
                if (history.length == 0) {
                    $('#go_back').hide();
                }
            } else {
                if (history.length == 1) {
                    $('#go_back').hide();
                }
            }
        });
    });
    
<?php echo '</script'; ?>
><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/404.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/404.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-exception">
    <div class="ty-exception__code">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['exception_status']->value, ENT_QUOTES, 'ISO-8859-1');?>

        <span class="ty-exception__code-txt"><?php echo $_smarty_tpl->__("exception_error");?>
</span>
    </div>
    <div class="ty-exception__title-info">
        <h1 class="ty-exception__title"><?php echo $_smarty_tpl->__("exception_title");?>
</h1>
        <p class="ty-exception__info">
            <?php if (@constant('HTTPS')===true) {?>
                <?php $_smarty_tpl->tpl_vars["return_url"] = new Smarty_variable(fn_url($_smarty_tpl->tpl_vars['config']->value['https_location']), null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["return_url"] = new Smarty_variable(fn_url($_smarty_tpl->tpl_vars['config']->value['http_location']), null, 0);?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['exception_status']->value=="403") {?>
                <?php echo $_smarty_tpl->__("access_denied_text");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['exception_status']->value=="404") {?>
                <?php echo $_smarty_tpl->__("page_not_found_text");?>

            <?php }?>
        </p>

        <p class="ty-exception__info"><?php echo $_smarty_tpl->__("exception_error_code");?>

            <?php if ($_smarty_tpl->tpl_vars['exception_status']->value=="403") {?>
                <?php echo $_smarty_tpl->__("access_denied");?>

            <?php } elseif ($_smarty_tpl->tpl_vars['exception_status']->value=="404") {?>
                <?php echo $_smarty_tpl->__("page_not_found");?>

            <?php }?>
        </p>
        <ul class="ty-exception__links">
            <li class="ty-exception__links-item">
                <a class="ty-exception__links-a" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo $_smarty_tpl->__("go_to_the_homepage");?>
</a>
            </li>
            <li class="ty-exception__links-item" id="go_back">
                <a class="ty-exception__links-a cm-back-link"><?php echo $_smarty_tpl->__("go_back");?>
</a>
            </li>
        </ul>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    
    Tygh.$(document).ready(function() {
        var $ = Tygh.$;
        $.each($.browser, function(i, val) {
            if ((i == 'opera') && (val == true)) {
                if (history.length == 0) {
                    $('#go_back').hide();
                }
            } else {
                if (history.length == 1) {
                    $('#go_back').hide();
                }
            }
        });
    });
    
<?php echo '</script'; ?>
><?php }?><?php }} ?>