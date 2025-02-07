<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Register</h1>
        
        <?php if (isset($error)): ?>
            <p class="text-red-500 text-sm mb-4"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>

        <form action="/cabinet-medical-mvc/public/register" method="POST" class="space-y-4">
            <div>
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <input type="text" name="name" required 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500">
            </div>

            <div>
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="email" name="email" required 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500">
            </div>

            <div>
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
                <input type="password" name="password" required 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500">
            </div>

            <div>
                <label for="role" class="block text-gray-700 text-sm font-bold mb-2">Role:</label>
                <select name="role" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500">
                    <option value="patient">Patient</option>
                    <option value="doctor">Doctor</option>
                </select>
            </div>

            <button type="submit" 
                class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                Register
            </button>
        </form>

        <p class="mt-4 text-center text-sm text-gray-600">
            Already have an account? 
            <a href="/cabinet-medical-mvc/public/login" class="text-blue-500 hover:text-blue-700">Login here</a>
        </p>
    </div>
</body>
</html>
