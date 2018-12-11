<?php
/* Smarty version 3.1.33, created on 2018-11-23 11:58:12
  from 'C:\xampp\htdocs\prestashop\admin609bfvszx\themes\default\template\helpers\list\list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf815848aaa89_70791619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30d75c12fb13c24534bee7b5704e3f3979c0a7e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin609bfvszx\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1542981061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf815848aaa89_70791619 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
