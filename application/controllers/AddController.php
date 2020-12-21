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
        $movie = new Movie(NULL,
            htmlspecialchars($_POST["title"]),
            htmlspecialchars($_POST["releaseYear"]),
            htmlspecialchars($_POST["format"]),
            htmlspecialchars($_POST["stars"]));
        $movieId = $this->model->addMovie($movie);

        if ($movieId != 0) {
            header("Location: /");
        } else {
            echo "Внимание: Такой фильм уже существует в каталоге!";
        }
    }
}
