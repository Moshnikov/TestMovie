<?php  if (!defined("INDEX_ACCESS")) exit("Нельзя запустить скрипт" . __FILE__ );  ?>

<ul>
    <li>Title : <?= $data->title;?> </li>
    <li>ReleaseYear : <?= $data->releaseYear;?> </li>
    <li>Format : <?= $data->format;?> </li>
    <li>Stars : <?= $data->stars;?> </li>
</ul>

<form action="Movie/Delete" >
    <input type="hidden" name="id" value="<?= $data->id;?>">
    <button type="submit">Удалить Фильм</button>
</form>
