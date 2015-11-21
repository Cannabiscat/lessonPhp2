<?php

require_once('startup.php');
require_once('model.php');

// подключаемся к БД
startup();

//удаляем все помеченные на удаление статьи
$id_delArticle = array();
foreach ($_POST as $key => $value) {
	if($_POST[$key] == 'on') {
		articles_delete($key);
	}
}

//извлекаем все статьи
$articles = articles_all();

// кодировку
header('Content-type: text/html; charset=utf-8');

// вывод в шаблон
include('theme/editor.php');