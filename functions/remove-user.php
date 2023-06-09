<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashys', 'root', '');

// Get the form data
$id = $_POST['data_id'];

// Check if the user exists
$sql = "SELECT * FROM users WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

if ($stmt->rowCount() === 0) {
  echo "The user does not exist.";
  exit;
}

// check if user has transactions then delete the transactions
$sql = "SELECT * FROM transactions WHERE user_id = :id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

if ($stmt->rowCount() > 0) {
  // Remove the data from the database
  $sql = "DELETE FROM transactions WHERE user_id = :id";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':id', $id);
  $stmt->execute();
}

// Remove the user from the database 
$sql = "DELETE FROM users WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

// Redirect the user to the home page
header('Location: ../staff.php');

?>