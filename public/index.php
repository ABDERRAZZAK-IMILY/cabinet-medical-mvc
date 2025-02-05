<?php

include_once '../config/Database.php';

Database::getInstance();

require_once '../vendor/autoload.php';



require_once '../app/controllers/homeController.php';

$loader = new Twig\Loader\FilesystemLoader('../views');
$twig = new Twig\Environment($loader, [
    'cache' => '../cache',
    'debug' => true,
]);


// $controller = new HomeController($twig);
// $controller->index();

$data = [
    'username' => 'abdeljabbar modiri',
    'message' => 'Bienvenue sur votre tableau de bord!'
];

echo $twig->render('home.twig', $data);