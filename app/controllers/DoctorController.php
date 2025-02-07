<?php
// namespace App\Controllers;
use Core\Controller;
use App\Models\Doctor;
use App\Models\Appointment;
class DoctorController extends Controller {

    public function index() {
        $appointmentModel = new Appointment();
        $appointments = $appointmentModel->getAllAppointments();
        $this->render('doctors/index', ['appointments' => $appointments]);
    }

    public function show($id) {
        $doctorModel = new Doctor();
        $doctor = $doctorModel->getDoctorById($id);
        $this->render('doctors/show', ['doctor' => $doctor]);
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'] ?? '';
            $specialty = $_POST['specialty'] ?? '';

            $doctorModel = new Doctor();
            $doctorModel->addDoctor($name, $specialty);

            header("Location: /doctors");
        }
    }
}
