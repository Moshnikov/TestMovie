<?php
if (!defined("INDEX_ACCESS")) exit("Нельзя запустить скрипт" . __FILE__ );

class Config {

    const DISPLAY_ERRORS = 1;

    const PATH_VIEW = "application/views/";
    const PATH_MODELS = "application/models/";
    const PATH_CONTROLLERS = "application/controllers/";
    const BASE_TEMPLATE_VIEW = "BaseTemplateView.php";

    const DB_HOST = 'localhost';
    const DB_USER = 'root';
    const DB_PASS = 'root';
    const DB_NAME = 'webbylab';
}
