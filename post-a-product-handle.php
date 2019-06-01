<?php
$host = "localhost";
$user = "root";
$pass = "1234567wiz";

$product_name =  $_POST["product-name"];
$short_description = $_POST["pro-short-descri"];
$full_description = $_POST["pro-full-descri"];
$old_price = $_POST["old-price"];
$new_price = $_POST["new-price"];
$discount = $_POST["discount"];
$instock = $_POST["instock"];
$categories = $_POST["categories"];



// posting pic one start=============================================
$target_dir = "uploads/";
$target_file_one = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file_one,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file_one)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file_one)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.<br>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


// posting pic one end ================================================



try {
    $conn = new PDO("mysql:host=$host;dbname=mwj", $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $cateID = "select categoryID from categories where categoryName= '$categories'; ";
      foreach($conn->query($cateID) as $row){
      $idCat =  $row["categoryID"] ;
     };
      $sql = "INSERT INTO products(productName, productShortDescription, productbFullDescription,  categoryID,  old_price, new_price,  discount,  instock,  picture)
    VALUES ('$product_name', '$short_description', '$full_description', '$idCat','$old_price', '$new_price', 
    '$discount', '$instock', '$target_file_one')";
    // use exec() because no results are returned
    $conn->exec($sql);
    session_start();
    $_SESSION["product-name"] = $product_name;
    header("Location:post-a-product.php");
    // header("Location:signup_account.php");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;






?>
