<?php
/* Smarty version 3.1.32, created on 2018-09-10 22:43:57
  from '/Users/mac/Documents/php/prestashop/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b96bb6de7a0f9_62693979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7580807c2befa0ded8f0cb33a284c834add9fcd4' => 
    array (
      0 => '/Users/mac/Documents/php/prestashop/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1536603732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b96bb6de7a0f9_62693979 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
