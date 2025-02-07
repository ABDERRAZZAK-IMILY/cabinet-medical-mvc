<?php include '../app/views/layouts/header.php'; ?>
<h2>Historique des consultations</h2>

<?php if (empty($appointments)) : ?>
    <p>Vous n'avez pas encore de consultations.</p>
<?php else: ?>
    <table border="1">
        <tr>
            <th>Médecin</th>
            <th>Date</th>
            <th>Heure</th>
            <th>Statut</th>
            <th>Action</th>
        </tr>
        <?php foreach ($appointments as $appointment): ?>
            <tr>
                <td><?= htmlspecialchars($appointment['doctor_name']) ?></td>
                <td><?= $appointment['date'] ?></td>
                <td><?= $appointment['time'] ?></td>
                <td><?= $appointment['status'] ?></td>
                <td>
                    <?php if ($appointment['status'] === 'En attente') : ?>
                        <a href="/patient/cancel_appointment?id=<?= $appointment['id'] ?>">Annuler</a>
                    <?php else: ?>
                        -
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

<?php include '../app/views/layouts/footer.php'; ?>
