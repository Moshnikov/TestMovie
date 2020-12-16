<?php
if (!defined("INDEX_ACCESS")) exit("Нельзя запустить скрипт" . __FILE__);

class MovieModel extends ModelAbstract{

    public function getData() {}

    public function getMovieById($id) {
        return $this->service->getMovieById($id);
    }

    public function delMovieById($id) {
        return $this->service->deleteMovieById($id);
    }
}
