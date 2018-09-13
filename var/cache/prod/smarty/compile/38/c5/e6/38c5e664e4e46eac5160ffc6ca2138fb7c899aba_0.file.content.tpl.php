<?php
/* Smarty version 3.1.32, created on 2018-09-13 14:54:40
  from 'D:\xampp7.1\htdocs\prestashop\admin051cexwar\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9a41f03c97b0_01193237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38c5e664e4e46eac5160ffc6ca2138fb7c899aba' => 
    array (
      0 => 'D:\\xampp7.1\\htdocs\\prestashop\\admin051cexwar\\themes\\default\\template\\content.tpl',
      1 => 1536737966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9a41f03c97b0_01193237 (Smarty_Internal_Template $_smarty_tpl) {
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
