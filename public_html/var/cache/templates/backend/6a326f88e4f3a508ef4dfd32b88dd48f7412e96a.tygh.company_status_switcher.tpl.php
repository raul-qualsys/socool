<?php /* Smarty version Smarty-3.1.21, created on 2020-07-01 05:56:45
         compiled from "/var/www/html/socool.mx/public_html/design/backend/templates/views/companies/components/company_status_switcher.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6343101895efc6beddbaf36-59365956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a326f88e4f3a508ef4dfd32b88dd48f7412e96a' => 
    array (
      0 => '/var/www/html/socool.mx/public_html/design/backend/templates/views/companies/components/company_status_switcher.tpl',
      1 => 1564032795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6343101895efc6beddbaf36-59365956',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5efc6beddc48b1_10573566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5efc6beddc48b1_10573566')) {function content_5efc6beddc48b1_10573566($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/html/socool.mx/public_html/app/functions/smarty_plugins/modifier.enum.php';
?><?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'ISO-8859-1');?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("StorefrontStatuses::OPEN"), ENT_QUOTES, 'ISO-8859-1');?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("StorefrontStatuses::CLOSED"), ENT_QUOTES, 'ISO-8859-1');?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'ISO-8859-1');?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('meta'=>"company-switch-storefront-status-button",'id'=>"switch_storefront_status_".((string)$_smarty_tpl->tpl_vars['company']->value['company_id']),'checked'=>$_smarty_tpl->tpl_vars['company']->value['storefront_status']==smarty_modifier_enum("StorefrontStatuses::OPEN"),'extra_attrs'=>array("data-ca-company-id"=>$_tmp1,"data-ca-opened-status"=>$_tmp2,"data-ca-closed-status"=>$_tmp3,"data-ca-return-url"=>$_tmp4)), 0);?>

<?php }} ?>
