<?php
namespace App\Models;

use Core\Model;

class Appointment extends Model {
    protected $table = 'appointments';

    public function getAllAppointments() {
        $stmt = $this->db->query("
            SELECT a.id, a.appointment_date, 
                   p.name AS patient_name, d.specialization, u.name AS doctor_name
            FROM appointments a
            JOIN users p ON a.patient_id = p.id
            JOIN doctors d ON a.doctor_id = d.id
            JOIN users u ON d.user_id = u.id
        ");
        return $stmt->fetchAll();
    }
    

    public function getAppointmentById($id) {
        $stmt = $this->db->prepare("
            SELECT a.id, a.appointment_date, a.appointment_time, 
                   p.name AS patient_name, d.specialization, u.name AS doctor_name
            FROM appointments a
            JOIN users p ON a.patient_id = p.id
            JOIN doctors d ON a.doctor_id = d.id
            JOIN users u ON d.user_id = u.id
            WHERE a.id = :id
        ");
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function isAppointmentTaken($doctor_id, $date, $time) {
        $stmt = $this->db->prepare("
            SELECT COUNT(*) FROM appointments 
            WHERE doctor_id = :doctor_id 
            AND appointment_date = :date 
            AND appointment_time = :time
        ");
        $stmt->bindParam(':doctor_id', $doctor_id, \PDO::PARAM_INT);
        $stmt->bindParam(':date', $date, \PDO::PARAM_STR);
        $stmt->bindParam(':time', $time, \PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchColumn() > 0;
    }

    public function bookAppointment($patient_id, $doctor_id, $date, $time) {
        $stmt = $this->db->prepare("
            INSERT INTO appointments (patient_id, doctor_id, appointment_date, appointment_time) 
            VALUES (:patient_id, :doctor_id, :date, :time)
        ");
        $stmt->bindParam(':patient_id', $patient_id, \PDO::PARAM_INT);
        $stmt->bindParam(':doctor_id', $doctor_id, \PDO::PARAM_INT);
        $stmt->bindParam(':date', $date, \PDO::PARAM_STR);
        $stmt->bindParam(':time', $time, \PDO::PARAM_STR);
        return $stmt->execute();
    }
}
