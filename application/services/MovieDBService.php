<?php
if (!defined("INDEX_ACCESS")) exit("Нельзя запустить скрипт" . __FILE__ );
require_once 'application/models/Movie.php';

class MovieDBService {
    private $dbConnection;

    public function __construct() {
        $this->dbConnection = new mysqli(Config::DB_HOST, Config::DB_USER,Config::DB_PASS,Config::DB_NAME);
    }

    public function getAllMovies() {
        $queryResult = $this->dbConnection->query("SELECT * FROM `movies` ORDER BY `title`");
        return $this->createMoviesFromRawData($queryResult->fetch_all());
    }

    public function getMovieBySearch($searchStr) {
        $queryResult = $this->dbConnection->query("SELECT * FROM `movies` WHERE `title` LIKE '$searchStr' OR `stars` LIKE '$searchStr'");
        return $this->createMoviesFromRawData($queryResult->fetch_all());
    }

    public function addMovie($movie) {
        $this->dbConnection->query("INSERT INTO `movies` (`id`, `title`, `release year`, `format`, `stars`) VALUES (NULL, '".$movie->title."', '".$movie->releaseYear."', '".$movie->format."', '".$movie->stars."');");
        return $this->dbConnection->insert_id;
    }

    public function getMovieById($id) {
        $queryResult = $this->dbConnection->query("SELECT * FROM `movies` WHERE `id` = '$id'");
        return $this->createMovieFromRawData($queryResult->fetch_array());
    }

    public function deleteMovieById($id) {
        return $this->dbConnection->query("DELETE FROM `movies` WHERE `id` = '$id'");
    }

    private function createMovieFromRawData($rawData) {
        return new Movie($rawData[0], $rawData[1], $rawData[2], $rawData[3], $rawData[4]);
    }

    private function createMoviesFromRawData($rawData) {
        $result = [];
        for ($i = 0; $i < count($rawData) ; $i++) {
            $result[] = $this->createMovieFromRawData($rawData[$i]);
        }
        return $result;
    }
}
