<?php

// инициализация подключения к базе данных

$dblocation="127.0.0.1";
$dbname="myshop";
$dbuser="root";
$dbpasswd="1";

$db = mysql_connect ($dblocation, $dbuser, $dbpasswd);

if (! $db) {

	echo 'Ошибка в доступе к Mysql';

	exit();

}

// установим кодировку по умолчанию для текущего сервера

	mysql_set_charset ('utf8');

if (! mysql_select_db($dbname, $db) ) {

	echo "Ошибка в доступе к базе данных: {$dbname}";

	exit ();

}