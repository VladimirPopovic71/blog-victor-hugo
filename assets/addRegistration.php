<?php

require('db.php');
$name = $password = $email = $facebook = $linkedin = $twitter = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email =  $_POST["email"];
    $facebook =  $_POST["facebook"];
    $linkedin =  $_POST["linkedin"];
    $twitter =  $_POST["twitter"];    
    $status =  "U";    
    
    $stmt = $pdo->prepare("INSERT INTO user (name, password, email, facebook, linkedin, twitter, status) VALUES (:name, :password, :email, :facebook, :linkedin, :twitter, :status)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':facebook', $facebook);
    $stmt->bindParam(':linkedin', $linkedin);
    $stmt->bindParam(':twitter', $twitter);
    $stmt->bindParam(':status', $status);
    $stmt->execute();

    header("Location: http://localhost/");
}
?>