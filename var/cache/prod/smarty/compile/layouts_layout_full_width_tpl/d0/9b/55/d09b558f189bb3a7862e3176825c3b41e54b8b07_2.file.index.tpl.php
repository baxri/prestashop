<?php
/* Smarty version 3.1.32, created on 2018-09-10 22:30:42
  from '/Users/mac/Documents/php/prestashop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b96b85269a451_00165213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd09b558f189bb3a7862e3176825c3b41e54b8b07' => 
    array (
      0 => '/Users/mac/Documents/php/prestashop/themes/classic/templates/index.tpl',
      1 => 1536603732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b96b85269a451_00165213 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6500952875b96b852697fb2_16676377', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_17144371445b96b852698582_72029568 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_17346315745b96b852699256_21812480 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_912109155b96b852698dc2_83341672 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17346315745b96b852699256_21812480', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_6500952875b96b852697fb2_16676377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_6500952875b96b852697fb2_16676377',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17144371445b96b852698582_72029568',
  ),
  'page_content' => 
  array (
    0 => 'Block_912109155b96b852698dc2_83341672',
  ),
  'hook_home' => 
  array (
    0 => 'Block_17346315745b96b852699256_21812480',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17144371445b96b852698582_72029568', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_912109155b96b852698dc2_83341672', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
