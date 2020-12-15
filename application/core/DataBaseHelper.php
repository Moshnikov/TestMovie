<?php
if (!defined("INDEX_ACCESS")) exit("Нельзя запустить скрипт" . __FILE__);

class DataBaseHelper {

    private function __construct() {
    }

    public static function getConection() {
        return new mysqli(Config::DB_HOST, Config::DB_USER,Config::DB_PASS,Config::DB_NAME);
    }

}
