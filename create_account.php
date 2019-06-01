<?php
$host = "localhost";
$user = "root";
$pass = "1234567wiz";

$first_name =  $_POST["first_name"];
$last_name = $_POST["last_name"];
$city = $_POST["city"];
$state = $_POST["state"];
$phone_number = $_POST["phone_number"];
$email = $_POST["email"];
$password = $_POST["password"];
$repeatpassword = $_POST["repeatpassword"];


try {
    $conn = new PDO("mysql:host=$host;dbname=mwj", $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO users (firstName, lastName, city, state, phoneCalls, email,  password,  repeatpassword)
    VALUES ('$first_name', '$last_name', '$city','$phone_number',  '$state', '$email', '$password', '$repeatpassword')";
    // use exec() because no results are returned
    $conn->exec($sql);
    session_start();
    $_SESSION["first_name"] = $first_name;
    $_SESSION["last_name"] = $last_name;
    header("Location:signup_account.php");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;






// mysql_query("INSERT INTO subscribers (email, referral_id, user_id, ip_address)
// VALUES ('$user_email', '$user_refer', '$user_share', '".$_SERVER['REMOTE_ADDR']."')");

?>
