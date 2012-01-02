<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SimpleAuction - Admin Panel</title>
    
    <!-- Include CSS -->
    <link href="../css/reset.css" rel="stylesheet" type="text/css" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../css/slimbox2.css" rel="stylesheet" type="text/css" />
    <link href="../css/start/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Oswald|Droid+Sans:400,700' rel='stylesheet' type='text/css' />

    <!-- Include Scripts -->	
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/jquery.cycle.lite.min.js"></script>
    <script type="text/javascript" src="../js/jquery.pngFix.pack.js"></script>
    <script type="text/javascript" src="../js/jquery.color.js"></script>
    <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="../js/hoverIntent.js"></script>
    <script type="text/javascript" src="../js/superfish.js"></script>
    <script type="text/javascript" src="../js/slimbox2.js"></script>
    <script type="text/javascript" src="../js/slides.min.js"></script>
    <script type="text/javascript" src="../js/custom.js"></script>	
    <script type="text/javascript" src="../js/jquery-ui-1.8.16.custom.min.js"></script>
    <script type="text/javascript" src="../js/jquery-ui-timepicker-addon.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){
			$("#tabs").tabs();
            $("#date").datetimepicker({
				showSecond: true,
				timeFormat: 'hh:mm:ss',
			});
        });
	</script>
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
                <li><a href="./register.php">Register</a></li>
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
    	<a href="#"><img src="../images/logo.png" border="0" alt="SimpleAuction" /></a>
        
        
        
    </div>
    
</div><!-- END HEADER -->


<!-- HEADER DIVIDER -->
<div id="head-break">
	<div class="headlineBox">
        	<h1>Admin Panel</h1>
    </div>
</div><!-- END HEADER -->


<div class="centerBox">
<!-- START MAIN CONTAINER --><br class="clear" />
<div class="container">
<div id="tabs">
<ul>
	<li><a href="#tabs-1">Items</a></li>
    <li><a href="./members.php">Members</a></li>
</ul>
<div id="tabs-1">
<input type="text" name="date" id="date" />
</div>


</div>

</div><!-- END MAIN CONTAINER --><br class="clear" />
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