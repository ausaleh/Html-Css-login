<?php session_start(); ?>
<html>
<head>
	<title>Homepage</title>
	<link href="style1.css" rel="stylesheet" type="text/css">
	</head>

<body background="img/g5.jpg">
	<div class="topnav">
  <a class="active" href="index.php">Home</a>
 
  <a href="about.html">About</a>
</div>

<center><br><br><br><br><br>
	<div id="header">
		Welcome to the world of voice recognition!
	</div>

	<?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
		$result = mysqli_query($mysqli, "SELECT * FROM login");
	?>
				
		Welcome <?php echo $_SESSION['name'] ?> ! <a href='logout.php'>Logout</a><br/>
		<a href = "https://www.amazon.com/ap/signin?showRmrMe=1&openid.return_to=https%3A%2F%2Falexa.amazon.com%2F&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.assoc_handle=amzn_dp_project_dee&openid.mode=checkid_setup&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&">Alexa Login<a/>
		<br/>
	<?php	
	} else {
		echo "<h2>You must be logged in to view this page.<br/><br/></h2>";
		echo "<a href='login.php'>Login</a> | <a href='register.php'>Register</a>";
	}
	?></center>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>

</body>
</html>
