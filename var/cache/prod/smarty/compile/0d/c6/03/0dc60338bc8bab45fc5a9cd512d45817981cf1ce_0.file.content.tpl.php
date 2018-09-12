<?php
/* Smarty version 3.1.32, created on 2018-09-12 13:55:25
  from 'D:\xampp7.1\htdocs\prestashop\admin051cexwar\themes\default\template\controllers\themes_catalog\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b98e28de98d68_87552076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dc60338bc8bab45fc5a9cd512d45817981cf1ce' => 
    array (
      0 => 'D:\\xampp7.1\\htdocs\\prestashop\\admin051cexwar\\themes\\default\\template\\controllers\\themes_catalog\\content.tpl',
      1 => 1536737967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b98e28de98d68_87552076 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }
}
}
