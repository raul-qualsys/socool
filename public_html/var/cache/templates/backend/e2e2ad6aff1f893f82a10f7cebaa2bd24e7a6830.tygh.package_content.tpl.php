<?php /* Smarty version Smarty-3.1.21, created on 2020-06-15 09:51:26
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/views/upgrade_center/package_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2361006175ee78aee3db035-46454481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2e2ad6aff1f893f82a10f7cebaa2bd24e7a6830' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/views/upgrade_center/package_content.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2361006175ee78aee3db035-46454481',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'package_id' => 0,
    'content' => 0,
    'file_path' => 0,
    'file_data' => 0,
    'migration' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee78aee3f8746_87488424',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee78aee3f8746_87488424')) {function content_5ee78aee3f8746_87488424($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/html/socool.mx/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('files','migrations','languages','files','action','files','action','change','delete','create','migrations','migrations','languages','languages','close'));
?>
<div id="package_content_<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['package_id']->value,".","_"), ENT_QUOTES, 'ISO-8859-1');?>
">

	<div class="tabs cm-j-tabs">
        <ul class="nav nav-tabs">
        	<?php if ($_smarty_tpl->tpl_vars['content']->value['files']) {?>
            	<li id="tab_files" class="cm-js active"><a><?php echo $_smarty_tpl->__("files");?>
</a></li>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['content']->value['migrations']) {?>
            	<li id="tab_migrations" class="cm-js"><a><?php echo $_smarty_tpl->__("migrations");?>
</a></li>
            <?php }?>

			<?php if ($_smarty_tpl->tpl_vars['content']->value['languages']) {?>
            	<li id="tab_languages" class="cm-js"><a><?php echo $_smarty_tpl->__("languages");?>
</a></li>
            <?php }?>
        </ul>
    </div>
	
	<div class="cm-tabs-content">
	    <?php if ($_smarty_tpl->tpl_vars['content']->value['files']) {?>
		    <div id="content_tab_files">
		    	<div class="table-responsive-wrapper">
					<table class="table table-condensed table-responsive">
					    <thead>
					        <tr>
					            <th><?php echo $_smarty_tpl->__("files");?>
</th>
					            <th class="right"><?php echo $_smarty_tpl->__("action");?>
</th>
					        </tr>
					    </thead>
					    <tbody>
					    	<?php  $_smarty_tpl->tpl_vars['file_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file_data']->_loop = false;
 $_smarty_tpl->tpl_vars['file_path'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['content']->value['files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file_data']->key => $_smarty_tpl->tpl_vars['file_data']->value) {
$_smarty_tpl->tpl_vars['file_data']->_loop = true;
 $_smarty_tpl->tpl_vars['file_path']->value = $_smarty_tpl->tpl_vars['file_data']->key;
?>
						        <tr>
						            <td data-th="<?php echo $_smarty_tpl->__("files");?>
">
						                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file_path']->value, ENT_QUOTES, 'ISO-8859-1');?>

						            </td>
						            <td width="10%" class="right" data-th="<?php echo $_smarty_tpl->__("action");?>
">
						            	<?php if ($_smarty_tpl->tpl_vars['file_data']->value['status']=="changed") {?>
						            		<span class="label label-warning"><?php echo $_smarty_tpl->__("change");?>
</span>
						            	<?php } elseif ($_smarty_tpl->tpl_vars['file_data']->value['status']=="deleted") {?>
						            		<span class="label label-important"><?php echo $_smarty_tpl->__("delete");?>
</span>
						            	<?php } elseif ($_smarty_tpl->tpl_vars['file_data']->value['status']=="new") {?>
						            		<span class="label label-info"><?php echo $_smarty_tpl->__("create");?>
</span>
						            	<?php }?>
						                
						            </td>
						        </tr>
					        <?php } ?>
					    </tbody>
					</table>
				</div>
		    </div>
	    <?php }?>

	    <?php if ($_smarty_tpl->tpl_vars['content']->value['migrations']) {?>
		    <div class="hidden" id="content_tab_migrations">
		    	<div class="table-responsive-wrapper">
					<table class="table table-condensed table-responsive">
					    <thead>
					        <tr>
					            <th><?php echo $_smarty_tpl->__("migrations");?>
</th>
					        </tr>
					    </thead>
					    <tbody>
					    	<?php  $_smarty_tpl->tpl_vars['migration'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['migration']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['content']->value['migrations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['migration']->key => $_smarty_tpl->tpl_vars['migration']->value) {
$_smarty_tpl->tpl_vars['migration']->_loop = true;
?>
						        <tr>
						            <td data-th="<?php echo $_smarty_tpl->__("migrations");?>
">
						                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['migration']->value, ENT_QUOTES, 'ISO-8859-1');?>

						            </td>
						        </tr>
					        <?php } ?>
					    </tbody>
					</table>
				</div>
		    </div>
	    <?php }?>
	    
	    <?php if ($_smarty_tpl->tpl_vars['content']->value['languages']) {?>
		    <div id="content_tab_languages" class="hidden">
		    	<div class="table-responsive-wrapper">
					<table class="table table-condensed table-responsive">
					    <thead>
					        <tr>
					            <th><?php echo $_smarty_tpl->__("languages");?>
</th>
					        </tr>
					    </thead>
					    <tbody>
					    	<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['content']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
						        <tr>
						            <td datat-th="<?php echo $_smarty_tpl->__("languages");?>
">
						                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value, ENT_QUOTES, 'ISO-8859-1');?>

						            </td>
						        </tr>
					        <?php } ?>
					    </tbody>
					</table>
				</div>
		    </div>
	    <?php }?>
    </div>

    <div class="buttons-container">
	    <a class="cm-dialog-closer cm-cancel tool-link btn"><?php echo $_smarty_tpl->__("close");?>
</a>
	</div>


<!--package_content_<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['package_id']->value,".","_"), ENT_QUOTES, 'ISO-8859-1');?>
--></div><?php }} ?>
