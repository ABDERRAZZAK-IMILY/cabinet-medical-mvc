<?php include '../app/views/layouts/header.php'; ?>

<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Prendre un rendez-vous</h2>

    <!-- Affichage des messages d'erreur -->
    <?php if (!empty($_SESSION['error'])): ?>
        <div class="bg-red-500 text-white p-3 rounded mb-4">
            <?= $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
    <?php endif; ?>

    <!-- Affichage des messages de succès -->
    <?php if (!empty($_SESSION['success'])): ?>
        <div class="bg-green-500 text-white p-3 rounded mb-4">
            <?= $_SESSION['success']; unset($_SESSION['success']); ?>
        </div>
    <?php endif; ?>

    <form action="/cabinet-medical-mvc/public/AppointmentController/book" method="POST" class="max-w-md bg-white rounded-lg shadow-md p-6">
        <input type="hidden" name="patient_id" value="<?= $_SESSION['user_id'] ?? ''; ?>">

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Médecin :</label>
            <select name="doctor_id" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <?php foreach ($doctors as $doctor): ?>
                    <option value="<?= $doctor['id'] ?>"><?= htmlspecialchars($doctor['name']) ?> - <?= htmlspecialchars($doctor['specialization']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Date :</label>
            <input type="date" name="date" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2">Heure :</label>
            <input type="time" name="time" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-md hover:bg-blue-600 transition duration-200">
            Prendre rendez-vous
        </button>
    </form>
</div>

<?php include '../app/views/layouts/footer.php'; ?>
