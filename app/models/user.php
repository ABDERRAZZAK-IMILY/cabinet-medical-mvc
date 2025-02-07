<?php
namespace App\Models;

use Core\Model;

class User extends Model {
    protected $table = 'users';

    public function getUserByEmail($email) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email, \PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function createUser($name, $email, $password, $role) {
        $stmt = $this->db->prepare("INSERT INTO users (name, email, password, role) VALUES (:name, :email, :password, :role)");
        $stmt->bindParam(':name', $name, \PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, \PDO::PARAM_STR);
        $stmt->bindParam(':password', password_hash($password, PASSWORD_DEFAULT), \PDO::PARAM_STR);
        $stmt->bindParam(':role', $role, \PDO::PARAM_STR);
        return $stmt->execute();
    }
}
