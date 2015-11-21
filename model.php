<?php

// список всех статей
function articles_all()
{
	// запрос
	$sql = 'SELECT * FROM `articles` ORDER BY id_article DESC';
	$result = mysqli_query(getDbConnect(), $sql);
	if (!$result) {
		die(mysqli_error());
	}

	// извлекаем из БД данные
	$rows = mysqli_num_rows($result);
	$articles = array();
	if (!$rows) {
		return $articles;
	}
	while ($row = mysqli_fetch_assoc($result)) {
		$articles[] = $row;
	}
	return $articles;
}

// получить конкретную статью
function articles_get($id_article)
{
	// извлечение статьи
	$sql = "SELECT `title`,`content` FROM `articles` WHERE `id_article`='%s';";
	$query = sprintf($sql, sql_escape($id_article));
	$result = mysqli_query(getDbConnect(), $query);
	return mysqli_fetch_assoc($result);
}

// добавить статью
function articles_new($title, $content)
{
	// Подготовка
	$title = trim($title);
	$content = trim($content);

	// Проверка
	if ($title == '') {
		return false;
	}

	// Запрос
	$sql = "INSERT INTO `articles` (`title`, `content`) VALUES ('%s', '%s')";
	$query = sprintf($sql, sql_escape($title), sql_escape($content));

	$result = mysqli_query(getDbConnect(), $query);

	if (!$result) {
		die(mysqli_error());
	}
	return true;
}

// изменить статью
function articles_edit($id_article, $title, $content)
{
	//сохранение изменённой статьи
	// Подготовка
	$title = trim($title);
	$content = trim($content);
	$id_article = trim($id_article);
	// Проверка
	if ($title == '') {
		return false;
	}
	// Запрос
	$sql = "UPDATE `articles` SET `title`='%s', `content`='%s' WHERE `id_article`='%s'";
	$query = sprintf($sql, sql_escape($title), sql_escape($content), sql_escape($id_article));
	$result = mysqli_query(getDbConnect(), $query);
	if (!$result) {
		die(mysqli_error());
	}
	return true;
}

// удаление статьи
function articles_delete($id_article)
{
	
	$sql1 = "DELETE FROM `articles` WHERE `id_article`='%s'";	
	$query = sprintf($sql1, sql_escape($id_article));
	$result = mysqli_query(getDbConnect(), $query);
	if (!$result) {
		die(mysqli_error());
	}
	return true;
}

// короткое описание статьи
function articles_intro($article)
{
	// $article - это ассоциативный массив, представляющий статью
	$result = array();
	$result = substr($article['content'], 0, 200);
	return $result;
}
