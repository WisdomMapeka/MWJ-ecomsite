<?php include 'incl/header.php'; ?>
<link rel="stylesheet" type="text/css" href="post-product.css">

  <!-- ======================= -->
  <!-- *****post a product layout start*****-->
  <div class="post-product-heading">Post a Product</div>
   <!-- Message affter product have been posted -->
  <?php
   if(isset($_SESSION["product-name"])){
   ?>
  <div class="post-message-after-posting-product">Product Posted successfull</div>
  <?php  session_destroy(); } ?> 
  <!-- ---------------------------------------------------------- -->
  <div class="post-product-container">
    <form action="post-a-product-handle.php" method="POST" enctype="multipart/form-data">
      <div>
        <span>Product Name</span>
        <input type="text" name="product-name">
      </div>

      <div class="post-short-descri">
        <span>Product Short Description</span>
        <textarea name="pro-short-descri" rows="5" cols="21">
        </textarea>
      </div>

      <div>
        <span>Product Full Description</span>
        <textarea name="pro-full-descri" rows="10" cols="21">
        </textarea>
      </div>

      <div>
        <span> Category</span>
        <?php
          $host = "localhost";
          $user = "root";
          $pass = "1234567wiz";


          try {
              $conn = new PDO("mysql:host=$host;dbname=mwj", $user, $pass);
              // set the PDO error mode to exception
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "SELECT * FROM categories";
              // use exec() because no results are returned
                    echo "<select name='categories'>";
                    foreach($conn->query($sql) as $row) {
                    echo "<option>" . $row["categoryName"] . "</option>";
                  }
                  echo "</select>";
              }
          catch(PDOException $e)
              {
              echo $sql . "<br>" . $e->getMessage();
              }

          $conn = null;

          ?>
      </div>

      <div>
        <span> Old Price</span>
        <input type="text" name="old-price">
      </div>

      <div>
        <span> New Price</span>
        <input type="text" name="new-price">
      </div>

      <div>
        <span>Discount</span>
        <input type="text" name="discount">
      </div>

      <div>
        <span>Instock</span>
        <input type="text" name="instock">
      </div>

      <div>
        <span>Picture one</span>
        <input type="file" name="fileToUpload" id="fileToUpload">
      </div>

      <div>
        <input type="submit" name="post" value="post">
      </div>
    </form>
  </div>

<!-- *****post a product layout end****-->
<!-- =================================== -->
 <?php include 'incl/footer.php'; ?>
  <!-- ------------- -->
    <div id="w"></div>
  <div id="demo" style="color: rgb(0,0,0);"></div>
  <button onclick="myFunction()">try</button>
  <script type="text/javascript" src="index.js"></script>
</body>
</html>