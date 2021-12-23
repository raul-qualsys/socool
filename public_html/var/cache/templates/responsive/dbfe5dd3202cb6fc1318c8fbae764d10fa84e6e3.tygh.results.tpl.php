<?php /* Smarty version Smarty-3.1.21, created on 2020-06-12 17:25:52
         compiled from "/var/www/html/socool.mx/public_html/design/themes/responsive/templates/views/search/results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11428571265ee400f02fa490-18399562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbfe5dd3202cb6fc1318c8fbae764d10fa84e6e3' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/themes/responsive/templates/views/search/results.tpl',
      1 => 1565855938,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11428571265ee400f02fa490-18399562',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'search' => 0,
    'search_results' => 0,
    'result' => 0,
    'title_extra' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee400f03238d3_71802069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee400f03238d3_71802069')) {function content_5ee400f03238d3_71802069($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('total_results','text_no_matching_results_found','search_results','total_results','text_no_matching_results_found','search_results'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
ob_start();
echo $_smarty_tpl->__("total_results");
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["title_extra"] = new Smarty_variable($_tmp1.": ".((string)$_smarty_tpl->tpl_vars['search']->value['total_items']), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['search_results']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <?php  $_smarty_tpl->tpl_vars["result"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["result"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['search_results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["result"]->key => $_smarty_tpl->tpl_vars["result"]->value) {
$_smarty_tpl->tpl_vars["result"]->_loop = true;
?>
    
    <?php if (!$_smarty_tpl->tpl_vars['result']->value['first']) {?><hr /><?php }?>
    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"search:search_results")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"search:search_results"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['result']->value['object']=="products") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/one_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['result']->value,'key'=>$_smarty_tpl->tpl_vars['result']->value['id']), 0);?>

    
    <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['object']=="pages") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/pages/components/one_page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('page'=>$_smarty_tpl->tpl_vars['result']->value), 0);?>

    <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"search:search_results"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    
    <?php } ?>
    
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php } else { ?>
    <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_matching_results_found");?>
</p>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><span class="ty-mainbox-title__left"><?php echo $_smarty_tpl->__("search_results");?>
</span><span class="ty-mainbox-title__right"><?php echo $_smarty_tpl->tpl_vars['title_extra']->value;?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
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
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/search/results.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/search/results.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
ob_start();
echo $_smarty_tpl->__("total_results");
$_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["title_extra"] = new Smarty_variable($_tmp2.": ".((string)$_smarty_tpl->tpl_vars['search']->value['total_items']), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['search_results']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <?php  $_smarty_tpl->tpl_vars["result"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["result"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['search_results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["result"]->key => $_smarty_tpl->tpl_vars["result"]->value) {
$_smarty_tpl->tpl_vars["result"]->_loop = true;
?>
    
    <?php if (!$_smarty_tpl->tpl_vars['result']->value['first']) {?><hr /><?php }?>
    
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"search:search_results")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"search:search_results"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['result']->value['object']=="products") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/one_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['result']->value,'key'=>$_smarty_tpl->tpl_vars['result']->value['id']), 0);?>

    
    <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['object']=="pages") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/pages/components/one_page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('page'=>$_smarty_tpl->tpl_vars['result']->value), 0);?>

    <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"search:search_results"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    
    <?php } ?>
    
    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php } else { ?>
    <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_matching_results_found");?>
</p>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><span class="ty-mainbox-title__left"><?php echo $_smarty_tpl->__("search_results");?>
</span><span class="ty-mainbox-title__right"><?php echo $_smarty_tpl->tpl_vars['title_extra']->value;?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?><?php }} ?>
