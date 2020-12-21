<?php  if (!defined("INDEX_ACCESS")) exit("Нельзя запустить скрипт" . __FILE__ );  ?>

<script>
    function myFunction(messageBox) {
        var txt;
        if (confirm("Are you sure…?")) {
            txt = "Yes!";
        } else {
            txt = "No!";
        }
        document.getElementById("messageBox").innerHTML = txt;
    }
</script>
<ul>
    <li>Title : <?= $data->title;?> </li>
    <li>ReleaseYear : <?= $data->releaseYear;?> </li>
    <li>Format : <?= $data->format;?> </li>
    <li>Stars : <?= $data->stars;?> </li>
</ul>

<form action="Movie/Delete" >
    <input type="hidden" name="id" value="<?= $data->id;?>">
    <button name="messageBox"  type="submit" onclick="myFunction(messageBox)">Удалить Фильм</button>

</form>





