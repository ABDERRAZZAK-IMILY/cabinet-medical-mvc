<?php

require_once '../vendor/autoload.php';
require_once '../core/Router.php';

$router = new Router();







use Core\Logger;

require_once '../core/Logger.php';

Logger::info('Lancement de l\'application');
Logger::error('Erreur test', ['code' => 500]);