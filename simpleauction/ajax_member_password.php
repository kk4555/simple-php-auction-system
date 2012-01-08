<?php

/* CP2013 - Software Engineering
 * SimpleAuction Project
 * Written PHP & MySQL
 */

sleep(1);

require('conf.php');

$user = $_POST['user'];
$password_new = $_POST['password_new'];

$update_query = "UPDATE users SET user_Password = '$password_new' WHERE user_Name = '$user'";

$return['msg'] = "Submit Succeeded";
$return['error'] = false;	

mysqli_query($connect, $update_query);

echo json_encode($return);

mysqli_close();
?>
