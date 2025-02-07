<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\Appointment;

class AppointmentController extends Controller {

    public function index() {
        $appointmentModel = new Appointment();
        $appointments = $appointmentModel->getAllAppointments();
        $this->render('appointments/index', ['appointments' => $appointments]);
    }

    public function show($id) {
        $appointmentModel = new Appointment();
        $appointment = $appointmentModel->getAppointmentById($id);
        $this->render('appointments/show', ['appointment' => $appointment]);
    }

    public function book() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $patient_id = $_POST['patient_id'] ?? '';
            $doctor_id = $_POST['doctor_id'] ?? '';
            $date = $_POST['date'] ?? '';
            $time = $_POST['time'] ?? '';

            $appointmentModel = new Appointment();
            $appointmentModel->bookAppointment($patient_id, $doctor_id, $date, $time);

            header("Location: /appointments");
        }
    }
}
