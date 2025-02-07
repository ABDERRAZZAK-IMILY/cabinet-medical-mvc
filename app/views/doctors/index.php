<!DOCTYPE html>
<html>
<head>
    <title>Doctor Dashboard - Medical Cabinet</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-8">Doctor Dashboard</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Today's Appointments</h3>
                <p class="text-2xl font-bold text-blue-600"><?= isset($todayAppointments) ? count($todayAppointments) : 0 ?></p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Total Patients</h3>
                <p class="text-2xl font-bold text-blue-600"><?= isset($totalPatients) ? $totalPatients : 0 ?></p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Pending Reports</h3>
                <p class="text-2xl font-bold text-blue-600"><?= isset($pendingReports) ? $pendingReports : 0 ?></p>
            </div>
        </div>

        <div class="flex gap-4 mb-8">
            <a href="/patients/list" class="px-4 py-2 bg-cyan-600 text-white rounded-md hover:bg-cyan-700">View Patients</a>
            <a href="index.php?action=reports" class="px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-700">Manage Reports</a>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Today's Appointments</h2>
            <?php if (isset($todayAppointments) && !empty($todayAppointments)): ?>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Time</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Patient Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php foreach ( $appointments as $appointment): ?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap"><?= htmlspecialchars($appointment->time) ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap"><?= htmlspecialchars($appointment->patient_name) ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap"><?= htmlspecialchars($appointment->status) ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="/appointments/view/<?= $appointment->id ?>" class="inline-block px-4 py-2 bg-cyan-600 text-white rounded-md hover:bg-cyan-700 mr-2">View</a>
                                        <a href="/appointments/update/<?= $appointment->id ?>" class="inline-block px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-700">Update</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <p class="text-gray-600">No appointments scheduled for today.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
