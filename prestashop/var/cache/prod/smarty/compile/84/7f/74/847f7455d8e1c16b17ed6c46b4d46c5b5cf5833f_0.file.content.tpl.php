<?php
/* Smarty version 3.1.33, created on 2018-11-23 11:20:20
  from 'C:\xampp\htdocs\prestashop\admin609bfvszx\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf80ca42f3420_10650701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '847f7455d8e1c16b17ed6c46b4d46c5b5cf5833f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin609bfvszx\\themes\\default\\template\\content.tpl',
      1 => 1542981059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf80ca42f3420_10650701 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
