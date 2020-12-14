<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_SESSION["fname"]?></title>
	<link rel="stylesheet" type="text/css" href="preview.css">
</head>
<body>
	<div class="login-page">
		<div class="form">
			<p class="con">Registration ID: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $_SESSION["id"]?></p><br>
			<p class="con">Name: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $_SESSION["fname"]?></p><br>
			<p class ="con">Phone Number: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $_SESSION["ph"]?></p><br>
			<p class="con">Email: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $_SESSION["email"]?></p><br>
			<p class="con">Registration Type: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $_SESSION["reg"]?></p><br>
			<p class="con">Number of Tickets: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $_SESSION["qty"]?></p><br>
		</div>
		</div>
		<div class="image">
			<img src="<?php echo $_SESSION['image'];?>" width=400px height=500px alt="picture"/>
		</div> 
<?php
session_destroy();
?>
</body>
</html>