<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SimpleAuction - Registration</title>
    
    <!-- Include CSS -->
    <link href="./css/reset.css" rel="stylesheet" type="text/css" />
    <link href="./css/style.css" rel="stylesheet" type="text/css" />
    <link href="./css/slimbox2.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Oswald|Droid+Sans:400,700' rel='stylesheet' type='text/css' />

    <!-- Include Scripts -->	
    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="./js/jquery.cycle.lite.min.js"></script>
    <script type="text/javascript" src="./js/jquery.pngFix.pack.js"></script>
    <script type="text/javascript" src="./js/jquery.color.js"></script>
    <script type="text/javascript" src="./js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="./js/hoverIntent.js"></script>
    <script type="text/javascript" src="./js/superfish.js"></script>
    <script type="text/javascript" src="./js/slimbox2.js"></script>
    <script type="text/javascript" src="./js/slides.min.js"></script>
    <script type="text/javascript" src="./js/custom.js"></script>	
    <script type="text/javascript">
        $(document).ready(function() {
			$('#register-form').validate({
				rules: {
					username: {
						required: true,
						minlength: 3,
						remote: "check_username.php"
					},
					password: {
						required:true,
						minlength: 5
					},
					password_confirm: {
						required: true,
						minlength: 5,
						equalTo: "#password"
					},
					email: {
						required: true,
						email: true,
						remote: "check_email.php"
					},
					email_confirm: {
						required: true,
						email: true,
						equalto: "#email"
					},
					telephone: {
						required: true,
						digits: true
					}
				},
				messages: {
					username: {
						required: "Enter an username",
						minlength: jQuery.format("Enter at least {0} characters"),
						remote: jQuery.format("{0} is already in use")
					},
					password: {
						required: "Provide a password",
						minlength: jQuery.format("Enter at least {0} characters")
					},
					password_confirm: { 
                		required: "Repeat your password", 
                		minlength: jQuery.format("Enter at least {0} characters"), 
                		equalTo: "Enter the same password as above" 
            		},
					email: { 
                		required: "Please enter a valid email address", 
                		email: "Please enter a valid email address", 
                		remote: jQuery.format("{0} is already in use") 
            		},
					email_confirm: { 
                		required: "Repeat your email", 
                		email: "Please enter a valid email address", 
                		equalTo: "Enter the same email as above"
            		}
				},
				
				errorPlacement: function(error, element) {
					error.appendTo(element.parent().next());
				},
						
				success: function(label) {
					label.addClass("checked");
				} 					
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
      
        
   	  </div>
    </div>
</div><!-- END HEADER -->


<div class="centerBox">
<!-- START MAIN CONTAINER --><br class="clear" />
<div class="container">

<h1>Fill in the registration form</h1>
<hr />	
	<form id="register-form" action="register.php" method="post">
    <table>
    	<tr>
    		<td class="label"><h4>Username</h4></td>
    		<td class="field"><input class="input" id="username" name="username" type="text" /></td>
        	<td class="status"></td>
    	</tr>
        
    	<tr>
        	<td class="label"><h4>Password</h4></td>
    		<td class="field"><input class="input" id="password" name="password" type="password" /></td>
            <td class="status"></td>
        </tr>
        <tr>
        	<td class="label"><h4>Confirm Password</h4></td>
            <td class="field"><input class="input" id="password_confirm" name="password_confirm" type="password" /></td>
            <td class="status"></td>
        </tr>
    	<tr>
        	<td class="label"><h4>E-mail address</h4></td>
    		<td class="field"><input class="input" id="email" name="email" type="email" /></td>
            <td class="status"></td>
        </tr>
    	<tr>
        	<td class="label"><h4>Confirm E-mail</h4></td>
        	<td class="label"><input class="input" id="email_confirm" name="email_confirm" type="email" /></td>
            <td class="status"></td>
        </tr>
    	<tr>
        	<td class="label"><h4>Telephone</h4></td>
    		<td class="field"><input class="input" id="telephone" name="telephone" type="tel" /></td>
            <td class="status"></td>
        </tr>
        </table>
    <p class="button">
    <input type="image" src="./images/submit.png" value="Submit" name="submit" id="submit" />
    </p>
    </form>
<br class="clear" />  
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