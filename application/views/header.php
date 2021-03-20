<html>
	<head>
		<title>Home Page</title>
		<link href="<?php echo BASEURL;?>assets/css/bootstrap.css" rel="stylesheet">
		<script src='<?php echo BASEURL;?>assets/js/jquery.min.js'></script>
		<script src='<?php echo BASEURL;?>assets/js/bootstrap.js'></script>	
		<script src='<?php echo BASEURL;?>assets/js/myvalidateajax.js'></script>	
	</head>
	
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<div class="navbar-brand">
						<a href="#">Logo</a> 
					</div>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="home.php">Home</a></li>	
					<li><a href="about.php">About</a></li>	
					<li><a href="contact.php">Contact</a></li>	
					<li><a href="contactlist.php">Contact List</a></li>	
				</ul>
				<ul class="nav navbar-nav navbar-right">
					
					<li><a href="logout.php"><button type="button" class="btn btn-warning">Logout</button></a></li>
				</ul>
			</div>
		</nav>
		<div class="container-fluid"