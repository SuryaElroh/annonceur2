<?php /* Smarty version Smarty-3.1.19, created on 2018-03-22 10:47:22
         compiled from "C:\wamp64\www\workshop\prestashop\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81175ab37baa6e9301-69923421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a46df6a3b7521b3e00b8d942a3dea64b85206cd' => 
    array (
      0 => 'C:\\wamp64\\www\\workshop\\prestashop\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1521638180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81175ab37baa6e9301-69923421',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ab37baa6f6869_59047727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab37baa6f6869_59047727')) {function content_5ab37baa6f6869_59047727($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
