<?php

require_once('startup.php');
require_once('model.php');
 
 //подключаемся к бд
startup();

// Определяем переменные для шаблона
$id_article = $_GET['id'];

$error = false;
$article = articles_get($id_article);
$title = $article['title'];
$content = $article['content'];

// Обработка отправки формы
if (!empty($_POST) && isset($_POST['title']) && isset($_POST['content'])) {
	// успешно данные добавлены, редирект
	if (articles_edit($id_article, $_POST['title'], $_POST['content'])) {
		die(header('Location: editor.php'));
	}
	$title = $_POST['title'];
	$content = $_POST['content'];
	$error = true;
}

// кодировку
header('Content-type: text/html; charset=utf-8');

// вывод в шаблон
include('theme/edit.php');