<?php
if (!defined("INDEX_ACCESS")) exit("Нельзя запустить скрипт" . __FILE__);

 class ErrorController extends ControllerAbstract {

     function actionIndex() {
         echo "ERROR"; //TODO
     }

     function action404() {
         echo "404"; //TODO
     }
 }
