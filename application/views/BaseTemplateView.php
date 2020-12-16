<?php  if (!defined("INDEX_ACCESS")) exit("Нельзя запустить скрипт" . __FILE__ );  ?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>MOVIE CATALOG</title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
<body>
    <div id="wrapper">
        <div id="header">
        <div id="logo">
            <a href="/">MOVIE CATALOG</span> </a>
        </div>
    </div>
        <div id="page">
            <div id="sidebar">
                <div class="side-box">
                    <h3>Основное меню</h3>
                    <ul class="list">
                        <li class="first "><a href="/">Список фильмов</a></li>
                        <li><a href="/add">Добавить фильм</a></li>
                        <li class="last"><a href="/import">Импорт фильмов</a></li>
                    </ul>
                </div>
            </div>
            <div id="content">
                <div class="box">
                    <?php require_once Config::PATH_VIEW.$contentView; ?>
                </div>
                <br class="clearfix" />
            </div>
            <br class="clearfix" />
        </div>
    </div>
</body>
</html>