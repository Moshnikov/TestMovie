<?php  if (!defined("INDEX_ACCESS")) exit("Нельзя запустить скрипт" . __FILE__ );  ?>

<form action="/Main/Search" method="post">
    <label>Поиск фильма:</label>
    <input type="search" name="search" placeholder="Поиск фильма возможен по назавнию или по актерам" size="55">
</form>
<lu>
    <?php for ($i = 0; $i < count($data); $i++) {
        $movie = $data[$i];
        echo "<li><a href='movie?id=$movie->id'>" . $movie->title . " | " . $movie->releaseYear. " | " . $movie->format . " | " . $movie->stars . "</a></li>";
    }
    ?>

</lu>