<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>



  <!-- .................menu -->




<div class="topnav" id="myTopnav">
   
  <a href="index.html">Home</a>
 <a href="Services.html">Services</a>
  <a href="products.html">products</a>
<a href="login.php">Sing in</a>
 <a href="about.html">About</a>
   <a href="cart.html"><img src="img1/cart.png" width="50px" height="50px" style="margin-left:  -10px; "></a>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


  <!-- end menu------------------- -->


  <br><br><br><br><br><br>

  <!-- logout -->

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <br>
    	<p> <a href="index.php?logout='1'" style="color: red;">Switch account</a> </p>
      <br>

      <a href="display.php" style="color: green; margin-left:280px; ">see information</a>
    <?php endif ?>
</div>

<br><br><br><br><br><br>



<!-- footer....................... -->


  
  <div class="footer">
        <div class="container">
            <div class="row">
                <div class=" footer-col-1">
                    <h3>Download Our App</h3>
                    <p> Download Our App For Android And ios Mobiel phone</p>
                    <div class="app-logo">
                        <img src="img1/play2.png">
                        <img src="img1/app2.png">
                    </div>

                </div>
                <div class=" footer-col-2">
                    <img src="img1/bh.png" alt="">
                    <p> our pourpose id subtion of no but we cabn fue dfw ok damm so many items</p>

                </div>
                <div class=" footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li > <a href="Services.html" style="text-decoration: none; color:gray">Deleviry</a></li>
                      <li> <a href="Services.html" style="text-decoration: none; color:gray">Pay method</a></li>
                       <li> <a href="Services.html" style="text-decoration: none; color:gray">Report</a></li>
                        <li> <a href="Services.html" style="text-decoration: none; color:gray">Return policy</a></li>
                    </ul>

                </div>
                <div class=" footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                      
                       
                        <li><a href="https://www.facebook.com/profile.php?id=100015827795246">
                            <i class="fa fa-facebook"></i></a> </li>
                        <li><a href="https://www.linkedin.com/in/sm-noyan-8475211b9/">
                            <i class="fa fa-linkedin"></i></a> </li>
                        
                        <li><a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
                        <li><a href=https://www.instagram.com/sm_noyan/><i class="fa fa-instagram"></i></a></li>
                    </ul>

                </div>
            </div>
            <hr>
            <p class="copyright"> Copyright 2020 - Noyan</p>
        </div>
    </div>




<!-- end footer................. -->
		
</body>
</html>