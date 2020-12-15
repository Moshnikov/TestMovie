<?php  if (!defined("INDEX_ACCESS")) exit("Нельзя запустить скрипт" . __FILE__ );  ?>

<form action="Add/New" method="post">
    <input type="text"  name="title"  placeholder="Введите название Фильма"><br>
    <input type="date"  name="releaseYear"  placeholder="Укажите год"><br>
    <input type="text"  name="format"  placeholder="Укажите формат"><br>
    <input type="text"  name="stars"  placeholder="Укажите актеров"><br>
    <button type="submit">Добавить Фильм</button>
</form>