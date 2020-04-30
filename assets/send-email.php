<?php
// define variables and set to empty values
$nameErr = "1";
$emailErr = "2";
$name = "3";
$email = "4";
$message = "5";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }  
 
  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }
}

$to = "info@vladimirpopovic.biz";
$subject =  $name;
$message = "<strong>Poruka</strong>: <br>" . $message . "<br><br>-------------------------<br><strong>Poslao</strong>: " . $name . "<br><strong>E-mail</strong>: " . $email ;
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@vladimirpopovic.biz>' . "\r\n";
$headers .= 'Cc: vladimir.popovic.71@outlook.com' . "\r\n";

mail($to,$subject,$message,$headers);

header("Location: index.php");

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>