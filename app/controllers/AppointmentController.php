<?


class AppointmentController {
    public function bookAppointment($patientId, $doctorId, $date) {
        $appointmentModel = new Appointment();
        $appointmentModel->createAppointment([
            'patient_id' => $patientId,
            'doctor_id' => $doctorId,
            'date' => $date
        ]);
        header("Location: /appointments");
        exit;
    }
}