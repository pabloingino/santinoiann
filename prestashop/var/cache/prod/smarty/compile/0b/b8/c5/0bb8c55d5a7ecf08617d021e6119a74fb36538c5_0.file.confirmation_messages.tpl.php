<?php
/* Smarty version 3.1.33, created on 2018-12-10 12:09:45
  from 'E:\xampp\htdocs\prestashop\admin8460s6v2n\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0e81b9154a82_82549212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bb8c55d5a7ecf08617d021e6119a74fb36538c5' => 
    array (
      0 => 'E:\\xampp\\htdocs\\prestashop\\admin8460s6v2n\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1542981057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0e81b9154a82_82549212 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
