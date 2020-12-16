<?php
if (!defined("INDEX_ACCESS")) exit("Нельзя запустить скрипт" . __FILE__);
require_once "application/models/ImporModel.php";

class ImportController extends ControllerAbstract {

    public function __construct() {
        parent::__construct();
        $this->model = new ImporModel();
    }

    function actionIndex() {
        $this->view->generate("ImportView.php", Config::BASE_TEMPLATE_VIEW);
    }

    function actionUpload() {
        if ($_FILES && $_FILES['fileImport']['error']== UPLOAD_ERR_OK)
        {
            if ($this->model->fileImport($_FILES['fileImport']['tmp_name'])) {
                header("Location: /");
            }
        } else {
            header("Location: /import");
        }
    }
}
