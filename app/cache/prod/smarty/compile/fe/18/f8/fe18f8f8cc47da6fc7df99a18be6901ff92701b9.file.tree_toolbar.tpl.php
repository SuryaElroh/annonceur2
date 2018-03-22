<?php /* Smarty version Smarty-3.1.19, created on 2018-03-22 10:57:43
         compiled from "C:\wamp64\www\workshop\prestashop\admin599emwej3\themes\default\template\helpers\tree\tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185065ab37e17826b32-24714078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe18f8f8cc47da6fc7df99a18be6901ff92701b9' => 
    array (
      0 => 'C:\\wamp64\\www\\workshop\\prestashop\\admin599emwej3\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1521638175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185065ab37e17826b32-24714078',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ab37e17885169_33267250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab37e17885169_33267250')) {function content_5ab37e17885169_33267250($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div>
<?php }} ?>
