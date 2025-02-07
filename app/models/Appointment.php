<?php
namespace App\Models;

use Core\Model;

class Appointment extends Model {
    protected $table = 'appointments';

    public function getAllAppointments() {
        $stmt = $this->db->query("SELECT * FROM appointments");
        return $stmt->fetchAll();
    }

    public function getAppointmentById($id) {
        $stmt = $this->db->prepare("SELECT * FROM appointments WHERE id = :id");
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function bookAppointment($patient_id, $doctor_id, $date, $time) {
        $stmt = $this->db->prepare("INSERT INTO appointments (patient_id, doctor_id, appointment_date, appointment_time) 
                                    VALUES (:patient_id, :doctor_id, :date, :time)");
        $stmt->bindParam(':patient_id', $patient_id, \PDO::PARAM_INT);
        $stmt->bindParam(':doctor_id', $doctor_id, \PDO::PARAM_INT);
        $stmt->bindParam(':date', $date, \PDO::PARAM_STR);
        $stmt->bindParam(':time', $time, \PDO::PARAM_STR);
        return $stmt->execute();
    }
}
