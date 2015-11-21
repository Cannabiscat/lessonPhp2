<?php

require_once('startup.php');
require_once('model.php');

// подключаемся к БД
startup();

// Определяем переменные для шаблона
$title = '';
$content = '';
$error = false;

// Обработка отправки формы
if (!empty($_POST) && isset($_POST['title']) && isset($_POST['content'])) {
	// успешно данные добавлены, редирект
	if (articles_new($_POST['title'], $_POST['content'])) {
		die(header('Location: editor.php'));
	}
	$title = $_POST['title'];
	$content = $_POST['content'];
	$error = true;
}

// кодировку
header('Content-type: text/html; charset=utf-8');

// вывод в шаблон
include('theme/new.php');
