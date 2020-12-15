<?php
if (!defined("INDEX_ACCESS")) exit("Нельзя запустить скрипт" . __FILE__ );
require_once 'application/models/Movie.php';

class AddController extends ControllerAbstract {

    public function __construct() {
        parent::__construct();
        $this->model = new AddModel();
    }

    public function actionIndex() {

        $this->view->generate("AddView.php", Config::BASE_TEMPLATE_VIEW);

    }

    public function actionNew() {
        $movie = new Movie(NULL, $_POST["title"], $_POST["releaseYear"], $_POST["format"], $_POST["stars"]);
        $movieId = $this->model->addMovie($movie);

        if ($movieId != 0) {
            header("Location: /");
        } else {
            echo "warning";
        }
    }
}
