<?php
namespace App\Models;

use Core\Model;

class Doctor extends Model {
    protected $table = 'doctors';

    public function getAllDoctors() {
        $stmt = $this->db->query("SELECT * FROM doctors");
        return $stmt->fetchAll();
    }

    public function getDoctorById($id) {
        $stmt = $this->db->prepare("SELECT * FROM doctors WHERE id = :id");
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function addDoctor($name, $specialty) {
        $stmt = $this->db->prepare("INSERT INTO doctors (name, specialty) VALUES (:name, :specialty)");
        $stmt->bindParam(':name', $name, \PDO::PARAM_STR);
        $stmt->bindParam(':specialty', $specialty, \PDO::PARAM_STR);
        return $stmt->execute();
    }
}
