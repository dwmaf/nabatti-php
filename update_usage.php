<?php
include 'db.php';  // Koneksi ke database

// Dapatkan nama AI yang digunakan
$id = $_POST['id'];

// Update atau insert penggunaan AI
$sql = "UPDATE ai_usage_count
SET count = count + 1
WHERE id = 1;";
if ($conn->query($sql) === TRUE) {
    echo "Usage count updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();