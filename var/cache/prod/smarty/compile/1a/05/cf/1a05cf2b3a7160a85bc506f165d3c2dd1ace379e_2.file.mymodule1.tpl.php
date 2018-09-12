<?php
/* Smarty version 3.1.32, created on 2018-09-12 13:52:34
  from 'D:\xampp7.1\htdocs\prestashop\modules\mymodule\views\templates\hook\mymodule1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b98e1e241e4f8_95672328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a05cf2b3a7160a85bc506f165d3c2dd1ace379e' => 
    array (
      0 => 'D:\\xampp7.1\\htdocs\\prestashop\\modules\\mymodule\\views\\templates\\hook\\mymodule1.tpl',
      1 => 1536744461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b98e1e241e4f8_95672328 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Block mymodule -->
<div id="mymodule_block_home" class="block">
    <h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_module_message']->value, ENT_QUOTES, 'UTF-8');?>
</h3>
    <div class="block_content">
        <p>Hello,
            <?php if (isset($_smarty_tpl->tpl_vars['my_module_name']->value) && $_smarty_tpl->tpl_vars['my_module_name']->value) {?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_module_name']->value, ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
                World
            <?php }?>
        </p>
        <ul>
            <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_module_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="Click this link">Click me!</a></li>
        </ul>

    </div>
</div>
<!-- /Block mymodule --><?php }
}
