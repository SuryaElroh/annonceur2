<?php /* Smarty version Smarty-3.1.19, created on 2018-03-22 10:47:18
         compiled from "C:\wamp64\www\workshop\prestashop\modules\welcome\views\contents\end.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81115ab37ba6e61d93-38092331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a7e35c0c2c4471c2dc6dd89c4bc79e05a07dabe' => 
    array (
      0 => 'C:\\wamp64\\www\\workshop\\prestashop\\modules\\welcome\\views\\contents\\end.tpl',
      1 => 1521638180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81115ab37ba6e61d93-38092331',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ab37ba6e8f370_61364678',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab37ba6e8f370_61364678')) {function content_5ab37ba6e8f370_61364678($_smarty_tpl) {?>

<div id="onboarding-welcome" class="modal-body">
    <div class="col-12">
        <button class="onboarding-button-next pull-right close" type="button">&times;</button>
        <h2 class="text-center text-md-center"><?php echo smartyTranslate(array('s'=>'Over to you!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</h2>
    </div>
    <div class="col-12">
        <p class="text-center text-md-center">
          <?php echo smartyTranslate(array('s'=>'You\'ve seen the essential, but there\'s a lot more to explore.','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
<br />
          <?php echo smartyTranslate(array('s'=>'Some ressources can help you go further:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

        </p>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6  justify-content-center text-center text-md-center link-container">
              <a class="final-link" href="http://doc.prestashop.com/display/PS17/Getting+Started" target="_blank">
                <div class="starter-guide"></div>
                <span class="link"><?php echo smartyTranslate(array('s'=>'Starter Guide','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</span>
              </a>
            </div>
            <div class="col-md-6 text-center text-md-center link-container">
              <a class="final-link" href="https://www.prestashop.com/forums/" target="_blank">
                <div class="forum"></div>
                <span class="link"><?php echo smartyTranslate(array('s'=>'Forum','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</span>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 text-center text-md-center link-container">
              <a class="final-link" href="https://www.prestashop.com/en/training-prestashop" target="_blank">
                <div class="training"></div>
                <span class="link"><?php echo smartyTranslate(array('s'=>'Training','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</span>
              </a>
            </div>
            <div class="col-md-6 text-center text-md-center link-container">
              <a class="final-link" href="https://www.youtube.com/user/prestashop" target="_blank">
                <div class="video-tutorial"></div>
                <span class="link"><?php echo smartyTranslate(array('s'=>'Video tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</span>
              </a>
            </div>
          </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="col-12">
            <div class="text-center text-md-center">
                <button class="btn btn-primary onboarding-button-next"><?php echo smartyTranslate(array('s'=>'I\'m ready','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
            </div>
        </div>
    </div>
</div>
<?php }} ?>
