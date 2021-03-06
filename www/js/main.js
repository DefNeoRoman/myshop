	

// функция добавления в корзину
function addToCart(itemId) {

	console.log("js - addToCart()");
	$.ajax({
		type: 'POST',
		async: false,
		url: "/cart/addtocart/" + itemId + '/',
		dataType: 'json',
		success: function(data) {
			if(data['success']) {
				$('#cartCntItems').html(data['cntItems']);
				$('#addCart_'+ itemId).hide();
				$('#removeCart_'+ itemId).show();
					}
				}
			});

		}

function removeFromCart (itemId) {
	console.log("js-removeFromCart("+itemId+")");
	$.ajax({
		type: 'POST',
		async: false,
		url: "/cart/removefromcart/" + itemId + '/',
		dataType: 'json',
		success: function(data) {
			if(data['success']) {
				$('#cartCntItems').html(data['cntItems']);
				$('#addCart_'+ itemId).show();
				$('#removeCart_'+ itemId).hide();
			}
		}
	})
}


function conversionPrice(itemId) {
	var newCnt = $('#itemCnt_' + itemId).val();
	var itemPrice = $('#itemPrice_' + itemId).attr('value');
	var itemRealPrice = newCnt * itemPrice;

	$('#itemRealPrice_' + itemId).html(itemRealPrice);
}	

// получение данных с формы

function getData(obj_form) {
	var hData = {};
	$('input, textarea, select', obj_form).each(function(){
		if(this.name && this.name!='') {
			hData[this.name] = this.value;
			console.log('hData[' + this.name + '] = ' + hData[this.name]);
		}
	});

	return hData;
};

function registerNewUser() {
	var postData = getData('#registerBox');

	$.ajax ({
		type: 'POST',
		async: false,
		url: "/user/register/",
		data: postData,
		dataType: 'json',
		success: function(data) {
			if(data['success']) {
				alert('Регистрация прошла успешно');
				$('#registerBox').hide();
				$('#userLink').attr('href', '/user/');
				$('#userLink').html(data['userName']);
				$('#userBox').show();
				} else {
					alert(data['message']);
				}
		}
	});
}


function login() {
	var email = $('#loginEmail').val();
	var pwd = $('#loginPwd').val();

	var postData = "email="+ email +"&pwd=" +pwd;

	$.ajax({
		type: 'POST',
		async: false,
		url: "/user/login/",
		data: postData,
		dataType: 'json',
		success: function(data) {
			if(data['success']) {
				alert('авторизация прошла успешно');
				$('#registerBox').hide();
				$('#loginBox').hide();
				$('#userLink').attr('href', '/user/');
				$('#userLink').html(data['displayName']);
				$('#userBox').show();
				} else {
					alert(data['message']);
				}
		}
	});
}

function showRegisterBox() {
	if( $("#registerBoxHidden").css('display') != 'block' ) 	 {
			$("#registerBoxHidden").show();
	} else {
		$("#registerBoxHidden").hide();
	}
}

function updateUserData() {

	console.log("js - updateUserData");
	var phone = $('#newPhone').val();
	var adress = $('#newAdress').val();
	var pwd1 = $('#newPwd1').val();
	var pwd2 = $('#newPwd2').val();
	var curPwd = $('#curPwd').val();
	var name = $('#newName').val();

	var postData = {phone: phone,
					adress: adress,
					pwd1: pwd1,
					pwd2: pwd2,
					curPwd: curPwd,
					name: name};

	$.ajax ({
		type: 'POST',
		async: false,
		url: "/user/update/",
		data: postData,
		dataType: 'json',
		success: function(data) {
			if(data['success']) {
				alert('изменение параметров прошло успешно');
				
				} else {
					alert(data['message']);
				}
		}
	});
}