<?php
/* Smarty version 3.1.32, created on 2018-09-12 13:56:21
  from 'D:\xampp7.1\htdocs\prestashop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b98e2c558ffa9_83218690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76192b040223c6dfdc40001cef89e3f248aa3f8b' => 
    array (
      0 => 'D:\\xampp7.1\\htdocs\\prestashop\\themes\\classic\\templates\\page.tpl',
      1 => 1536737976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b98e2c558ffa9_83218690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11891406345b98e2c558a558_92067277', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_4312641355b98e2c558b2d1_61874007 extends Smarty_Internal_Block
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
class Block_12516097145b98e2c558ab90_18327374 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4312641355b98e2c558b2d1_61874007', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_19997359195b98e2c558dcf7_60574069 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_5429000875b98e2c558e424_94066446 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16547120805b98e2c558d752_43596982 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19997359195b98e2c558dcf7_60574069', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5429000875b98e2c558e424_94066446', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_20610171195b98e2c558f366_29209747 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_8676617945b98e2c558eea0_43005309 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20610171195b98e2c558f366_29209747', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_11891406345b98e2c558a558_92067277 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11891406345b98e2c558a558_92067277',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_12516097145b98e2c558ab90_18327374',
  ),
  'page_title' => 
  array (
    0 => 'Block_4312641355b98e2c558b2d1_61874007',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_16547120805b98e2c558d752_43596982',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_19997359195b98e2c558dcf7_60574069',
  ),
  'page_content' => 
  array (
    0 => 'Block_5429000875b98e2c558e424_94066446',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_8676617945b98e2c558eea0_43005309',
  ),
  'page_footer' => 
  array (
    0 => 'Block_20610171195b98e2c558f366_29209747',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12516097145b98e2c558ab90_18327374', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16547120805b98e2c558d752_43596982', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8676617945b98e2c558eea0_43005309', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
