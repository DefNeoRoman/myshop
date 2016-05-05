<?php
/* Smarty version 3.1.30-dev/18, created on 2016-02-29 18:32:09
  from "D:\xampp\htdocs\myshop.local\views\default\contentone.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/18',
  'unifunc' => 'content_56d48099d3e241_59339155',
  'file_dependency' => 
  array (
    '2fb26fd586cebfc1958e54df536ea6b8a525bd2a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\myshop.local\\views\\default\\contentone.tpl',
      1 => 1456767126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d48099d3e241_59339155 ($_smarty_tpl) {
?>

<body>
<section id="boxes" class="row grey">
	<div class="forforeach">
		
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved = $_smarty_tpl->tpl_vars['item'];
?>

			<a href="?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<a><br/>

			<?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
$__foreach_itemChild_1_saved = $_smarty_tpl->tpl_vars['itemChild'];
?>

			--<a href="?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a><br/>
			<?php
$_smarty_tpl->tpl_vars['itemChild'] = $__foreach_itemChild_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
			<?php }?>

		<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	</div>
<?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>
	<div id="userBox">
		<a href="/user/index/" id="userLink">
			<?php echo $_smarty_tpl->tpl_vars['arUser']->value['displayName'];?>

		</a>
		<br>
		<a href="/user/logout/" onclick="logout();">
			Выход
		</a>
	</div>
<?php } else { ?>
		<div id="userBox" class="hideme">
			<a href="#" id="userLink"></a><br>
			<a href="/user/logout/" onclick="logout();">Выход</a>
		</div>
		<div id="loginBox">
			<div class="menuCaption">
				Авторизация
			</div>
				<input type="text" id="loginEmail" name"loginEmail" value=""/>
			<br>
				<input type="password" id="loginPwd" name="loginPwd" value=""/>
			<br>
				<input type="button" onclick="login();" value="Войти"/s>
			<br>
		</div>
		<div id="registerBox">
			<div class="menuCaption showHidden" onclick="showRegisterBox();">
				Регистрация
			</div>
			<div id="registerBoxHidden"> 
				email:
			<br/>
				<input type="text" id="email" name="email" value=""/><br/>
					пароль:
				<br/>
				<input type="password" id="pwd1" name="pwd1" value=""/><br/>
					повторить пароль
					<br/>
				<input type="password" id="pwd2" name="pwd2" value=""/><br/>
				<br/>
				<input type="button" onclick="registerNewUser();" value="Зарегистрироваться"/><br/>
			</div>
		</div>
<?php }?>
		
		<div class="menuCaption">
			Корзина
		</div>

		<a href="/cart/index/" title="Перейти в корзину">
		В корзину
		</a>
		<span id="cartCntItems">
			<?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value > 0) {?> <?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>

			 <?php } else { ?> 
				пусто
			 <?php }?>
		</span>
</section>

<?php }
}
