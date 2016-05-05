<?php
/* Smarty version 3.1.30-dev/18, created on 2016-02-29 18:32:11
  from "D:\xampp\htdocs\myshop.local\views\default\user.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/18',
  'unifunc' => 'content_56d4809be574f8_96345789',
  'file_dependency' => 
  array (
    '6b18625f0bfe8ccabaf9e457f245f3f5c6d7b984' => 
    array (
      0 => 'D:\\xampp\\htdocs\\myshop.local\\views\\default\\user.tpl',
      1 => 1456766808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d4809be574f8_96345789 ($_smarty_tpl) {
?>
<h1>
	Ваши регистрационные данные
</h1>
<table border="0">
	<tr>
		<td>Логин (email)</td>
		<td><?php echo $_smarty_tpl->tpl_vars['arUser']->value['email'];?>
</td>
	</tr>
	<tr>
		<td>Имя</td>
		<td>
			<input type="text" id="newName" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['name'];?>
"/>
		</td>
	</tr>
	<tr>
		<td>Телефон</td>
		<td>
			<input type="text" id="newPhone" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['name'];?>
"/>
		</td>
	</tr>
	<tr>
		<td>Адрес</td>
		<td>
			<textarea id="newAdress"> 
				<?php echo $_smarty_tpl->tpl_vars['arUser']->value['adress'];?>

			</textarea> 
			
		</td>
	</tr>
	<tr>
		<td>Новый пароль</td>
		<td>
			<input type="password" id="newPwd1" value=""/>
		</td>
	</tr>
	<tr>
		<td>Повтор пароля</td>
		<td>
			<input type="password" id="newPwd2" value=""/>
		</td>
	</tr>
	<tr>
		<td>
			Для того чтобы сохранить данные ведите текущий пароль
		</td>
		<td>
			<input type="password" id="curPwd" value=""/>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td> 
		<td>
			<input type="button" value="Сохранить изменения" onclick="updateUserData();"/>
		</td>
	</tr>
</table><?php }
}
