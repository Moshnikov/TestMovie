<?php

if (!defined("INDEX_ACCESS")) exit("Нельзя запустить скрипт" . __FILE__);

require_once 'application/Config.php';
require_once 'application/core/ModelAbstract.php';
require_once 'application/core/ViewAbstract.php';
require_once 'application/core/ControllerAbstract.php';
require_once 'application/core/Router.php';

ini_set('display_errors', Config::DISPLAY_ERRORS);

Router::start();

