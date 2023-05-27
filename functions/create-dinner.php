<?php

// Get the database connection
$db = new PDO('mysql:host=localhost;dbname=db_hashys', 'root', '');

// Get the form data
$name = $_POST['name'];
$price = $_POST['price'];

// Check if the catage already exists
$sql = "SELECT * FROM foods WHERE name = ? AND type = 'dinner'";
$stmt = $db->prepare($sql);
$stmt->execute([$name]);
$result = $stmt->fetchAll();

if (count($result) > 0) {
    header('Location: ../staff.php');
    exit;
}

// Insert the data into the database
$sql = "INSERT INTO foods (name, price, type) VALUES (?, ?, 'dinner')";
$stmt = $db->prepare($sql);
$stmt->execute([$name, $price]);

// Redirect to the home page
header('Location: ../staff.php');

?>