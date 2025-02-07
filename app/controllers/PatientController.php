<?php
// namespace App\Controllers;

use Core\Controller;
use App\Models\Patient;

class PatientController extends Controller {

    public function index() {
        $patientModel = new Patient();
        $patients = $patientModel->getAllPatients();
        $this->render('patients/index', ['patients' => $patients]);
    }

    public function show($id) {
        $patientModel = new Patient();
        $patient = $patientModel->getPatientById($id);
        $this->render('patients/show', ['patient' => $patient]);
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'] ?? '';
            $dob = $_POST['dob'] ?? '';
            $email = $_POST['email'] ?? '';

            $patientModel = new Patient();
            $patientModel->addPatient($name, $dob, $email);

            header("Location: /patients");
        }
    }
}
