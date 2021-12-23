<?php /* Smarty version Smarty-3.1.21, created on 2020-06-11 08:39:43
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/common/comet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1016089595ee2341fbbd022-60429557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b34dcbb3d46988b8f8cc3c2aa059c82cd3d88355' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/common/comet.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1016089595ee2341fbbd022-60429557',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5ee2341fbbeb47_95491848',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee2341fbbeb47_95491848')) {function content_5ee2341fbbeb47_95491848($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->__("processing");?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
            
            <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div><?php }} ?>
