<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Reports</title>
</head>
<body>
<?php include '../app/views/layouts/header.php'; ?>
    <a href="/doctors/dashboard" class="back-link">&laquo; Back to Dashboard</a>
    <div class="container">
        <h1>Medical Reports</h1>
        
        <?php if(isset($data['reports']) && is_array($data['reports'])) : ?>
            <div class="reports-list">
                <?php foreach($data['reports'] as $report) : ?>
                    <div class="report-card">
                        <h3>Patient: <?php echo $report->patient_name; ?></h3>
                        <p>Date: <?php echo date('d/m/Y', strtotime($report->report_date)); ?></p>
                        <p>Diagnosis: <?php echo $report->diagnosis; ?></p>
                        <p>Treatment: <?php echo $report->treatment; ?></p>
                        <div class="actions">
                            <a href="/reports/edit/<?php echo $report->id; ?>" class="btn btn-edit">Edit</a>
                            <a href="/reports/view/<?php echo $report->id; ?>" class="btn btn-view">View Details</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <p>No reports found.</p>
        <?php endif; ?>
        
        <a href="/reports/add" class="btn btn-primary">Create New Report</a>
    </div>

    <?php include '../app/views/layouts/footer.php'; ?>
    </body>
</html>