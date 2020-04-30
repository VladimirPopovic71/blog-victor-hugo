<?php

echo "pop admin.ajax.php";
exit();

include('./assets/db.php');
include('./assets/function.php');

if(isset($_POST["operation"])) {
    if($_POST["operation"] == "Add") {

        $name = $_POST["name"];
        $password = $_POST["password"];
        $email = $_POST["email"];                                 
        $facebook = $_POST["facebook"]; 
        $linkedin = $_POST["linkedin"]; 
        $twitter = $_POST["twitter"]; 
        $status = "U";

        $stmt = $pdo->prepare("INSERT INTO user (name, password, email, facebook, linkedin, twitter, status) 
                                           VALUES (:name, :password, :email, :facebook, :linkedin, :twitter, :status)");
        $result = $stmt->execute(array(
                ':name'     => $name,
                ':password' => $password, 
                ':email'    => $email,                                 
                ':facebook' => $facebook, 
                ':linkedin' => $linkedin, 
                ':twitter'  => $twitter, 
                ':status'   => $status
                )
        );
  
        if(!empty($result)){
            echo 'Data Inserted';
        }
    }
    if($_POST["operation"] == "Edit") {
        $user_id = $_POST["user_id"];
        $name = $_POST["name"];
        $password = $_POST["password"];
        $email = $_POST["email"];                                 
        $facebook = $_POST["facebook"]; 
        $linkedin = $_POST["linkedin"]; 
        $twitter = $_POST["twitter"]; 
        $status = "U";

        $stmt = $pdo->prepare("UPDATE user SET name = :name, password = :password, email = :email, facebook = :facebook, linkedin = :linkedin, twitter = :twitter, status = :status
                                            WHERE user_id = :user_id");
        $result = $stmt->execute(array(
            ':name'     => $name,
            ':password' => $password, 
            ':email'    => $email,                                 
            ':facebook' => $facebook, 
            ':linkedin' => $linkedin, 
            ':twitter'  => $twitter, 
            ':status'   => $status,
            ':user_id'   => $user_id
            ));
  
        if(!empty($result)) {
            echo 'Data Updated';
        }
    }
}
?> 