<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "Espace Patient" ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen">
    <header class="bg-white shadow-lg">
        <div class="container mx-auto px-4 py-4">
            <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4 md:mb-0">
                    Bienvenue sur votre espace patient
                </h1>
                <nav class="flex flex-wrap gap-4 md:gap-6">
                    <a href="/patient/dashboard" 
                       class="text-gray-600 hover:text-blue-600 font-medium transition-colors duration-200">
                        Accueil
                    </a>
                    <a href="/patient/appointments" 
                       class="text-gray-600 hover:text-blue-600 font-medium transition-colors duration-200">
                        Prendre un rendez-vous
                    </a>
                    <a href="/patient/history" 
                       class="text-gray-600 hover:text-blue-600 font-medium transition-colors duration-200">
                        Historique
                    </a>
                    <a href="/logout" 
                       class="text-red-500 hover:text-red-700 font-medium transition-colors duration-200">
                        Déconnexion
                    </a>
                </nav>
            </div>
        </div>
    </header>
    <main class="container mx-auto px-4 py-8">
