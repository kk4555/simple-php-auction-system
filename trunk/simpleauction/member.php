<?php
session_start();
if ($_SESSION['username'] == "")
	header("Location: index.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8" />
    <title>SimpleAuction - Member Panel</title>

    <!-- Include CSS -->
    <link href="./css/reset.css" rel="stylesheet" type="text/css" />
    <link href="./css/style.css" rel="stylesheet" type="text/css" />
    <link href="./css/slimbox2.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Oswald|Droid+Sans:400,700' rel='stylesheet' type='text/css' />
    <link href="./css/start/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />

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
 	<script type="text/javascript" src="./js/jquery-ui-1.8.16.custom.min.js"></script>
    <script type="text/javascript" src="./js/jquery-ui-timepicker-addon.js"></script>	    
    <script type="text/javascript">
		$(document).ready(function(e) {
            $("#member-tabs").tabs();
        });
    </script>
</head>
<body>

<!-- START HEADER -->
<div id="header">

	<div class="container">
    
    	<div id="primary-nav" class="header-right">
        
            <ul class="sf-menu">
                <li class="current"><a href="./index.php">Home</a></li>                <li><a href="./ended.php">Ended Items</a></li>
                <li><a href="./about.php">About Us</a></li>	
                <li><a href="./contact.php">Contact</a></li>
                <?php
				if($_SESSION['username'] != "")
					echo '<li id="member"><a href="./member.php">Member</a></li>';
				
				?>
                
             </ul>
        </div>
        
        <!-- LOGO -->        
    	<a href="./index.php"><img src="./images/logo.png" border="0" alt="Simple Auction" /></a>
        
        <br class="clear" />
 
    </div>
    
</div><!-- END HEADER -->


<!-- HEADER DIVIDER -->
<div id="head-break">
<div class="outer">
<div id="member-announce">
<h1>This is the section for member</h1>
<h1>You are allowed to edit or change your own profile here</h1>
</div>
</div>
</div><!-- END HEADER DIVIDER -->


<!-- START MAIN CONTAINER -->
<div class="centerBox">
<div class="container" align="">
	<div id="dialog-login" style="display:none" title="Login Box">
    	<form id="login-form" action="login.php" method="POST">
        <fieldset>
        	<label for="username">Username</label><br />
            <input type="text" name="username" id="username" class="text ui-widget-content ui-corner-all" /><br />
            <label for="password">Password</label><br />
            <input type="password" name="password" id="password" class="text ui-widget-content ui-corner-all" />
        </fieldset>
        </form>
    </div>
      
    <h1>Welcome back, <? echo $_SESSION['username']; ?> </h1>
    	<div id="member-tabs">
        	<ul>
            <li><a href="./member_password.php">Change Password</a></li>
            	<li><a href="./member_user.php">User Information</a></li>
            	<li><a href="./member_address.php">Change Address</a></li>
          		
            </ul>
        </div>
       <br class="clear" />
       <br class="clear" />
   
</div><!-- END MAIN CONTAINER -->

<!-- START LIGHTBOX TILES -->
<div id="image-tiles">

	<div class="container">
    <h3>Ended Auctions</h3>
        <a href="images/screens/full_one.jpg" title="App Screen Shot One" rel="lightbox-shots"><img src="images/screens/full_one.png" alt="screenshot one" /></a>
        <a href="images/screens/full_two.jpg" title="App Screen Shot Two" rel="lightbox-shots"><img src="images/screens/full_two.png" alt="screenshot two" /></a>
        <a href="images/screens/full_three.jpg" title="Screen Shot Three" rel="lightbox-shots"><img src="images/screens/full_three.png" alt="screenshot three" /></a>
        <a href="images/screens/full_four.jpg" title="Screen Shot Four" rel="lightbox-shots"><img class="last" src="images/screens/full_four.png" alt="screenshot four" /></a>
    </div>
    
</div><!-- END LIGHTBOX TILES -->
</div>

<!-- START FOOTER -->
<div id="footer">

	<div class="container">
    
    	<div id="footer-right">
        
        	Created for CP2013 - Software Engineering Project<br />
            <strong>Team Members</strong><br />
            <a href="http://www.facebook.com/phong.thien" class="social facebook">Nguyen Dang Quang</a> <a href="http://www.facebook.com/profile.php?id=1012557458" class="social facebook">Aldo Gushary</a> <a href="http://www.facebook.com/sarathboss" class="social facebook">Sarath Amirtha</a> <a href="http://www.facebook.com/dill.m" class="social facebook">Dillan Martin</a> <a href="http://www.facebook.com/profile.php?id=685749024" class="social facebook">Hansel Gunarto</a> 
            
        </div>
        
        <br class="clear" />
    
  </div>
    
</div><!-- END FOOTER -->
</body>
</html>