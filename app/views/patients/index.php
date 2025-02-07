<?php include '../app/views/layouts/header.php'; ?>
<div class="container mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Tableau de bord</h2>

    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <p class="text-xl text-gray-700 mb-4">
            Bienvenue <span class="font-semibold"><?= htmlspecialchars($patient['name'] ?? 'Patient') ?></span> !
        </p>

        <ul class="space-y-4">
            <li>
                <a href="cabinet-medical-mvc/public/appointments" 
                   class="block w-full p-4 text-left text-gray-700 bg-gray-50 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition duration-150">
                    <span class="font-medium">Prendre un rendez-vous</span>
                </a>
            </li>
            <li>
                <a href="/patient/history"
                   class="block w-full p-4 text-left text-gray-700 bg-gray-50 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition duration-150">
                    <span class="font-medium">Voir l'historique de mes consultations</span>
                </a>
            </li>
            <li>
                <a href="/patient/profile"
                   class="block w-full p-4 text-left text-gray-700 bg-gray-50 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition duration-150">
                    <span class="font-medium">Mettre à jour mon profil</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<?php include '../app/views/layouts/footer.php'; ?>
