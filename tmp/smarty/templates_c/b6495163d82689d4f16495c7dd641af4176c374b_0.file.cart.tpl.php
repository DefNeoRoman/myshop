<?php
/* Smarty version 3.1.30-dev/18, created on 2016-02-14 17:40:08
  from "D:\xampp\htdocs\myshop.local\views\default\cart.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/18',
  'unifunc' => 'content_56c0ade8bab3f0_08145415',
  'file_dependency' => 
  array (
    'b6495163d82689d4f16495c7dd641af4176c374b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\myshop.local\\views\\default\\cart.tpl',
      1 => 1455468006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c0ade8bab3f0_08145415 ($_smarty_tpl) {
?>

 

<h1>
	Корзина
</h1>

<?php if (!$_smarty_tpl->tpl_vars['rsProducts']->value) {?> 

В корзине пусто

<?php } else { ?>
<h2>
	Данные заказа
</h2>

<table>
	<tr>
		<td>№</td>
		<td>Наименование</td>
		<td>Количество</td>
		<td>Цена за единицу</td>
		<td>Цена</td>
		<td>Действие</td>
	</tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
  'iteration' => true,
));
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
$__foreach_item_0_saved = $_smarty_tpl->tpl_vars['item'];
?>
	<tr>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null);?>

		</td>

		<td>
		<a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
		<br/>
		</td>
		<td>
			<input name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="text" value="1" onchange="conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);"/>
		</td>
		<td>
			<span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
">
			<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

			</span>
		</td>
		<td>
			<span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
				<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

			</span>
		</td>
		<td>
			<a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" href="#" onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" title="Удалить из корзины">
				Удалить
			</a>
			<a id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="hideme" href="#" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" title="Восстановить элемент">
				Восстановить элемент
			</a>
		</td>
	</tr>
	<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</table>



<?php }?>


 <?php }
}
