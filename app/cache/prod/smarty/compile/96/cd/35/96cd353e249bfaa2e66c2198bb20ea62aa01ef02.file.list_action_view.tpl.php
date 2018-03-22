<?php /* Smarty version Smarty-3.1.19, created on 2018-03-22 10:54:59
         compiled from "C:\wamp64\www\workshop\prestashop\admin599emwej3\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:255455ab37d73a1fd16-81410861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96cd353e249bfaa2e66c2198bb20ea62aa01ef02' => 
    array (
      0 => 'C:\\wamp64\\www\\workshop\\prestashop\\admin599emwej3\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1521638176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255455ab37d73a1fd16-81410861',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ab37d73a404b9_35657171',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab37d73a404b9_35657171')) {function content_5ab37d73a404b9_35657171($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
