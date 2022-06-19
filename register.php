<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system </title>
  <link rel="stylesheet" type="text/css" href="style.css">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>

<!-- .....................header -->
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

<!-- .................. end header......... -->










<h5 style="text-align: center; color:#555; "> Join Closed</h5>
    

  <div class="header">

  	<h2>Creat your account</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
    <h6>Make sure it's at least 6 characters OR number .</h6>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Creat account</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>


<br><br><br><br>


<!-- footer -->
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




<!-- end footer -->



</body>
</html>