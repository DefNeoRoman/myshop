<?php
//константы для обращения к контроллерам

	define('PathPrefix', '../controllers/');

	define('PathPostfix', 'Controller.php');

//используемый шаблон

	$template = 'default';

	//пути к файлам шаблонов (*.tpl)

	define ('TemplatePrefix',"../views/{$template}/");
	define ('TemplatePostfix','.tpl');

	//пути к файлам шаблонов в вебпространстве

	define ('TemplateWebPath',"templates/{$template}/");

	//инициализация шаблонизатора Smarty

	require ('../library/Smarty/libs/Smarty.class.php');

	$smarty = new Smarty();

	$smarty->setTemplateDir(TemplatePrefix);

	$smarty->setCompileDir('../tmp/smarty/templates_c');

	$smarty->setCacheDir('../tmp/smarty/cache');

	$smarty->setConfigDir('../library/smarty/configs');

	$smarty->assign('templateWebPath',TemplateWebPath);

