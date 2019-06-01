<?php include 'incl/header.php'; ?>

  <!-- ======================= -->
  <!-- *****baby wear product layout start*****-->
  <!-- row one -->
   <!-- row one -->
  <div class="arts-and-craft-container-one">
  <?php 
      include 'db_connect.php';
// set the PDO error mode to exception
       $catID = "SELECT categoryID from categories WHERE categoryName = 'Home Products' ";
        foreach($conn->query($catID) as $row) {
           $caID = $row["categoryID"];
        }

       $sql = "SELECT * FROM products WHERE categoryID = '$caID' ";
          foreach($conn->query($sql) as $row) {
        
      ?>
  
    <div>
      <p><img width="220" src="<?php echo $row["picture"];?>"></p>
      <p style="font-size: 20px;"><?php echo  $row["productName"];?></p>
      <p>price&nbsp;:&nbsp;<span style="text-decoration: line-through;"><?php echo  $row["old_price"];?></span>&nbsp;&nbsp;&nbsp;<span><?php echo  $row["new_price"];?></span></p>
      <p>Rating:*****</p>
      <p>Instock: &nbsp;:&nbsp;<?php echo  $row["instock"];?> units</p>
      <p><span class="arts-and-craft-add-cart">add to cart</span> <span class="arts-and-craft-buy">Buy</span></p>
      <p class="arts-and-craft-full-pic">View Full size pic</p>
      <p class="arts-and-craft-view-details"><a href="arts-and-craft-product-details.html">View More details about the product</a></p>
    </div>

    <?php } ?>
  </div>

<!-- *****arts and craft product layout end****-->
<!-- =================================== -->
<?php include 'incl/footer.php'; ?>
  <!-- ------------- -->
    <div id="w"></div>
  <div id="demo" style="color: rgb(0,0,0);"></div>
  <button onclick="myFunction()">try</button>
  <script type="text/javascript" src="index.js"></script>
</body>
</html>