<?php  if (!defined("INDEX_ACCESS")) exit("Нельзя запустить скрипт" . __FILE__ );  ?>

<form action="/import/upload" method="post" enctype="multipart/form-data">
    Укажите файл для импорта:
    <input type="file" name="fileImport">
    <input type="submit" value="Загрузите файл" name="submit">
</form>
