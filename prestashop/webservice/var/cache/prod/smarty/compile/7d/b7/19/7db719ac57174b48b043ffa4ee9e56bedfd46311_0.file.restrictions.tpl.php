<?php
/* Smarty version 3.1.33, created on 2018-12-10 12:07:48
  from 'E:\xampp\htdocs\prestashop\admin8460s6v2n\themes\default\template\controllers\payment_preferences\restrictions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0e8144394371_14994996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7db719ac57174b48b043ffa4ee9e56bedfd46311' => 
    array (
      0 => 'E:\\xampp\\htdocs\\prestashop\\admin8460s6v2n\\themes\\default\\template\\controllers\\payment_preferences\\restrictions.tpl',
      1 => 1542981059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0e8144394371_14994996 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_submit']->value,'html','UTF-8' ));?>
" method="post" id="form_<?php echo $_smarty_tpl->tpl_vars['list']->value['name_id'];?>
" class="form-horizontal">
	<div class="panel">
		<h3>
			<i class="<?php echo $_smarty_tpl->tpl_vars['list']->value['icon'];?>
"></i>
			<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>

		</h3>
		<p class="help-block"><?php echo $_smarty_tpl->tpl_vars['list']->value['desc'];?>
</p>
		<div class="row table-responsive clearfix ">
			<div class="overflow-y">
				<table class="table">
					<thead>
						<tr>
							<th style="width:40%"><span class="title_box"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</span></th>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_modules']->value, 'module');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
?>
								<?php if ($_smarty_tpl->tpl_vars['module']->value->active) {?>
									<th class="text-center">
										<?php if ($_smarty_tpl->tpl_vars['list']->value['name_id'] != 'currency' || $_smarty_tpl->tpl_vars['module']->value->currencies_mode == 'checkbox') {?>
											<input type="hidden" id="checkedBox_<?php echo $_smarty_tpl->tpl_vars['list']->value['name_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" value="checked"/>
											<a href="javascript:checkPaymentBoxes('<?php echo $_smarty_tpl->tpl_vars['list']->value['name_id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
')">
										<?php }?>
										<?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>

										<?php if ($_smarty_tpl->tpl_vars['list']->value['name_id'] != 'currency' || $_smarty_tpl->tpl_vars['module']->value->currencies_mode == 'checkbox') {?>
											</a>
										<?php }?>
									</th>
								<?php }?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</tr>
					</thead>
					<tbody>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value['items'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
						<tr>
							<td>
								<span><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span>
							</td>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_modules']->value, 'module', false, 'key_module');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key_module']->value => $_smarty_tpl->tpl_vars['module']->value) {
?>
								<?php if ($_smarty_tpl->tpl_vars['module']->value->active) {?>
									<td class="text-center">
										<?php $_smarty_tpl->_assignInScope('type', 'null');?>
										<?php if (!$_smarty_tpl->tpl_vars['item']->value['check_list'][$_smarty_tpl->tpl_vars['key_module']->value]) {?>
																					<?php } elseif ($_smarty_tpl->tpl_vars['list']->value['name_id'] === 'currency') {?>
											<?php if ($_smarty_tpl->tpl_vars['module']->value->currencies && $_smarty_tpl->tpl_vars['module']->value->currencies_mode == 'checkbox') {?>
												<?php $_smarty_tpl->_assignInScope('type', 'checkbox');?>
											<?php } elseif ($_smarty_tpl->tpl_vars['module']->value->currencies && $_smarty_tpl->tpl_vars['module']->value->currencies_mode == 'radio') {?>
												<?php $_smarty_tpl->_assignInScope('type', 'radio');?>
											<?php }?>
										<?php } else { ?>
											<?php $_smarty_tpl->_assignInScope('type', 'checkbox');?>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['type']->value != 'null') {?>
											<input type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
_<?php echo $_smarty_tpl->tpl_vars['list']->value['name_id'];?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['list']->value['identifier']];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['check_list'][$_smarty_tpl->tpl_vars['key_module']->value] == 'checked') {?>checked="checked"<?php }?>/>
										<?php } else { ?>
											<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
_<?php echo $_smarty_tpl->tpl_vars['list']->value['name_id'];?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['list']->value['identifier']];?>
"/>--
										<?php }?>
									</td>
								<?php }?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</tr>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php if ($_smarty_tpl->tpl_vars['list']->value['name_id'] === 'currency') {?>
						<tr>
							<td>
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer currency','d'=>'Admin.Payment.Feature'),$_smarty_tpl ) );?>
</span>
							</td>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_modules']->value, 'module');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
?>
								<?php if ($_smarty_tpl->tpl_vars['module']->value->active) {?>
									<td class="text-center">
										<?php if ($_smarty_tpl->tpl_vars['module']->value->currencies && $_smarty_tpl->tpl_vars['module']->value->currencies_mode == 'radio') {?>
											<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
_<?php echo $_smarty_tpl->tpl_vars['list']->value['name_id'];?>
[]" value="-1"<?php if (in_array(-1,$_smarty_tpl->tpl_vars['module']->value->{$_smarty_tpl->tpl_vars['list']->value['name_id']})) {?> checked="checked"
										<?php }?> />
										<?php } else { ?>
											--
										<?php }?>
									</td>
								<?php }?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</tr>
						<tr>
							<td>
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop default currency','d'=>'Admin.Payment.Feature'),$_smarty_tpl ) );?>
</span>
							</td>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_modules']->value, 'module');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
?>
								<?php if ($_smarty_tpl->tpl_vars['module']->value->active) {?>
									<td class="text-center">
										<?php if ($_smarty_tpl->tpl_vars['module']->value->currencies && $_smarty_tpl->tpl_vars['module']->value->currencies_mode == 'radio') {?>
											<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
_<?php echo $_smarty_tpl->tpl_vars['list']->value['name_id'];?>
[]" value="-2"<?php if (in_array(-2,$_smarty_tpl->tpl_vars['module']->value->{$_smarty_tpl->tpl_vars['list']->value['name_id']})) {?> checked="checked"
										<?php }?>
											/>
										<?php } else { ?>
											--
										<?php }?>
									</td>
								<?php }?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</tr>
					<?php }?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="panel-footer">
			<button type="submit" class="btn btn-default pull-right" name="submitModule<?php echo $_smarty_tpl->tpl_vars['list']->value['name_id'];?>
">
				<i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

			</button>
		</div>
	</div>
</form>
<?php }
}
