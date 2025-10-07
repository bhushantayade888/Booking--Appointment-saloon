<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['customer_name'];
    $contact = $_POST['contact_number'];
    $service = $_POST['service_type'];
    $date = $_POST['appointment_date'];
    $time = $_POST['appointment_time'];
    $notes = $_POST['notes'];

    $stmt = $conn->prepare("INSERT INTO bookings (customer_name, service_type, appointment_date, appointment_time, contact_number, notes) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $service, $date, $time, $contact, $notes);
    $stmt->execute();
    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmed – V K Unisex Salon</title>
    <style>
        body { font-family: 'Arial'; background: #f0f0f0; text-align: center; padding: 50px; }
        .confirm-box { background: white; padding: 30px; border-radius: 10px; display: inline-block; box-shadow: 0 0 10px #ccc; }
        h2 { color: #333; }
    </style>
</head>
<body>
    <div class="confirm-box">
        <h2>🎉 Appointment Confirmed</h2>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
        <p><strong>Service:</strong> <?php echo htmlspecialchars($service); ?></p>
        <p><strong>Date:</strong> <?php echo htmlspecialchars($date); ?></p>
        <p><strong>Time:</strong> <?php echo htmlspecialchars($time); ?></p>
        <p><strong>Contact:</strong> <?php echo htmlspecialchars($contact); ?></p>
        <p><strong>Note:</strong> <?php echo nl2br(htmlspecialchars($notes)); ?></p>
        <p>📍 Salon Location:<br>92, Hans Theater Rd, Suvarnatai Nagar, Ganesh Nagar, Chalisgaon, Maharashtra 424101</p>
        <p>Thank you for choosing <strong>V K Unisex Salon – Chalisgaon</strong>!</p>
    </div>
</body>
</html>
