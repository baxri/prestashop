<?php
/* Smarty version 3.1.32, created on 2018-09-13 14:34:47
  from 'D:\xampp7.1\htdocs\prestashop\modules\mymodule\views\templates\hook\mymodule1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9a3d47e37951_24397557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a05cf2b3a7160a85bc506f165d3c2dd1ace379e' => 
    array (
      0 => 'D:\\xampp7.1\\htdocs\\prestashop\\modules\\mymodule\\views\\templates\\hook\\mymodule1.tpl',
      1 => 1536831486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9a3d47e37951_24397557 (Smarty_Internal_Template $_smarty_tpl) {
?><li>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_dir']->value, ENT_QUOTES, 'UTF-8');?>
modules/mymodule/mymodule_page.php" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click this link','mod'=>'mymodule'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click me!','mod'=>'mymodule'),$_smarty_tpl ) );?>
</a>
</li>
<!-- Block mymodule -->
<div id="mymodule_block_left" class="block">
    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Welcome!','d'=>'Modules.MyModule'),$_smarty_tpl ) );?>
</h4>
    <div class="block_content">
        <p>
            <?php if (!isset($_smarty_tpl->tpl_vars['my_module_name']->value) || !$_smarty_tpl->tpl_vars['my_module_name']->value) {?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'my_module_tempvar', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'World','d'=>'Modules.MyModule'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php $_smarty_tpl->_assignInScope('my_module_name', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'my_module_tempvar'));?>
            <?php }?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hello %1$s!','sprintf'=>$_smarty_tpl->tpl_vars['my_module_name']->value,'d'=>'Modules.MyModule'),$_smarty_tpl ) );?>

        </p>
        <ul>
            <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_module_link']->value, ENT_QUOTES, 'UTF-8');?>
"  title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click this link','d'=>'Modules.MyModule'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click me!','d'=>'Modules.MyModule'),$_smarty_tpl ) );?>
</a></li>
        </ul>
    </div>
</div>
<!-- /Block mymodule --><?php }
}
