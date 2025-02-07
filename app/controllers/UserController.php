<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\User;

class UserController extends Controller {

    public function register() {
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            $role = $_POST['role'] ?? 'patient';

            $userModel = new User();
            $userExists = $userModel->getUserByEmail($email);

            if ($userExists) {
                $error = "User already exists!";
                return $this->render('user/register', compact('error'));
            } else {
                $userModel->createUser($name, $email, $password, $role);
               echo 'regester succec';
                exit;
            }
        }

        return $this->render('user/register');
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            $userModel = new User();
            $user = $userModel->getUserByEmail($email);
            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = $user['role'];
                if ($user['role'] === 'doctor') {
                    return $this->render('doctor/index', ['doctor' => $user]);
                } else {
                    return $this->render('patient/index', ['patient' => $user]);
                }
            } else {
                $error = "Invalid credentials!";
                return $this->render('user/login', compact('error'));
            }
        }
    
        return $this->render('user/login');
    }

    public function logout() {
        session_destroy();
        header("Location: /login");
        exit;
    }
}