<?php

function get_pending_count() {
    // Connect to the database
    $db = new PDO('mysql:host=localhost;dbname=db_hashys', 'root', ''); 
    $sql = "SELECT * FROM transactions WHERE user_id = :id AND status = 'pending'";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $_SESSION['id']);
    $stmt->execute();
    echo $stmt->rowCount();
}

function get_decline_count() {
    // Connect to the database
    $db = new PDO('mysql:host=localhost;dbname=db_hashys', 'root', '');
    $sql = "SELECT * FROM transactions WHERE user_id = :id AND status = 'decline'";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $_SESSION['id']);
    $stmt->execute();
    echo $stmt->rowCount();
}

function get_total_count() {
    // Connect to the database
    $db = new PDO('mysql:host=localhost;dbname=db_hashys', 'root', '');
    $sql = "SELECT * FROM transactions WHERE user_id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $_SESSION['id']);
    $stmt->execute();
    echo $stmt->rowCount();
}