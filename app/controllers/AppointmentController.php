<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\Appointment;
use App\Models\Doctor;

class AppointmentController extends Controller {

    public function index() {
        $appointmentModel = new Appointment();
        $doctorModel = new Doctor();
        
        $appointments = $appointmentModel->getAllAppointments();
        $doctors = $doctorModel->getAllDoctors();
        
        $this->render('appointments/index', ['appointments' => $appointments, 'doctors' => $doctors]);
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

            if (empty($patient_id) || empty($doctor_id) || empty($date) || empty($time)) {
                $_SESSION['error'] = "Tous les champs sont requis.";
                exit;
            }

            $appointmentModel = new Appointment();

            if ($appointmentModel->isAppointmentTaken($doctor_id, $date, $time)) {
                $_SESSION['error'] = "Ce créneau horaire est déjà réservé.";
                exit;
            }

            if ($appointmentModel->bookAppointment($patient_id, $doctor_id, $date, $time)) {
                $_SESSION['success'] = "Rendez-vous pris avec succès !";
                exit;
            } else {
                $_SESSION['error'] = "Une erreur s'est produite. Veuillez réessayer.";
                exit;
            }
        }
    }
}
