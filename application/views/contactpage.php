
<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<div class="panel panel-success">
		<form action="savecontact.php" method="POST">
		<h4 class="text-center"><?php echo $this->session->flashdata("msg"); ?></h4>
			<div class="panel-heading text-center"><h2><b> Contact Page</b></h2></div>
			<div class="panel-body">
							<div class="row">
								<div class="col-sm-2"></div>
								<div class="col-sm-8">
									<div class="row form-group">
										<div class="col-sm-4"><label>Name</label></div>
										<div class="col-sm-8"><input type="text" name="fname" id="name" class="form-control" placeholder="Enter Name"/></div>
									</div><br>
									<div class="row form-group">
										<div class="col-sm-4"><label>Email</label></div>
										<div class="col-sm-8"><input type="email" name="email" id="email" class="form-control" placeholder="Enter Email"/></div>
									</div><br>
									<div class="row form-group">
										<div class="col-sm-4"><label>Mobile</label></div>
										<div class="col-sm-8"><input type="tel" name="mobile" id="mobile" class="form-control" placeholder="Enter Number"/></div>
									</div><br>
									<div class="row form-group">
										<div class="col-sm-4"><label>Message</label></div>
										<div class="col-sm-8"><textarea name="msg" id="msg" class="form-control" placeholder="Write Message"></textarea></div>
									</div>
								</div>
								<div class="col-sm-2"></div>	
							</div>
			</div>
			<div class="panel-footer text-center"> 
				<button class="btn btn-primary" type="save">Send</button> 
				<button class="btn btn-danger" type="reset">Clear</button> 	
			</div>
		</form>
		</div>
	</div>
	<div class="col-sm-3"></div>

</div>
 