<html>
	<head>
		<title>Home Page</title>
		<link href="<?php echo BASEURL;?>assets/css/bootstrap.css" rel="stylesheet">
		<script src='<?php echo BASEURL;?>assets/js/jquery.min.js'></script>
		<script src='<?php echo BASEURL;?>assets/js/bootstrap.js'></script>	
	</head>
	
	<body>

<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4 well">
			<h4 class="text-center"><?php echo $this->session->flashdata("msg");?></h4>
			<form action="logincheck.php" method="POST">
				<div class="panel panel-primary">
					<div class="panel-heading text-center"><h3>Login Here</h3></div>
					<div class="panel-body">
						<div class="row form-group">
							<label>Email</label>
							<input type="text" class="form-control" placeholder="Enter Email" name="email">
						</div>
						<div class="row form-group">
							<label>Password</label>
							<input type="password" class="form-control" placeholder="Enter Password" name="pass">
						</div>
						
					</div>
					<div class="panel-footer text-center">
						<button type="submit" class="btn btn-primary">Login</button>
						<button type="reset" class="btn btn-danger">Reset</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
</body>
</html>