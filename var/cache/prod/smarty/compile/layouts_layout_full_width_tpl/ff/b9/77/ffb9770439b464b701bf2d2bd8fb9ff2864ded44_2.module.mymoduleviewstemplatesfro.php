<?php
/* Smarty version 3.1.32, created on 2018-09-13 14:34:42
  from 'module:mymoduleviewstemplatesfro' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9a3d4228d669_75649881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffb9770439b464b701bf2d2bd8fb9ff2864ded44' => 
    array (
      0 => 'module:mymoduleviewstemplatesfro',
      1 => 1536833860,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9a3d4228d669_75649881 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2294515545b9a3d4228ac14_46747808', 'page_content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content'} */
class Block_2294515545b9a3d4228ac14_46747808 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_2294515545b9a3d4228ac14_46747808',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Welcome to this page!fsdfdfsdfsdfdsfs','d'=>'Modules.MyModule'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_content'} */
}
