<?php
include_once 'config/Database.php';

class User {
    protected $db;
    protected $id;
    protected $username;
    protected $email;
    protected $role;
    protected $password;
    protected $status;

    public function __construct($db, $userData = null) {
        $this->db = $db; 
        if ($userData) {
            $this->id = $userData['id'] ?? null;
            $this->username = $userData['username'] ?? null;
            $this->email = $userData['email'] ?? null;
            $this->role = $userData['role'] ?? null;
            $this->status = $userData['status'] ?? null;
        }
    }

    public function Register($data) {
        $sql = "INSERT INTO public.users (username, email, password, role, status)
                VALUES (:username, :email, :password, :role, :status)";

        $password = password_hash($data['password'], PASSWORD_DEFAULT);
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(':username', $data['username']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':status', $data['status']);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':role', $data['role']);

        try {
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Erreur lors de l'insertion de l'utilisateur : " . $e->getMessage());
            return false;
        }
    }

    public function read($id) {
        if (!is_numeric($id)) {
            return false;
        }

        $sql = "SELECT * FROM users WHERE id_user = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        try {
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Erreur lors de la lecture de l'utilisateur : " . $e->getMessage());
            return false;
        }
    }

    public function getUserById($id) {
        if (!is_numeric($id)) {
            return false;
        }

        $sql = "SELECT * FROM users WHERE id_user = :id_user";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id_user', $id, PDO::PARAM_INT);

        try {
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Erreur lors de la récupération de l'utilisateur : " . $e->getMessage());
            return false;
        }
    }

    public function getStatus() {
        return $this->status;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function setUsername($username) {
        $this->username = $username;
    }
}
