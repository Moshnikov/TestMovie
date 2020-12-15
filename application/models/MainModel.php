<?php
if (!defined("INDEX_ACCESS")) exit("Нельзя запустить скрипт" . __FILE__ );

class MainModel extends ModelAbstract {

    public function getData() {
        return $this->service->getAllMovies();
    }

    public function getMoviesBySearch($searchStr) {
        return$this->service->getMovieBySearch($searchStr);
    }
}

