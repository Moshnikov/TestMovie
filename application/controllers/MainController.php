<?php
if (!defined("INDEX_ACCESS")) exit("Нельзя запустить скрипт" . __FILE__);

 class MainController extends ControllerAbstract {

    function __construct()  {
        parent::__construct();
        $this->model = new MainModel();
    }

     function actionIndex() {
         $movies = $this->model->getData();
         $this->view->generate("MainView.php", Config::BASE_TEMPLATE_VIEW, $movies);
     }

     function actionSearch() {
        $movies = $this->model->getMoviesBySearch(htmlspecialchars($_POST["search"]));
        if ($movies){
        $this->view->generate("MainView.php", Config::BASE_TEMPLATE_VIEW, $movies);
        } else {
            echo "По вашему запросу фильмы и актеры ненайденны!";
         }
     }
 }