<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashys', 'root', '');

// Get the form data
$id = $_POST['data_id'];

// Check if the data exists 
$sql = "SELECT * FROM lists WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

if ($stmt->rowCount() === 0) {
  echo "The user does not exist.";
  exit;
}

// Check if the data exists 
$sql = "SELECT * FROM transactions WHERE lists_id = :id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

if ($stmt->rowCount() === 0) {
  echo "The user does not exist.";
  exit;
}else{
  // Remove the data from the database
  $sql = "DELETE FROM transactions WHERE lists_id = :id";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':id', $id);
  $stmt->execute();

}

// Remove the data from the database
$sql = "DELETE FROM lists WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

// Redirect the user to the home page
header('Location: ../staff.php');

?>