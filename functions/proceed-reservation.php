<?php

// Get the data from the form
session_start();
if (isset($_SESSION['id'])){
    $user_id = $_SESSION['id'];
}

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hashys', 'root', '');


// Check if the data exists  
$sql = "SELECT * FROM transactions WHERE user_id = :id AND status = 'processing'";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $user_id);
$stmt->execute();

if ($stmt->rowCount() === 0) {
    header('Location: ../transaction.php');
  exit;
}

// Update the status of the transaction
$sql = "UPDATE transactions SET status = 'pending' WHERE user_id = :id AND status = 'processing'";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $user_id);
$stmt->execute();

// Redirect the user to the home page
header('Location: ../my-reservation-list.php');

?>