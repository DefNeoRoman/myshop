<?php
/* Smarty version 3.1.30-dev/18, created on 2016-02-14 14:19:15
  from "D:\xampp\htdocs\myshop.local\views\default\product.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/18',
  'unifunc' => 'content_56c07ed3ab0112_10997292',
  'file_dependency' => 
  array (
    'a87919deae104445c8c8786b4c3c071e36ad1944' => 
    array (
      0 => 'D:\\xampp\\htdocs\\myshop.local\\views\\default\\product.tpl',
      1 => 1455355362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c07ed3ab0112_10997292 ($_smarty_tpl) {
?>

	<h3>
	<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>

</h3>

<img width = "575" src = "/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
">

<p>
	Стоимость: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>

</p>

<a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value) {?> class="hideme" <?php }?> href="#" onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); 
return false;" alt="Удалить из корзины">

Удалить из корзины


</a>
<a id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value) {?> class="hideme" <?php }?> href="#" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); 
return false;" alt="Добавить в корзину">

Добавить в корзину

</a>

<p>
	Описание <br/> <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>

</p>

<?php }
}
