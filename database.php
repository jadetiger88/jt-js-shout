<?php
$con = mysqli_connect("localhost", "root" , "", "jsshout"); 

if (mysqli_connect_errno()) {
	echo 'failed to connect: '.mysqli_connect_error();
}
?>