
<body>
<section id="boxes" class="row grey">
	<div class="forforeach">
		
		{foreach $rsCategories as $item}

			<a href="?controller=category&id={$item['id']}">{$item['name']}<a><br/>

			{if isset ($item['children'])}

			{foreach $item['children'] as $itemChild}

			--<a href="?controller=category&id={$itemChild['id']}">{$itemChild['name']}</a><br/>
			{/foreach}
			{/if}

		{/foreach}
	</div>
{if isset ($arUser)}
	<div id="userBox">
		<a href="/user/index/" id="userLink">
			{$arUser['displayName']}
		</a>
		<br>
		<a href="/user/logout/" onclick="logout();">
			Выход
		</a>
	</div>
{else}
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
{/if}
		
		<div class="menuCaption">
			Корзина
		</div>

		<a href="/cart/index/" title="Перейти в корзину">
		В корзину
		</a>
		<span id="cartCntItems">
			{if $cartCntItems > 0} {$cartCntItems}
			 {else} 
				пусто
			 {/if}
		</span>
</section>

