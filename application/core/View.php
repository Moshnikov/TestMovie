<?php
if (!defined("INDEX_ACCESS")) exit("Нельзя запустить скрипт" . __FILE__);

class View {

    function generate($contentView, $baseTemplateView, $data = null) {
        require_once Config::PATH_VIEW.$baseTemplateView;
    }
}
