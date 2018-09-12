<?php
/* Smarty version 3.1.32, created on 2018-09-10 22:31:20
  from '/Users/mac/Documents/php/prestashop/admin051cexwar/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b96b878d78273_22560698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b24b9de578e5c4ddcc5d5fd68bb512be4cc05d41' => 
    array (
      0 => '/Users/mac/Documents/php/prestashop/admin051cexwar/themes/default/template/content.tpl',
      1 => 1536603726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b96b878d78273_22560698 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
