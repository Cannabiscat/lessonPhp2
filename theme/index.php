<!DOCTYPE html>
<html>
<head>
	<title>Блог</title>
	<meta charset='utf-8'>
	<link rel="stylesheet" type="text/css" href="theme/style.css">
</head>
<body>
	<h1>Блог</h1>
	<b>Главная</b> | <a href="editor.php">Консоль редактора</a>
	<hr>
	<h3>Содержание:</h3>
	<ul>
		<?php foreach ($articles as $article): ?>
			<li><h3><a href="article.php?id=<?php echo $article['id_article'] ?>"><?php echo $article['title'] ?></a></h3>
				<div>
				<pre><?php echo articles_intro($article) ?>...<a href="article.php?id=<?php echo $article['id_article'] ?>">>>></a></pre>
				</div>
			</li>
		<?php endforeach ?>
	</ul>
	<hr>
	<footer>&copy Александр Вяткин</footer>
</body>
</html>
