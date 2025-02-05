<?

class Appointment {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function createAppointment($data) {
        $stmt = $this->db->prepare("INSERT INTO appointments (patient_id, doctor_id, date) VALUES (:patient_id, :doctor_id, :date)");
        $stmt->execute($data);
        return $this->db->lastInsertId();
    }
}