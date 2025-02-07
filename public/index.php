<?php

require_once '../vendor/autoload.php';


use Core\Router;
use App\Controllers\UserController;
use App\Controllers\DoctorController;
use App\Controllers\PatientController;
use App\Controllers\AppointmentController;

$router = new Router();

$router->get('/register', [UserController::class, 'register']);
$router->post('/register', [UserController::class, 'register']);
$router->get('/login', [UserController::class, 'login']);
$router->post('/login', [UserController::class, 'login']);
$router->get('/logout', [UserController::class, 'logout']);

$router->get('/doctors', [DoctorController::class, 'index']);
$router->get('/doctors/{id}', [DoctorController::class, 'show']);
$router->post('/doctors/raport', [DoctorController::class, 'raport']);

$router->get('/patients', [PatientController::class, 'index']);
$router->get('/patients/{id}', [PatientController::class, 'show']);
$router->post('/patients/add', [PatientController::class, 'add']);

$router->get('/appointments', [AppointmentController::class, 'index']);
$router->get('/appointments/{id}', [AppointmentController::class, 'show']);
$router->post('/appointments/book', [AppointmentController::class, 'book']);

$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);






use Core\Logger;

require_once '../core/Logger.php';

Logger::info('Lancement de l\'application');
Logger::error('Erreur test', ['code' => 500]);

echo "Logs écrits avec succès.";