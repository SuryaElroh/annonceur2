<?php /* Smarty version Smarty-3.1.19, created on 2018-03-22 10:47:20
         compiled from "C:\wamp64\www\workshop\prestashop\admin599emwej3\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159745ab37ba8b6da94-58187088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f7600d1f7231f56c8adc0fd675aa5da385d419a' => 
    array (
      0 => 'C:\\wamp64\\www\\workshop\\prestashop\\admin599emwej3\\themes\\default\\template\\content.tpl',
      1 => 1521638172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159745ab37ba8b6da94-58187088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ab37ba8b88165_92914042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab37ba8b88165_92914042')) {function content_5ab37ba8b88165_92914042($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
