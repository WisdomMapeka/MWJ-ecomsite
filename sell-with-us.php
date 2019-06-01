<?php include 'incl/header.php'; ?>
<link rel="stylesheet" type="text/css" href="sell-with-us.css">

  <!-- ======================= -->

  <!-- *****sell with us start*****-->
  <div class="sell-become-seller">Become A seller</div>
    <!-- Message after becoming a seller -->
  <?php
   if(isset($_SESSION["company_name"])){
   ?>
  <div class="message-after-becoming-seller">
    <div class="message-seller">
      Well Done. You are now a seller for  <?php echo $_SESSION["company_name"]; ?>
      . Click post to post a product or not now to do it later
    </div>
    <div class="post"><a href="post-a-product.php">Post</a></div>
    <div class="not-now"><a href="index.html">Not Now</a></div>
  </div>
  <?php  session_destroy(); } ?> 
  <!-- ---------- -->
  <div class="sell-with-us-container">
    <form action="sell-with-us-handle.php" method="POST">
      <div>
        <span class="sell-with-us-payments-span">Company Name</span>
        <input type="text" name="company-name">
      </div>

      <div>
        <span class="sell-with-us-payments-span">Address</span>
        <input type="text" name="address">
      </div>

      <div>
        <span class="sell-with-us-payments-span">City</span>
        <input type="text" name="city">
      </div>

      <div>
        <span class="sell-with-us-payments-span">State</span>
        <input type="text" name="state">
      </div>

      <div>
        <span class="sell-with-us-payments-span">Phone Calls</span>
        <input type="text" name="phone-calls">
      </div>

      <div>
        <span class="sell-with-us-payments-span">Phone Whatsapp</span>
        <input type="text" name="phone-whatsapp">
      </div>

      <div>
        <span class="sell-with-us-payments-span">Email</span>
        <input type="text" name="email">
      </div>

      <div>
        <span class="sell-with-us-payments-span">Website</span>
        <input type="text" name="website">
      </div>

      <div>
        <span class="sell-with-us-payments-span">Payment Methods Acepted</span>
        <span>RTGS</span>
        <input type="checkbox" name="RTGS">
        <span>USD</span>
        <input type="checkbox" name="USD">
        <span>VISA</span>
        <input type="checkbox" name="VISA">
      </div>

      <div>
        <span class="sell-with-us-payments-span">Notes</span>
        <input type="text" name="notes">
        <input type="submit" name="submit">
      </div>
    </form>
  </div>


<!-- *****sell with us end****-->
<!-- =================================== -->
<?php include 'incl/footer.php'; ?>
  <!-- ------------- -->
    <div id="w"></div>
  <div id="demo" style="color: rgb(0,0,0);"></div>
  <button onclick="myFunction()">try</button>
  <script type="text/javascript" src="index.js"></script>
</body>
</html>