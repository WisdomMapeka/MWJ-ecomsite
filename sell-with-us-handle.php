<?php
$host = "localhost";
$user = "root";
$pass = "1234567wiz";

$company_name =  $_POST["company-name"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$phone_calls = $_POST["phone-calls"];
$phone_whatsapp = $_POST["phone-whatsapp"];
$email = $_POST["email"];
$website = $_POST["website"];
$RTGS = $_POST["RTGS"];
$USD = $_POST["USD"];
$VISA = $_POST["VISA"];


try {
    $conn = new PDO("mysql:host=$host;dbname=mwj", $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO suppliers(companyName, address1, city, state, phoneCalls, phoneWhatsapp,  email, url, paymentMethodsRTGS, paymentMethodsUSD, paymentMethodsVISA)
    VALUES ('$company_name', '$address', '$city',  '$state','$phone_calls', 
    '$phone_whatsapp', '$email', '$website', '$RTGS', '$USD', '$VISA')";
    // use exec() because no results are returned
    $conn->exec($sql);
    session_start();
    $_SESSION["company_name"] = $company_name;
    header("Location:sell-with-us.php");
    // header("Location:signup_account.php");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;






// mysql_query("INSERT INTO subscribers (email, referral_id, user_id, ip_address)
// VALUES ('$user_email', '$user_refer', '$user_share', '".$_SERVER['REMOTE_ADDR']."')");

?>
