<?php /* Smarty version Smarty-3.1.21, created on 2020-06-12 03:17:52
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/views/sitemap/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3984627015ee33a30b372c7-63519930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f44c64d10c13f2fe4f62e8155050b0b8c3d902c' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/views/sitemap/view.tpl',
      1 => 1565855938,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3984627015ee33a30b372c7-63519930',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'language_direction' => 0,
    'sitemap_settings' => 0,
    'sitemap' => 0,
    'direction' => 0,
    'name' => 0,
    'section' => 0,
    'link' => 0,
    'category' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee33a30be68a3_34773951',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee33a30be68a3_34773951')) {function content_5ee33a30be68a3_34773951($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('cart_info','information','catalog','sitemap','cart_info','information','catalog','sitemap'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['language_direction']->value=="rtl") {?>
    <?php $_smarty_tpl->tpl_vars['direction'] = new Smarty_variable("right", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['direction'] = new Smarty_variable("left", null, 0);?>
<?php }?>

<div class="ty-sitemap">
    <div class="ty-sitemap__section">
        <h2 class="ty-sitemap__section-title"><?php echo $_smarty_tpl->__("cart_info");?>
</h2>
        <div class="ty-sitemap__section-wrapper">
            <?php if ($_smarty_tpl->tpl_vars['sitemap_settings']->value['show_site_info']=="Y") {?>
                <h3 class="ty-sitemap__section-sub-title"><?php echo $_smarty_tpl->__("information");?>
</h3>
                <ul>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/pages/components/pages_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tree'=>$_smarty_tpl->tpl_vars['sitemap']->value['pages_tree'],'root'=>true,'no_delim'=>true,'direction'=>$_smarty_tpl->tpl_vars['direction']->value), 0);?>

                </ul>
            <?php }?>
        </div>
            <div class="ty-sitemap__section-wrapper">
            <?php if ($_smarty_tpl->tpl_vars['sitemap']->value['custom']) {?>
                <?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sitemap']->value['custom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['section']->key;
?>
                    <h3 class="ty-sitemap__section-sub-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
</h3>
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['section']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
                            <li><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['link']->value['link_href']), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['link'], ENT_QUOTES, 'ISO-8859-1');?>
</a></li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            <?php }?>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="ty-sitemap__section">
        <h2 class="ty-sitemap__section-title"><?php echo $_smarty_tpl->__("catalog");?>
</h2>
        <div class="ty-sitemap__tree">
            <?php if ($_smarty_tpl->tpl_vars['sitemap']->value['categories']||$_smarty_tpl->tpl_vars['sitemap']->value['categories_tree']) {?>
                <?php if ($_smarty_tpl->tpl_vars['sitemap']->value['categories']) {?>
                    <ul class="ty-sitemap__tree-list">
                        <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sitemap']->value['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                            <li class="ty-sitemap__tree-list-item"><a class="ty-sitemap__tree-list-a ty-strong" href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'ISO-8859-1');?>
</a></li>
                        <?php } ?>
                    </ul>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['sitemap']->value['categories_tree']) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/sitemap/components/categories_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('all_categories_tree'=>$_smarty_tpl->tpl_vars['sitemap']->value['categories_tree'],'background'=>"white",'direction'=>$_smarty_tpl->tpl_vars['direction']->value), 0);?>

                <?php }?>
            <?php }?>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->__("sitemap");
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/sitemap/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/sitemap/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['language_direction']->value=="rtl") {?>
    <?php $_smarty_tpl->tpl_vars['direction'] = new Smarty_variable("right", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['direction'] = new Smarty_variable("left", null, 0);?>
<?php }?>

<div class="ty-sitemap">
    <div class="ty-sitemap__section">
        <h2 class="ty-sitemap__section-title"><?php echo $_smarty_tpl->__("cart_info");?>
</h2>
        <div class="ty-sitemap__section-wrapper">
            <?php if ($_smarty_tpl->tpl_vars['sitemap_settings']->value['show_site_info']=="Y") {?>
                <h3 class="ty-sitemap__section-sub-title"><?php echo $_smarty_tpl->__("information");?>
</h3>
                <ul>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/pages/components/pages_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tree'=>$_smarty_tpl->tpl_vars['sitemap']->value['pages_tree'],'root'=>true,'no_delim'=>true,'direction'=>$_smarty_tpl->tpl_vars['direction']->value), 0);?>

                </ul>
            <?php }?>
        </div>
            <div class="ty-sitemap__section-wrapper">
            <?php if ($_smarty_tpl->tpl_vars['sitemap']->value['custom']) {?>
                <?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sitemap']->value['custom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['section']->key;
?>
                    <h3 class="ty-sitemap__section-sub-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'ISO-8859-1');?>
</h3>
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['section']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
                            <li><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['link']->value['link_href']), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['link'], ENT_QUOTES, 'ISO-8859-1');?>
</a></li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            <?php }?>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="ty-sitemap__section">
        <h2 class="ty-sitemap__section-title"><?php echo $_smarty_tpl->__("catalog");?>
</h2>
        <div class="ty-sitemap__tree">
            <?php if ($_smarty_tpl->tpl_vars['sitemap']->value['categories']||$_smarty_tpl->tpl_vars['sitemap']->value['categories_tree']) {?>
                <?php if ($_smarty_tpl->tpl_vars['sitemap']->value['categories']) {?>
                    <ul class="ty-sitemap__tree-list">
                        <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sitemap']->value['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                            <li class="ty-sitemap__tree-list-item"><a class="ty-sitemap__tree-list-a ty-strong" href="<?php echo htmlspecialchars(fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['category']->value['category_id'])), ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category'], ENT_QUOTES, 'ISO-8859-1');?>
</a></li>
                        <?php } ?>
                    </ul>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['sitemap']->value['categories_tree']) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/sitemap/components/categories_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('all_categories_tree'=>$_smarty_tpl->tpl_vars['sitemap']->value['categories_tree'],'background'=>"white",'direction'=>$_smarty_tpl->tpl_vars['direction']->value), 0);?>

                <?php }?>
            <?php }?>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->__("sitemap");
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?><?php }} ?>
