<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" type="text/css" href="main-pages.css">
</head>
<body onresize="mylen()">
<!-- -----------container-one-------------------------- -->
	<div class="container-one">
		<div class="greeting">
		    Hello. Please 
		    <a href="#">Sign in</a> or <a href="create_account.html">create account</a>
		</div>
		<div class="sell"><a href="sell-with-us.html">Sell with us</a></div>
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
			<p>IF you Already Have an account</p>
			<p class="container-four-signin">Sign In</p>
		</div>

		<div>
			<p class="container-four-sell">Sell Your Products With Us</p>
		</div>

		<div>
			<p>For Better and customised experience</p>
			<p class="container-four-signup">Sign Up</p>
		</div>
	</div>

  <!-- ======================= -->
  <!-- *****arts and craft product-details layout start*****-->
  <div>
    <!-- row one start -->
    <div class="arts-p-details-row-one">
      <div class="arts-p-details-p-img">
        <img class="arts-p-details-img" src="images/phones/1.jpg">
        <p>View full pic size</p>
      </div>
      <div class="arts-p-details">
        <p>Sumsung s7</p>
        <p style="font-size: 20px; font-weight: bold;">
          Short Description:  Front Camera 8MP back camera 13MP
          Colors 13000 . Quard Core Processors
        </p>
        <p>Category&nbsp;:&nbsp;Computers</p>
        <p>Price&nbsp;:&nbsp;
          <span>$200</span>&nbsp;
          <span>$150</span>
        </p>
        <p>Rating: *****</p>
        <p>Instock: 300 Units</p>
        <p class="arts-p-details-add-to-cart">add to cut</p>
        <p class="arts-p-details-buy">buy</p>
        
      </div>
      <div class="arts-p-details-seller">
        <p>Seller&nbsp;:&nbsp; WQZ</p>
        <p>Phone calls&nbsp;:&nbsp;0777777</p>
        <p>Phone whatsapp&nbsp;:&nbsp; 0888888</p>
        <p>Email&nbsp;:&nbsp; wis@gmail.com</p>
        <p>Payment Methods accepted&nbsp;:&nbsp;
          <span>Ecocash</span>&nbsp;<span>RTGS</span>
          &nbsp;<span>VISA</span>
        </p>
        <p>Website&nbsp;:&nbsp; www.al.com</p>
        <p>Location&nbsp;:&nbsp;<span>1 chetepo harare</span></p>
        <p>Location Map</p>
        <p><img src="images/phones/2.jpg"></p>
      </div>
    </div>
    <!-- row one end -->
    <!-- row two start-->
    <div class="arts-p-details-row-two">
      <div class="arts-p-details-description">Detail Product Description and Specs</div>
      <div>2GiG onboard memory, support up to 64GIG SD card, usb port reader, adobe reader for pdfs, vbuilt in office for documents, android kit kat, 2.0 speaker volume, dolby volume controller, 7 inch screen, 3D graphics support, mic, wifi 3.00, GSM<, LTE, EVDO, WCDMA, front camera 8MP, back camera 13MP, 4.0 optical zoom, comes with smart charger, available coloprs blue, green, black, green, yellow </div>
    </div>
    <!-- row two end-->
    <!-- row three start -->
    <div>
      <p>Comments</p>
      
    </div>
    <!-- row three end -->
  </div>


<!-- *****arts and craft product-details layout end****-->
<!-- =================================== -->
<?php include 'incl/footer.php'; ?>
  <!-- ------------- -->
    <div id="w"></div>
  <div id="demo" style="color: rgb(0,0,0);"></div>
  <button onclick="myFunction()">try</button>
  <script type="text/javascript" src="index.js"></script>
</body>
</html>