<?php
session_start();
require("conf.php");
$username = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE user_Name = '$username'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);
mysqli_close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8" />
    <title>SimpleAuction - Member -> Change Password</title>
    <!-- Include CSS -->
    <link href="./css/ajax.css" rel="stylesheet" type="text/css" />
    
    <!-- Include Scripts -->	
    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="./js/jquery-ui-1.8.16.custom.min.js"></script>
    <script type="text/javascript" src="./js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="./js/jquery-ui-timepicker-addon.js"></script>
    <script type="text/javascript">
		$(document).ready(function(e) {
			$("#user-password-form").validate({
				rules: {
					password: {
						minlength: 5
					},
					newpass: {
						minlength: 5
					},
					newpass_confirm {
						minlength: 5,
						equalTo: '#newpass'
					}
				},
				messages: {
					password: { 
                		minlength: jQuery.format("Enter at least {0} characters")
            		},
					newpass: {
						minlength: jQuery.format("Enter at least {0} characters")
					},
					newpass_confirm {
						minlength: jQuery.format("Enter at least {0} characters"),
						equalTo: "Enter the same password as above"
					}
				},
				errorPlacement: function(error, element) {
					if (element.is(":checkbox")) {
						error.appendTo(element.next().next());
					}
					else {
						error.appendTo(element.parent().next());
							}
					},
				success: function(label) {
					label.addClass("valid");
				} 
			});
			$("#submit_password").click(function() {
				if ($("#user-password-form").valid() == true) {
					$(".loading").show(500);
					$("#user-password-form").hide(0);
					$("#message_password").hide(0);
					
					
					$.ajax({
						type: 'POST',
						url: 'ajax_member_password.php',
						dataType: 'json',
						data: {
							user: '<? echo $row['user_Name']; ?>',
							password: $("#password").val()
							newpass: $("#newpass").val(),
						},
						success: function(data) {
							$(".loading").hide(500);
							$("#message_password").removeClass();
							if (data.error === true) {
								$("#message_password").addClass("message-error");
							}
							else $("#message_password").addClass("message-success");
							$("#message_password").text(data.msg).show(500);
							$("#user-password-form").show(500);
						},
						error: function(XMLHttpRequest, textStatus, errorThrown) {
							$(".loading").hide(500);
							$("#message_password").removeClass().addClass("message-error").text("There was an AJAX error").show(500);
							$("#user-password-form").show(500);
						}
					});
				}
				return false;
			});
		});
 
	</script>
</head>
<body>
<!-- START MAIN CONTAINER -->
<div class="centerBox">
<div class="container">
<h1>User Information</h1>
	<div id="message_password" style="display:none">
    </div>
	<div class="form-container">
      		<form id="user-password-form" class="common-form">
    <table>
    	<tr>
    		<td class="label"><h4>Current Password</h4></td>
    		<td class="field"><input class="input" value="<? echo $row['user_Name']; ?>" id="password" name="password" type="password" /></td>
        	<td class="status"></td>
    	</tr>
        
    	<tr>
        	<td class="label"><h4>New Password</h4></td>
    		<td class="field"><input class="input" value="" id="newpass" name="newpass" type="password" /></td>
            <td class="status"></td>
        </tr>
        <tr>
        	<td class="label"><h4>Retype New Password</h4></td>
            <td class="field"><input class="input" value="" id="newpass_confirm" name="newpass_confirm" type="password" /></td>
            <td class="status"></td>
        </tr>
 
	</table>
    <p align="left">
    <input type="image" src="./images/submit.png" value="Submit" name="submit_password" id="submit_password" />
    </p>
    </form>
	</div>
    <div class="loading" style="display:none">
    Please wait<br />
    <img src="images/ajax-loader.gif" title="Loader" atl="Loader" />
    </div>
  </div>
       <br class="clear" />
       <br class="clear" />
    </div>
    
</div><!-- END MAIN CONTAINER -->


</body>
</html>