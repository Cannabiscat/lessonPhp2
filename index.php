<?php
require_once('startup.php');
require_once('model.php');
// кодировку
header('Content-type: text/html; charset=utf-8');
//получаем все статьи
$articles=articles_all();
include('theme/index.php');