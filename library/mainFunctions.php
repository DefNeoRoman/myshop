<?php

	//Функция загрузки страницы
	
	function loadPage($smarty, $controllerName, $actionName = 'index') {

		include_once PathPrefix . $controllerName . PathPostfix;

		$function = $actionName . 'Action';
		$function($smarty);

	}

	//Функция загрузки шаблона

	function loadTemplate($smarty, $templateName)
	{
		$smarty->display($templateName . TemplatePostfix);
	}

	//Функция отладки

	function d($value=null, $die=1)
	{
		echo 'Debug: <br><pre>';
		print_r($value);
		echo '</pre>';

		if($die) die;
	}

	//преобразование результатов выборки в ассоциативный массив

	function createSmartyRsArray($rs) {

		if (! $rs) return false;

		$smartyRs = array();

		while ($row = mysql_fetch_assoc($rs)) {

			$smartyRs[] = $row;
		}
		
		return $smartyRs;
	}
// редирект
	function redirect($url) {
		if(! $url) $url = '/';
		header("Location: ($url)");
		exit;
	}

