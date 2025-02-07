<?php
namespace App\Models;

use Core\Logger;
use Core\Model;

class Patient extends Model {
    protected $table = 'patients';

    public function getAllPatients() {
        Logger::info('Récupération de tous les patients');

        $stmt = $this->db->query("SELECT * FROM patients");
        return $stmt->fetchAll();
    }

    public function getPatientById($id) {
        $stmt = $this->db->prepare("SELECT * FROM patients WHERE id = :id");
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function addPatient($name, $dob, $email) {
        $stmt = $this->db->prepare("INSERT INTO patients (name, date_of_birth, email) VALUES (:name, :dob, :email)");
        $stmt->bindParam(':name', $name, \PDO::PARAM_STR);
        $stmt->bindParam(':dob', $dob, \PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, \PDO::PARAM_STR);
        return $stmt->execute();
    }
}
