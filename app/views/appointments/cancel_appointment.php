<?php include '../app/views/layouts/header.php'; ?>

<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Annulation du rendez-vous</h2>

    <div class="bg-white rounded-lg shadow-md p-6 max-w-2xl">
        <p class="text-gray-700 mb-6">
            Voulez-vous vraiment annuler ce rendez-vous avec Dr. <?= htmlspecialchars($doctor_name) ?> 
            le <?= $appointment['date'] ?> à <?= $appointment['time'] ?> ?
        </p>

        <form action="/patient/cancel_appointment" method="POST" class="flex gap-4">
            <input type="hidden" name="appointment_id" value="<?= $appointment['id'] ?>">
            <button type="submit" name="confirm" value="yes" 
                class="bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-4 rounded-md transition-colors">
                Oui, annuler
            </button>
            <a href="/patient/history" 
                class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium py-2 px-4 rounded-md transition-colors">
                Non, revenir
            </a>
        </form>
    </div>
</div>

<?php include '../app/views/layouts/footer.php'; ?>
