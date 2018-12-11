<?php
/* Smarty version 3.1.33, created on 2018-12-10 12:10:00
  from 'E:\xampp\htdocs\prestashop\modules\mercadopago\views\templates\admin\requirements.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0e81c8f412e5_01891894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7eb7badbf9fde654df7c2ceeacbda127441a76b3' => 
    array (
      0 => 'E:\\xampp\\htdocs\\prestashop\\modules\\mercadopago\\views\\templates\\admin\\requirements.tpl',
      1 => 1542984443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0e81c8f412e5_01891894 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="module_form" class="defaultForm form-horizontal" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'htmlall','UTF-8' ));?>
" method="post" enctype="multipart/form-data">
    <div class="panel">
        <div class="panel-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Help','d'=>'Modules.MercadoPago.Admin'),$_smarty_tpl ) );?>
</div>
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-lg-3"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View the log:','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 </label>
                <div class="col-lg-5">
                    <p><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['log']->value,'htmlall','UTF-8' ));?>
" class="btn btn-link" target="_blank" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Click here to see the error log",'mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a></p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-lg-3"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check if your version is:','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tagName']->value,'htmlall','UTF-8' ));?>
</label>
                <div class="col-lg-5">
                    <p><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url']->value,'htmlall','UTF-8' ));?>
" class="btn btn-link" target="_blank" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"You can do the download here",'mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a></p>
                </div>
            </div>            
            <div class="form-group">
                <label class="control-label col-lg-3"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you have problems:','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 </label>
                <div class="col-lg-5">
                    <p><a href="https://www.mercadopago.com.br/developers/pt/support" class="btn btn-link" target="_blank" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Click here to open a ticket",'mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a></p>
                </div>
            </div>           
        </div>
    </div>
</form><?php }
}
