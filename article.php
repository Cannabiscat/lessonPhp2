<?php

require_once('startup.php');
require_once('model.php');

// подключаемся к БД
startup();
$article = articles_get($_GET['id']);
// var_dump($article);
// кодировку
header('Content-type: text/html; charset=utf-8');

// вывод в шаблон
include('theme/article.php');
