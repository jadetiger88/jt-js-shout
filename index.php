<?php include 'database.php';?>
<?php
	$query = "SELECT * FROM shout ORDER by id DESC";
	$shouts = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>JS Shout</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
    </head>
    <body>
    	<div id="container">
    		<header>
    			<h1>JS Shout</h1>
    		</header>
    		<div id="shouts">
    			<ul>
    				<?php while($rows = mysqli_fetch_assoc($shouts)) : ?>
    				<li>
    					[<?php echo $rows["date"]; ?>]:
    					<?php echo $rows["name"]; ?>:
    					<?php echo $rows["shout"]; ?>
    				</li>
    			<?php endwhile; ?>
    			</ul>
    		</div>
    		<footer>
    			<form>
	                <label>Name</label>
	                <input type="text" id="name">
	                <label>Shout</label>
	                <input type="text" id="shout">
	                <input type="submit" id="submit" value="SHOUT!">
    			</form>
    		</footer>
    	</div>
    </body>
</html>