<?php

    function upload_image() {
        if(isset($_FILES["user_image"]))  {
            $extension = explode('.', $_FILES['user_image']['name']);
            $new_name = rand() . '.' . $extension[1];
            $destination = './upload/' . $new_name;
            move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);
            return $new_name;
        }
    }

    function get_image_name($user_id) {
        include('./assets/db.php');
        $stmt = $pdo->prepare("SELECT image FROM user WHERE id = '$user_id'");
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach($result as $row) {
            return $row["image"];
        }
    }

    function get_total_all_records() {
        include('./assets/db.php');
        $stmt = $pdo->prepare("SELECT * FROM user");
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $stmt->rowCount();
    }

?>