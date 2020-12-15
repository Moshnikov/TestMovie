<?php
if (!defined("INDEX_ACCESS")) exit("Нельзя запустить скрипт" . __FILE__);

abstract class ControllerAbstract {

    public $model;
    public $view;

    public function __construct() {

        $this->view = new View();
    }

    public function actionIndex() {}
}
