<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 08:42:48
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/common/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13047694425ee234d80c62f9-93969632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4c7e40ff27ac7f1a4535319e9753a2f31f2a0b2' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/common/calendar.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13047694425ee234d80c62f9-93969632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'date_id' => 0,
    'date_name' => 0,
    'date_meta' => 0,
    'date_val' => 0,
    'date_format' => 0,
    'extra' => 0,
    'show_time' => 0,
    'time_name' => 0,
    'ldelim' => 0,
    'start_year' => 0,
    'min_date' => 0,
    'max_date' => 0,
    'rdelim' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee234d80f0cf1_48225868',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee234d80f0cf1_48225868')) {function content_5ee234d80f0cf1_48225868($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_block_inline_script')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('weekday_abr_0','weekday_abr_1','weekday_abr_2','weekday_abr_3','weekday_abr_4','weekday_abr_5','weekday_abr_6','month_name_abr_1','month_name_abr_2','month_name_abr_3','month_name_abr_4','month_name_abr_5','month_name_abr_6','month_name_abr_7','month_name_abr_8','month_name_abr_9','month_name_abr_10','month_name_abr_11','month_name_abr_12'));
?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_date_format']=="month_first") {?>
    <?php $_smarty_tpl->tpl_vars["date_format"] = new Smarty_variable("%m/%d/%Y", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["date_format"] = new Smarty_variable("%d/%m/%Y", null, 0);?>
<?php }?>

<div class="calendar">
    <input type="text" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="<?php if ($_smarty_tpl->tpl_vars['date_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['date_meta']->value, ENT_QUOTES, 'ISO-8859-1');
}?> cm-calendar" value="<?php if ($_smarty_tpl->tpl_vars['date_val']->value) {
echo htmlspecialchars(smarty_modifier_date_format(fn_parse_date($_smarty_tpl->tpl_vars['date_val']->value),((string)$_smarty_tpl->tpl_vars['date_format']->value)), ENT_QUOTES, 'ISO-8859-1');
}?>" <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>
 size="10" />
    <?php if ($_smarty_tpl->tpl_vars['show_time']->value) {?>
    <input class="input-time" size="5" maxlength="5" type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['time_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
" value="<?php if ($_smarty_tpl->tpl_vars['date_val']->value) {
echo htmlspecialchars(smarty_modifier_date_format(fn_parse_date($_smarty_tpl->tpl_vars['date_val']->value),"%H:%M"), ENT_QUOTES, 'ISO-8859-1');
}?>" placeholder="00:00" />
    <?php }?>
    <span data-ca-external-focus-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
" class="icon-calendar cm-external-focus"></span>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $) <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'ISO-8859-1');?>

    $.ceEvent('on', 'ce.commoninit', function(context) {
        $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_id']->value, ENT_QUOTES, 'ISO-8859-1');?>
').datepicker({
            changeMonth: true,
            duration: 'fast',
            changeYear: true,
            numberOfMonths: 1,
            selectOtherMonths: true,
            showOtherMonths: true,
            firstDay: <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_week_format']=="sunday_first") {?>0<?php } else { ?>1<?php }?>,
            dayNamesMin: ['<?php echo strtr($_smarty_tpl->__("weekday_abr_0"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->__("weekday_abr_1"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->__("weekday_abr_2"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->__("weekday_abr_3"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->__("weekday_abr_4"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->__("weekday_abr_5"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->__("weekday_abr_6"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'],
            monthNamesShort: ['<?php echo strtr($_smarty_tpl->__("month_name_abr_1"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->__("month_name_abr_2"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->__("month_name_abr_3"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->__("month_name_abr_4"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->__("month_name_abr_5"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->__("month_name_abr_6"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->__("month_name_abr_7"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->__("month_name_abr_8"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->__("month_name_abr_9"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->__("month_name_abr_10"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->__("month_name_abr_11"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->__("month_name_abr_12"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'],
            yearRange: '<?php if ($_smarty_tpl->tpl_vars['start_year']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['start_year']->value, ENT_QUOTES, 'ISO-8859-1');
} else { ?>c-100<?php }?>:c+10',
            <?php if ($_smarty_tpl->tpl_vars['min_date']->value||$_smarty_tpl->tpl_vars['min_date']->value===0) {?>minDate: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['min_date']->value, ENT_QUOTES, 'ISO-8859-1');?>
,<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['max_date']->value||$_smarty_tpl->tpl_vars['max_date']->value===0) {?>maxDate: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['max_date']->value, ENT_QUOTES, 'ISO-8859-1');?>
,<?php }?>
            dateFormat: '<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_date_format']=="month_first") {?>mm/dd/yy<?php } else { ?>dd/mm/yy<?php }?>'
        });
    });
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'ISO-8859-1');?>
(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
