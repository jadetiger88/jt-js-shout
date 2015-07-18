<?php include "database.php"; ?>

<?php
if(isset($_POST['name']) && isset($_POST['shout'])) {

	$name = mysqli_real_escape_string($con, $_POST['name']); 
	$shout = mysqli_real_escape_string($con, $_POST['shout']); 
	$date = mysqli_real_escape_string($con, $_POST['date']); 

	date_default_timezone_get('America/New_York');
	$date = date('h:i:s a', time());

	$query = "INSERT INTO shout (name, shout, date) 
		VALUES ('$name', '$shout', '$date')"; 

	if (!mysqli_query($con, $query)) {
		echo("Error".mysqli_error($con));
	} else {
		echo "<li>[".$date."]:".$name.": ".$shout."</li>";
	}
}
?>

