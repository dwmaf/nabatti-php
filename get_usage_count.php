<?php
include 'db.php';

$sql = "SELECT count FROM ai_usage_count WHERE id = 1;";
$result = $conn->query($sql);

if ($result && $row = $result->fetch_assoc()) {
  echo json_encode(["usage_count" => $row["count"]]);
} else {
  echo json_encode(["usage_count" => 0]); // fallback kalau error
}

$conn->close();
?>
