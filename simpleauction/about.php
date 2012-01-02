<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SimpleAuction - About Us</title>
    
    <!-- Include CSS -->
    <link href="./css/reset.css" rel="stylesheet" type="text/css" />
    <link href="./css/style.css" rel="stylesheet" type="text/css" />
    <link href="./css/slimbox2.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Oswald|Droid+Sans:400,700' rel='stylesheet' type='text/css' />

    <!-- Include Scripts -->	
    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.lite.min.js"></script>
    <script type="text/javascript" src="js/jquery.pngFix.pack.js"></script>
    <script type="text/javascript" src="js/jquery.color.js"></script>
    <script type="text/javascript" src="js/hoverIntent.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/slimbox2.js"></script>
    <script type="text/javascript" src="js/slides.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>	

    <meta charset="UTF-8"></meta>
</head>

<body>

<!-- START HEADER -->
<div id="header">

	<div class="container">
    
    	<div id="primary-nav" class="header-right">
        
            <ul class="sf-menu">
                <li class="current"><a href="./index.php">Home</a></li>
                <li><a href="./item.php">Item List</a></li>
                <li><a href="./ended.php">Ended Items</a></li>
                <?php if($_SESSION['username'] == "") 
                    echo '<li><a href="./register.php">Register</a></li>'?>
                <li><a href="./about.php">About Us</a></li>	
                <li><a href="./contact.php">Contact</a></li>
                <li>
                	<a href="#">Category</a>
                    <ul>
                      <li><a href="#">Home Furniture</a></li>
                        <li><a href="#">Electronics</a></li>
                        <li><a href="#">Entertainment</a></li>
                        <li><a href="#">Vouchers</a></li>
                        <li><a href="#">Token</a></li>
                        <li><a href="#">Other</a></li>
                  </ul>  
              </li>
             </ul>
        </div>
        
        <!-- LOGO -->        
    	<a href="#"><img src="./images/logo.png" border="0" alt="MacLander App Site Template" /></a>
        
        
        
    </div>
    
</div><!-- END HEADER -->


<!-- HEADER DIVIDER -->
<div id="head-break">
	<div class="headlineBox">
   	  <div class="tokenBox">
        	<h1>Token Packages</h1>
          
              <ul>
                  <li><a href="#"><p>20 Tokens : $15</p></a></li>
                  <li><a href="#"><p>40 Tokens : $30</p></a></li>
                  <li><a href="#"><p>60 Tokens : $45</p></a></li>
                  <li><a href="#"><p>80 Tokens : $60</p></a></li>
                  <li><a href="#"><p>100 Tokens : $75</p></a></li>
              </ul>
      </div>
   	  <div class="loginBox">
      	<? if ($_SESSION['username']=="") {
				?>
           
            <form id="login-form" action="index.php" method="POST">
             	 <h5>Login</h5>
        	    <label><p>Username</p></label>
        		<input class="input" name="username" id="username" type="text"/>
        		<label><p>Password</p></label>
        		<input class="input" name="password" id="password" type="password" />
        		<p class="button">
                <input type="submit"  value="Login" name="submit" id="submit" />
            	</p>
    	    </form>
            <div id="successMsg"></div>
            <div id="errorMsg"></div>
            <?
			}
			else {
				echo "<span style='color:white'>Welcome back, <b>".$_SESSION['username']."</b> | </span> <a href='logout.php'>Log Out</a>";
			}
			?>
   	  </div>
    </div>
</div><!-- END HEADER DIVIDER -->


<!-- START MAIN CONTAINER -->
<div class="centerBox">
<br class="clear" />
<div class="container">

	<h1 class="page-header">About Us</h1>
    
    <div class="grid onehalf">
    	<p>The MacLander HTML Template comes with a built in grid system that quickly and easily allows you layout the content in your pages. Forms, images, text, audio, video etc. can all be placed into the grid system with easy to use CSS classes.</p>
    	<p class="grid onefourth">The MacLander HTML Template comes with a built in grid system that quickly and easily allows you layout the content in your pages. Forms, images, text, audio, video etc. can all be placed into the grid system with easy to use CSS classes.</p>
    	<p class="grid onefourth last">The MacLander HTML Template comes with a built in grid system that quickly and easily allows you layout the content in your pages. Forms, images, text, audio, video etc. can all be placed into the grid system with easy to use CSS classes.</p>
    </div>
    <div class="grid onehalf last"><img src="images/zebra.png" alt="zebra" /></div>
    
    <br class="clear" /><h1 class="page-header">Meet The Team</h1>
    
    <div class="grid onethird about-us">
    	<div class="wrapper">
        	<p><span>Name</span>John Smith</p>
            <p><span>Position</span>Lead Designer</p>
            <p><span>More</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
    <div class="grid onethird about-us">
    	<div class="wrapper">
        	<p><span>Name</span>John Smith</p>
            <p><span>Position</span>Lead Designer</p>
            <p><span>More</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
    <div class="grid onethird last about-us">
    	<div class="wrapper">
        	<p><span>Name</span>John Smith</p>
            <p><span>Position</span>Lead Designer</p>
            <p><span>More</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
    
    <br class="clear" />
    
</div><!-- END MAIN CONTAINER -->
</div>

<!-- START FOOTER -->
<div id="footer">

	<div class="container">
    
    	<div id="footer-right">
        
        	Created by <a href="http://tyler.tc/" target="_blank">Tyler Colwell</a> © 2011<br />
            <a href="#_" class="social facebook">Fan Us</a> <a href="#_" class="social twitter">Follow Us</a> <a href="#_" class="social googleplus">Plus Us</a>
            
        </div>
    
		<a id="top" href="#">Top</a> | <a href="#">Andriod Version</a> | <a href="#">Company Blog</a> | <a href="#">About Us</a> | <a href="#">Contact</a><br />
        Download MacLander on ThemeForest.<br />
        
        <br class="clear" />
    
  </div>
    
</div><!-- END FOOTER -->

</body>
</html>