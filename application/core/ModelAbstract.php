<?php
if (!defined("INDEX_ACCESS")) exit("Нельзя запустить скрипт" . __FILE__);
require_once 'application/services/MovieDBService.php';

abstract class ModelAbstract {

    public $service;

    public function __construct() {
        $this->service = new MovieDBService();
    }

    public function getData() {}
}