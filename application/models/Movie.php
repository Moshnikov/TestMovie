<?php
if (!defined("INDEX_ACCESS")) exit("Нельзя запустить скрипт" . __FILE__ );

class Movie {
    public $id;
    public $title;
    public $releaseYear;
    public $format;
    public $stars;

    public function __construct($id, $title, $releaseYear, $format, $stars) {
        $this->id = $id;
        $this->title = $title;
        $this->releaseYear = $releaseYear;
        $this->format = $format;
        $this->stars = $stars;
    }
}
