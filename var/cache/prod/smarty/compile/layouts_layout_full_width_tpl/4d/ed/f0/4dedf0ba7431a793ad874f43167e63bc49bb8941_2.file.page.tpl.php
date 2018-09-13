<?php
/* Smarty version 3.1.32, created on 2018-09-13 23:26:32
  from '/Users/mac/Documents/php/prestashop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9ab9e86d1c94_65776656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dedf0ba7431a793ad874f43167e63bc49bb8941' => 
    array (
      0 => '/Users/mac/Documents/php/prestashop/themes/classic/templates/page.tpl',
      1 => 1536603732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9ab9e86d1c94_65776656 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20037562465b9ab9e86cb203_64014281', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_15779118655b9ab9e86cbff0_24157872 extends Smarty_Internal_Block
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
class Block_1313317735b9ab9e86cb830_29502310 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15779118655b9ab9e86cbff0_24157872', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_17879746195b9ab9e86cf674_99481810 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_5926982675b9ab9e86cfe99_28964358 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16878677065b9ab9e86cf097_49314106 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17879746195b9ab9e86cf674_99481810', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5926982675b9ab9e86cfe99_28964358', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_8698906065b9ab9e86d0f82_51288799 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_11326764585b9ab9e86d0a57_50545576 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8698906065b9ab9e86d0f82_51288799', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_20037562465b9ab9e86cb203_64014281 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20037562465b9ab9e86cb203_64014281',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1313317735b9ab9e86cb830_29502310',
  ),
  'page_title' => 
  array (
    0 => 'Block_15779118655b9ab9e86cbff0_24157872',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_16878677065b9ab9e86cf097_49314106',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17879746195b9ab9e86cf674_99481810',
  ),
  'page_content' => 
  array (
    0 => 'Block_5926982675b9ab9e86cfe99_28964358',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_11326764585b9ab9e86d0a57_50545576',
  ),
  'page_footer' => 
  array (
    0 => 'Block_8698906065b9ab9e86d0f82_51288799',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1313317735b9ab9e86cb830_29502310', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16878677065b9ab9e86cf097_49314106', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11326764585b9ab9e86d0a57_50545576', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
