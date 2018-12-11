<?php
/* Smarty version 3.1.33, created on 2018-11-27 12:04:29
  from 'E:\xampp\htdocs\prestashop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfd5cfdbeb4a7_76926588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '810ed03c8ba1204058c196d7d3b2036a48c38fcc' => 
    array (
      0 => 'E:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\page.tpl',
      1 => 1542981070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfd5cfdbeb4a7_76926588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15109218485bfd5cfdb87c12_23231322', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_9772616305bfd5cfdb884e0_84035845 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_2456344415bfd5cfdb88038_18514978 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9772616305bfd5cfdb884e0_84035845', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_16140753575bfd5cfdbe9be9_99871096 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_17315651685bfd5cfdbea0f8_49335296 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_6948579245bfd5cfdbe97d1_76524637 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16140753575bfd5cfdbe9be9_99871096', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17315651685bfd5cfdbea0f8_49335296', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_15231907035bfd5cfdbeaba2_87915286 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_7629368615bfd5cfdbea856_67623465 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15231907035bfd5cfdbeaba2_87915286', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_15109218485bfd5cfdb87c12_23231322 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15109218485bfd5cfdb87c12_23231322',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_2456344415bfd5cfdb88038_18514978',
  ),
  'page_title' => 
  array (
    0 => 'Block_9772616305bfd5cfdb884e0_84035845',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_6948579245bfd5cfdbe97d1_76524637',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_16140753575bfd5cfdbe9be9_99871096',
  ),
  'page_content' => 
  array (
    0 => 'Block_17315651685bfd5cfdbea0f8_49335296',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_7629368615bfd5cfdbea856_67623465',
  ),
  'page_footer' => 
  array (
    0 => 'Block_15231907035bfd5cfdbeaba2_87915286',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2456344415bfd5cfdb88038_18514978', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6948579245bfd5cfdbe97d1_76524637', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7629368615bfd5cfdbea856_67623465', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
