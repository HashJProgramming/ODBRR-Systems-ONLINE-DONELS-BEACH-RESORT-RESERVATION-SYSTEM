<?php

function get_pending_count() {
    // Connect to the database
    $db = new PDO('mysql:host=localhost;dbname=db_hashys', 'root', ''); 
    $sql = "SELECT * FROM transactions WHERE status = 'pending'";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount();
}

function get_decline_count() {
    // Connect to the database 
    $db = new PDO('mysql:host=localhost;dbname=db_hashys', 'root', '');
    $sql = "SELECT * FROM transactions WHERE status = 'decline'";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount();
}

function get_approved_count() {
    // Connect to the database
    $db = new PDO('mysql:host=localhost;dbname=db_hashys', 'root', '');
    $sql = "SELECT * FROM transactions WHERE status = 'approved'";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount();
}

function get_total_count() {
    // Connect to the database
    $db = new PDO('mysql:host=localhost;dbname=db_hashys', 'root', '');
    $sql = "SELECT * FROM transactions";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount();
}