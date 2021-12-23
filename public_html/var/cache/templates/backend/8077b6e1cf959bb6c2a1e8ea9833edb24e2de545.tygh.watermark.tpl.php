<?php /* Smarty version Smarty-3.1.21, created on 2020-09-17 13:21:30
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/addons/watermarks/settings/watermark.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5389331965f63a92ab5f8b0-94032318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8077b6e1cf959bb6c2a1e8ea9833edb24e2de545' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/addons/watermarks/settings/watermark.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5389331965f63a92ab5f8b0-94032318',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'wt_settings' => 0,
    'wt_fonts' => 0,
    'f' => 0,
    'font' => 0,
    'wt_font_colors' => 0,
    'c' => 0,
    'color' => 0,
    'wt_font_sizes' => 0,
    'size' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f63a92aba3016_42695278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f63a92aba3016_42695278')) {function content_5f63a92aba3016_42695278($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('type','wt_graphic_watermark','wt_text_watermark','wt_watermark_image','wt_watermark_icon','wt_watermark_detailed','wt_watermark_text','wt_font','wt_font_color','wt_font_size_icon','wt_font_size_detailed','wt_watermark_position'));
?>
<?php if (fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
<div id="wt_settings_block">
    <div class="right update-for-all">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>true,'object_id'=>"wt_settings",'name'=>"wt_settings[update_all_vendors]",'hide_element'=>"wt_settings_block"), 0);?>

    </div>
<?php }?>

<div class="control-group setting-wide">
    <label for="type" class="cm-required control-label"><?php echo $_smarty_tpl->__("type");?>
:</label>
    <div class="controls">
        <select name="wt_settings[type]" id="type" class="input-text" onchange="Tygh.$('#wt_graphic_watermark').switchAvailability();  Tygh.$('#wt_text_watermark').switchAvailability();">
            <option <?php if ($_smarty_tpl->tpl_vars['wt_settings']->value['type']=="G") {?>selected="selected"<?php }?> value="G"><?php echo $_smarty_tpl->__("wt_graphic_watermark");?>
</option>
            <option <?php if ($_smarty_tpl->tpl_vars['wt_settings']->value['type']=="T") {?>selected="selected"<?php }?> value="T"><?php echo $_smarty_tpl->__("wt_text_watermark");?>
</option>
        </select>
    </div>
</div>

<div class="control-group setting-wide" id="wt_graphic_watermark">
    <label class="control-label"><?php echo $_smarty_tpl->__("wt_watermark_image");?>
:</label>
    <div class="controls">
        <?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"wt_image",'image_object_type'=>"watermark",'image_pair'=>$_smarty_tpl->tpl_vars['wt_settings']->value['image_pair'],'image_object_id'=>@constant('WATERMARK_IMAGE_ID'),'icon_title'=>$_smarty_tpl->__("wt_watermark_icon"),'detailed_title'=>$_smarty_tpl->__("wt_watermark_detailed"),'hide_alt'=>true), 0);?>

    </div>
</div>

<div id="wt_text_watermark">
<div class="control-group setting-wide">
    <label for="text" class="cm-required control-label"><?php echo $_smarty_tpl->__("wt_watermark_text");?>
:</label>
    <div class="controls">
        <input type="text" name="wt_settings[text]" id="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wt_settings']->value['text'], ENT_QUOTES, 'ISO-8859-1');?>
" size="25" class="input-text-large">
    </div>
</div>

<div class="control-group setting-wide">
    <label for="wt_font" class="control-label"><?php echo $_smarty_tpl->__("wt_font");?>
:</label>
    <div class="controls">
        <select name="wt_settings[font]" id="wt_font">
            <?php  $_smarty_tpl->tpl_vars["font"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["font"]->_loop = false;
 $_smarty_tpl->tpl_vars["f"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['wt_fonts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["font"]->key => $_smarty_tpl->tpl_vars["font"]->value) {
$_smarty_tpl->tpl_vars["font"]->_loop = true;
 $_smarty_tpl->tpl_vars["f"]->value = $_smarty_tpl->tpl_vars["font"]->key;
?>
            <option <?php if ($_smarty_tpl->tpl_vars['wt_settings']->value['font']==$_smarty_tpl->tpl_vars['f']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['font']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
            <?php } ?>
        </select>
    </div>
</div>

<div class="control-group setting-wide">
    <label for="wt_font_color" class="control-label"><?php echo $_smarty_tpl->__("wt_font_color");?>
:</label>
    <div class="controls">
        <select name="wt_settings[font_color]" id="wt_font_color">
            <?php  $_smarty_tpl->tpl_vars["color"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["color"]->_loop = false;
 $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['wt_font_colors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["color"]->key => $_smarty_tpl->tpl_vars["color"]->value) {
$_smarty_tpl->tpl_vars["color"]->_loop = true;
 $_smarty_tpl->tpl_vars["c"]->value = $_smarty_tpl->tpl_vars["color"]->key;
?>
            <option <?php if ($_smarty_tpl->tpl_vars['wt_settings']->value['font_color']==$_smarty_tpl->tpl_vars['c']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'ISO-8859-1');?>
</option>
            <?php } ?>
        </select>
    </div>
</div>

<div class="control-group setting-wide">
    <label for="wt_font_size" class="control-label"><?php echo $_smarty_tpl->__("wt_font_size_icon");?>
:</label>
    <div class="controls">
        <select name="wt_settings[font_size_icon]" id="wt_font_size">
            <?php  $_smarty_tpl->tpl_vars["size"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["size"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wt_font_sizes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["size"]->key => $_smarty_tpl->tpl_vars["size"]->value) {
$_smarty_tpl->tpl_vars["size"]->_loop = true;
?>
            <option <?php if ($_smarty_tpl->tpl_vars['wt_settings']->value['font_size_icon']==$_smarty_tpl->tpl_vars['size']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['size']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['size']->value, ENT_QUOTES, 'ISO-8859-1');?>
px</option>
            <?php } ?>
        </select>
    </div>
</div>

<div class="control-group setting-wide">
    <label for="wt_font_size" class="control-label"><?php echo $_smarty_tpl->__("wt_font_size_detailed");?>
:</label>
    <div class="controls">
        <select name="wt_settings[font_size_detailed]" id="wt_font_size">
            <?php  $_smarty_tpl->tpl_vars["size"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["size"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wt_font_sizes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["size"]->key => $_smarty_tpl->tpl_vars["size"]->value) {
$_smarty_tpl->tpl_vars["size"]->_loop = true;
?>
            <option <?php if ($_smarty_tpl->tpl_vars['wt_settings']->value['font_size_detailed']==$_smarty_tpl->tpl_vars['size']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['size']->value, ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['size']->value, ENT_QUOTES, 'ISO-8859-1');?>
px</option>
            <?php } ?>
        </select>
    </div>
</div>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    Tygh.$(document).ready(function()<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'ISO-8859-1');?>

        <?php if ($_smarty_tpl->tpl_vars['wt_settings']->value['type']=="T") {?>
            Tygh.$('#wt_graphic_watermark').switchAvailability(true);
        <?php } else { ?>
            Tygh.$('#wt_text_watermark').switchAvailability(true);
        <?php }?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
);
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="control-group setting-wide">
    <label class="control-label" for="position"><?php echo $_smarty_tpl->__("wt_watermark_position");?>
:</label>
    <div class="select-field wt_position_bg controls">
        <div class="table-wrapper">
            <table class="table table-middle table-bordered" style="width: 222px;">
            <tr>
                <td class="center">
                    <input name="wt_settings[position]" type="radio" value="left_top" <?php if ($_smarty_tpl->tpl_vars['wt_settings']->value['position']=="left_top") {?>checked="checked"<?php }?>>
                </td>
                <td class="center">
                    <input name="wt_settings[position]" type="radio" value="center_top" <?php if ($_smarty_tpl->tpl_vars['wt_settings']->value['position']=="center_top") {?>checked="checked"<?php }?>>
                </td>
                <td class=" center">
                    <input name="wt_settings[position]" type="radio" value="right_top" <?php if ($_smarty_tpl->tpl_vars['wt_settings']->value['position']=="right_top") {?>checked="checked"<?php }?>>
                </td>
            </tr>
            <tr>
                <td class="center">
                    <input name="wt_settings[position]" type="radio" value="left_center" <?php if ($_smarty_tpl->tpl_vars['wt_settings']->value['position']=="left_center") {?>checked="checked"<?php }?>>
                </td>
                <td class="center">
                    <input name="wt_settings[position]" type="radio" value="center_center" <?php if ($_smarty_tpl->tpl_vars['wt_settings']->value['position']=="center_center") {?>checked="checked"<?php }?>>
                </td>
                <td class="center">
                    <input name="wt_settings[position]" type="radio" value="right_center" <?php if ($_smarty_tpl->tpl_vars['wt_settings']->value['position']=="right_center") {?>checked="checked"<?php }?>>
                </td>
            </tr>
            <tr>
                <td class="center">
                    <input name="wt_settings[position]" type="radio" value="left_bottom" <?php if ($_smarty_tpl->tpl_vars['wt_settings']->value['position']=="left_bottom") {?>checked="checked"<?php }?>>
                </td>
                <td class="center">
                    <input name="wt_settings[position]" type="radio" value="center_bottom" <?php if ($_smarty_tpl->tpl_vars['wt_settings']->value['position']=="center_bottom") {?>checked="checked"<?php }?>>
                </td>
                <td class="center">
                    <input name="wt_settings[position]" type="radio" value="right_bottom" <?php if (!$_smarty_tpl->tpl_vars['wt_settings']->value['position']||$_smarty_tpl->tpl_vars['wt_settings']->value['position']=="right_bottom") {?>checked="checked"<?php }?>>
                </td>
            </tr>
            </table>
        </div>
    </div>
</div>
<?php if (fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
Tygh.$(document).ready(function()<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'ISO-8859-1');?>

var $ = Tygh.$;
<?php if ($_smarty_tpl->tpl_vars['settings']->value['Stores']['default_state_update_for_all']!='active') {?>
    $('#wt_graphic_watermark').find('.fileuploader').hide();
    $('#wt_settings_block').find(':input').prop('disabled', true);
<?php }?>

    $('.cm-update-for-all-icon[data-ca-disable-id=wt_settings]').on('click', function() {
        $(this).toggleClass('visible');
        $('#wt_settings_block').find(':input').prop('disabled', !$(this).hasClass('visible'));
        if ($(this).hasClass('visible')) {
            if ($('#wt_graphic_watermark').is(':visible')) {
                $('#wt_text_watermark').switchAvailability(true);
            } else {
                $('#wt_graphic_watermark').switchAvailability(true);
            }
            $('#wt_graphic_watermark').find('.fileuploader').show();
        } else {
            $('#wt_graphic_watermark').find('.fileuploader').hide();
        }
        return false;
    });

<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
);
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
