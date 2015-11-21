<?php /*
Шаблон создания новой статьи
============================
$title - заголовок
$content - содержание
$error - ошибка юзера
*/?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP уровень 2 - редактирование статьи</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="theme/style.css">
</head>
<body>
	<h1>PHP Уровень 2</h1>
	<br>
	<a href="index.php">Главная</a> | <a href="editor.php">Консоль редактора</a>
	<hr>
	<h2>Редактирование статьи</h2>
	<?php if ($error): ?>
		<b style="color:red">Заполните все поля!</b>
	<?php endif; ?>
	<form method="post">
		Название<sup style="color:red">*</sup>: <br>
		<input type="text" name="title" value="<?php echo $title ?>">
		<br><br>
		Содержание: <br>
		<textarea name="content"><?php echo $content?></textarea>
		<br>
		<input type="submit" value="Изменить">
	</form>
	<hr>
	<footer>&copy Александр Вяткин</footer>
</body>
</html>