<?php  if (!defined("INDEX_ACCESS")) exit("Нельзя запустить скрипт" . __FILE__ );  ?>

    <script>
        function validateForm() {
            var starsValue = document.getElementById('stars').value;
            var arrayOfStrings = starsValue.split(',')

            for (var i = 0; i < arrayOfStrings.length; i++) {
                for (var b = i + 1; b < arrayOfStrings.length; b++) {
                    if (arrayOfStrings[i].trim() == arrayOfStrings[b].trim()) {
                        alert("Внимание: вы дважды указали одного актера");
                        return false;
                    }
                }
            }
            return true;
        }

    </script>

<form name="addForm" action="Add/New"  onsubmit="return validateForm()" method="post">
    <input type="text"  name="title"  placeholder="Введите название Фильма" required><br>
    <input type="date"  min="1850-01-01" max="2020-12-31" name="releaseYear"  placeholder="Укажите год" required><br>
    <select name="format" placeholder="Укажите формат">
        <option value="DVD">DVD</option>
        <option value="VHS">VHS</option>
        <option value="Blue-Ray">Blu-Ray</option>
    </select> </br>
    <input type="text" id="stars" name="stars"  placeholder="Укажите актеров" required><br>
    <button type="submit">Добавить Фильм</button>
</form>