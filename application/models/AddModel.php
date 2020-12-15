<?php
if (!defined("INDEX_ACCESS")) exit("Нельзя запустить скрипт" . __FILE__ );

class AddModel extends ModelAbstract {

    public function addMovie($movie) {
        return $this->service->addMovie($movie);
    }
}
