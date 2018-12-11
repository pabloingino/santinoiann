<?php
/* Smarty version 3.1.33, created on 2018-12-10 16:07:59
  from 'E:\xampp\htdocs\prestashop\admin8460s6v2n\themes\default\template\controllers\orders\_print_pdf_icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0eb98f3eb949_01977983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff4235a92d5eefeaad2a8db59124eea208a3122e' => 
    array (
      0 => 'E:\\xampp\\htdocs\\prestashop\\admin8460s6v2n\\themes\\default\\template\\controllers\\orders\\_print_pdf_icon.tpl',
      1 => 1542981060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0eb98f3eb949_01977983 (Smarty_Internal_Template $_smarty_tpl) {
?>
<span class="btn-group-action">
	<span class="btn-group">
	<?php if (Configuration::get('PS_INVOICE') && $_smarty_tpl->tpl_vars['order']->value->invoice_number) {?>
		<a class="btn btn-default _blank" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'),'html','UTF-8' ));?>
&amp;submitAction=generateInvoicePDF&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">
			<i class="icon-file-text"></i>
		</a>
	<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['order']->value->delivery_number) {?>
		<a class="btn btn-default _blank" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'),'html','UTF-8' ));?>
&amp;submitAction=generateDeliverySlipPDF&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">
			<i class="icon-truck"></i>
		</a>
	<?php }?>
	</span>
</span>
<?php }
}
