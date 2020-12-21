<?php
if (!defined("INDEX_ACCESS")) exit("Нельзя запустить скрипт" . __FILE__ );

class MovieController extends ControllerAbstract {

    function __construct() {
       parent::__construct();
       $this->model = new MovieModel();
    }

    function actionIndex() {
        $movie = $this->model->getMovieById(intval($_GET["id"]));
        $this->view->generate("MovieView.php", Config::BASE_TEMPLATE_VIEW, $movie);
    }

    public function actionDelete() {
        if ($movie = $this->model->delMovieById(intval($_GET["id"]))) {
            header("Location: /");
        }
    }
}
