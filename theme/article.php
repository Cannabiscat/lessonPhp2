<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Статья "<?php echo $article['title'];?>"</title>
	<link rel="stylesheet" type="text/css" href="theme/style.css">
</head>
<body>
<h1>PHP Уровень 2</h1>
	<br>
	<a href="index.php">Главная</a> | <a href="edit.php?id=<?php echo $_GET['id'];?>">Редактировать статью</a>
	<hr>
<div>
	<?php echo $article['title'];?>
	<div><pre><?php echo $article['content'];?></pre></div>
</div>
<hr>
	<footer>&copy Александр Вяткин</footer>
</body>
</html>