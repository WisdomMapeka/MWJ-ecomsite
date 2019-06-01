 <?php
  session_start();
  ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" type="text/css" href="create_account.css">
</head>
<body onresize="mylen()">
<!-- -----------container-one-------------------------- -->
	<div class="container-one">
		<div class="greeting">
		    Hello. Please 
		    <a href="#">Sign in</a> or <a href="#">create account</a>
		</div>
		<div class="sell"><a href="sell-with-us.php">Sell with us</a></div>
		<div class="help-contact">You need help contact us</div>
		<div class="cart-image">
			<img width="20" src="images/icons/shopping-cart.png">
		</div>
		<div class="cart-item-num">10</div>	
	</div>
<!-- -----------container-two-------------------------- -->
	<div class="container-two">
		<div class="logo">MWJ</div>
		<!-- ******Shop by category dropdown start*** -->
		<div class="shop-by-cate shop-by-category">
	     	 
        Shop by Category
		 <img width="10" src="images/icons/drop-down-arrow.svg">
<!-- ===================== Start ===================-->
    <div class="shop-by-category-drop-down-content">
      <div class="flex-container">

      <!-- =======================Column one ===================-->
          <div class="column-one">
            <div>
              <p class="product-links-heading">Women's Clothes</p>
              <p class="product-links">Dresses</p>
              <p class="product-links">Hats</p>
              <p class="product-links">Tops</p>
              <p class="product-links">Blouses</p>
              <p class="product-links">Trousers</p>
            </div>
            <div>
              <p class="product-links-heading">Men's Clothes</p>
              <p class="product-links">Shirts</p>
              <p class="product-links">Suits</p>
              <p class="product-links">Jeans</p>
              <p class="product-links">Shoes</p>
              <p class="product-links">Shorts</p>
              <p class="product-links">T.shirts</p>
            </div>
          </div>
         
      <!-- =======================Column two ===================-->
          <div class="column-two">
            <div>
              <p class="product-links-heading">Beauty Products</p>
              <p class="product-links">Face Wash</p>
              <p class="product-links">Body Soaps</p>
              <p class="product-links">Face Soaps</p>
              <p class="product-links">Sunscreens</p>
              <p class="product-links">Face Lotions</p>
              <p class="product-links">Body Lotions</p>
              <p class="product-links"> Bath Foams</p>
            </div>
            <div>
              <p class="product-links-heading">Books</p>
              <p class="product-links">Novels</p>
              <p class="product-links">Comics</p>
              <p class="product-links">Diarries</p>
              <p class="product-links">Exercise</p>
            </div>
          </div>
      <!-- =======================Column three ===================-->
          <div class="column-three">
            <div class="product-links-heading-arts">Arts and Craft</div>
            <div>
                <p class="product-links-heading">Automotive</p>
                <p class="product-links">Cars</p>
                <p class="product-links">Trucks</p>
                <p class="product-links"> Buses</p>
                <p class="product-links">Engines</p>
                <p class="product-links">Cargo Carries</p>
            </div>
            <div>
              <p class="product-links-heading">Baby's Wear</p>
              <p class="product-links">Diapers</p>
              <p class="product-links">T.Shirts</p>
              <p class="product-links">Pollonecks</p>
            </div>
          </div>
      <!-- =======================Column four ===================-->

           <div class="column-four">
            <div>
              <p class="product-links-heading">Computers</p>
              <p class="product-links">Desktops</p>
              <p class="product-links">Laptops</p>
              <p class="product-links">Phones</p>
              <p class="product-links">Harddrives</p>
              <p class="product-links">Cables</p>
            </div>
            <div>
              <p class="product-links-heading">Electronics</p>
              <p class="product-links">Cables</p>
              <p class="product-links">Cells</p>
              <p class="product-links">MCBs</p>
              <p class="product-links">Switch</p>
            </div>
          </div>
      <!-- =======================Column Five ===================-->
          <div class="column-five">
            <div>
              <p class="product-links-heading">Girls</p>
              <p class="product-links">Dresses</p>
              <p class="product-links">Tops</p>
              <p class="product-links">T.shirts</p>
            </div>
            <div>
              <p class="product-links-heading">Boys</p>
              <p class="product-links">Shirts</p>
              <p class="product-links">T.shirts</p>
              <p class="product-links">Jeans</p>
            </div>
            <div>
              <p class="product-links-heading">Health Products</p>
              <p class="product-links">Sythetic Drugs</p>
              <p class="product-links">Herbs</p>
            </div>
          </div>
        </div>
    </div>

<!-- ======================= end ===================-->
		</div>
<!-- **********Shop by category dropdown end****************** -->
		<div>
			<form class="search-form">
				<input type="text" name="search" placeholder="search Products ...">
				<button>search</button>
			</form>
		</div>	
	</div>
<!-- ------------------container-three----------------- -->
<?php include 'incl/container_three_menus.php'; ?>
	<!-- ----------container four------------- -->
	<div class="container-four">
	

		<div>
			<p class="container-four-sell">Signing Up</p>
		</div>

	</div>

  <!-- ======================= -->
  <!-- Message after signing Up successfully -->
  <?php
  if(isset($_SESSION["first_name"]) &&  isset($_SESSION["last_name"])){
   ?>
  
  <div class="message-after-successfully-signing-up">
    Congradulations. <?php echo $_SESSION["first_name"]; 
    echo " ";
     echo $_SESSION["last_name"];?>
     You have successfully created an account. You can now log in
  </div>

  <?php  session_destroy(); } ?> 
  <!-- Sign up Form -->
  <form class="create_account" action="create_account.php" method="POST">
    <div class="create_account-first-div">
      Required<span class="create_account-span-star">*</span>
    </div>
    <div class="create_account-div">
      <span class="create_account-span">First Name</span> 
      <input type="text" name="first_name">
      <span class="create_account-span-star">*</span>
    </div>
    <div class="create_account-div">
      <span class="create_account-span">Last Name</span> 
      <input type="text" name="last_name">
      <span class="create_account-span-star">*</span>
    </div>
    <div class="create_account-div">
      <span class="create_account-span">City</span> 
      <input type="text" name="city">
      <span class="create_account-span-star">*</span>
    </div>
    <div class="create_account-div">
      <span class="create_account-span">State</span>
      <input type="text" name="state">
    </div>
    <div class="create_account-div">
      <span class="create_account-span">Phone Number</span> 
      <input type="text" name="phone_number">
    </div>
    <div class="create_account-div">
      <span class="create_account-span">Email</span> 
      <input type="text" name="email">
      <span class="create_account-span-star">*</span>
    </div>
    <div class="create_account-div">
      <span class="create_account-span">Password</span> 
      <input type="text" name="password">
      <span class="create_account-span-star">*</span>
    </div>
    <div class="create_account-div">
      <span class="create_account-span">Repeat Password</span> 
      <input type="text" name="repeatpassword">
      <span class="create_account-span-star">*</span>
    </div>
    <div class="create_account-last-div">
      <input type="submit" name="create" value="create account">
    </div>
  </form>




<!-- =================================== -->
    <div class="call-to-action">
    Sign Up and Get More Customised Experience
  </div>
  <!-- --------------footer------------------------ -->
  <!-- ------------- -->
    <div id="w"></div>
  <div id="demo" style="color: rgb(0,0,0);"></div>
  <button onclick="myFunction()">try</button>
  <script type="text/javascript" src="index.js"></script>
</body>
</html>