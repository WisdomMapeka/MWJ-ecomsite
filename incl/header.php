<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" type="text/css" href="main-pages.css">
  <link rel="stylesheet" type="text/css" href="s.css">

</head>
<body onresize="mylen()">
<!-- -----------container-one-------------------------- -->
	<div class="container-one">
		<div class="greeting">
       <?php
        if(isset($_SESSION["email"])){
        ?>
          Wellcome &nbsp; <?php echo  $_SESSION["firstName"]; ?>
        <a href="sign_out.php">Sign out</a>
        <!--  -->
      <?php } else{ ?>
		    Hello. Please 
		    <a href="log_in.php">Sign in</a> or <a href="create_account.php">create account</a>
      <?php } ?>
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
            <div class="product-links-heading-today">Today's Special</div>
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
<?php include 'incl/live_search/backend-search.php'; ?>
<?php include 'incl/live_search/search-form.php'; ?>


<!-- 		<div>
			<form class="search-form">
				<input type="text" name="search" placeholder="search Products ...">
				<button>search</button>
			</form>
		</div>	 -->
	</div>
<!-- ------------------container-three----------------- -->
<div id="container-three-id" class="container-three">
    <p class="home"><a href="index.php"> Home</a></p>
    <p class="arts"><a href="arts-and-carts.php">Arts and Craft</a></p>
    <p id="automo" class="automo"><a href="automative.php">Automotive</a></p>
    <p id="baby" class="baby"><a href="baby_wear.php">Baby's wear</a></p>
    <p id="beauty" class="beauty"><a href="beauty_products.php"> Beauty Products</a></p>
    <p id="book" class="book"><a href="books.php">Books</a> </p>
    <p id="computers" class="computers"><a href="computers.php">Computers</a> </p>
    <p id="electro" class="electro"><a href="electronics.php">Electronics</a> </p>
    <div id="dropdown" class="dropdown">
      <span class="More">More&nbsp;<img width="10" src="images/icons/drop-down-arrow.svg"></span>
      <div class="dropdown-content">
        <div class="dropdown-content-box-display">
          <div class="dropdown-content-box-one">
            <p class="women"><a href="women.php"> Women's clothes</a></p>
            <p class="men"><a href="men.php"> Men's clothes</a></p>
            <p class="girls"><a href="girl.php"> Girl's clothes</a></p>
            <p class="boy"><a href="boy.php"> Boy's Clothes</a></p>
            <p class="health"><a href="health.php"> Health Products</a></p>
            <p class="home"><a href="home_products.php">Home Products</a> </p>
            <p class="industrial"><a href="industrial.php"> Industrial</a></p>
          </div>
          <div class="dropdown-content-box-two">
            <p class="agro"><a href="agro_products.php">Agro Products</a></p>
            <p class="food"><a href="food.php">Food</a></p>
            <p class="animas"><a href="animals.php">Animals</a> </p>
            <p class="services"><a href="services.php">Services</a></p>
            <p class="school"><a href="school.php">school</a> </p>
            <p class="cars"><a href="cars.php">cars</a> </p>
            <p class="games"><a href="games.php"> games</a></p>
          </div>
          <div id="dropdown-content-id" class="dropdown-content-box-three"> </div>
        </div>
      </div>
    </div>
  </div>


    <!-- ============== -->
<?php
  if(isset($_SESSION["email"])){
?>
    <div class="container-alt">
    <div class="alt-one">
      <p>Thanks for being part our team &nbsp; <?php echo  $_SESSION["firstName"];?>
        &nbsp; <?php echo  $_SESSION["lastName"];?></p>
      </p>
    </div>

    <div class="alt-two">
      <p>Reach Millions of people. Post your products here</p>
    </div>
  </div>
<?php } else{?>

  <!-- =============== -->
	<!-- ----------container four------------- -->
	<div class="container-four">
		<div>
			<p>IF you Already Have an account</p>
			<p class="container-four-signin"><a href="log_in.php">Sign In</a></p>
		</div>

		<div>
			<p class="container-four-sell">Sell Your Products With Us</p>
		</div>

		<div>
			<p>For Better and customised experience</p>
			<p class="container-four-signup"><a href="signup_account.php">Sign Up</a> </p>
		</div>
	</div>

<?php } ?>



