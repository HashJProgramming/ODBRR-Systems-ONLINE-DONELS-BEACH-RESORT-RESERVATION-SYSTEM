<?php

// Get the database connection
$db = new PDO('mysql:host=localhost;dbname=db_hashys', 'root', '');

// Get the form data
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['Price'];
$pax = $_POST['PAX'];

// Check if the room already exists
$sql = "SELECT * FROM lists WHERE name = ? AND type = 'room'";
$stmt = $db->prepare($sql);
$stmt->execute([$name]);
$result = $stmt->fetchAll();

if (count($result) > 0) {
    header('Location: ../staff.php');
    exit;
}

// Insert the data into the database
$sql = "INSERT INTO lists (name, descriptions, price, pax, type) VALUES (?, ?, ?, ?, 'room')";
$stmt = $db->prepare($sql);
$stmt->execute([$name, $description, $price, $pax]);

// Redirect to the home page
header('Location: ../staff.php');

?>