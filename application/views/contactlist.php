<div class="container">

	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<h4 class="text-center"><?php echo $this->session->flashdata("msg"); ?></h4>
			<div>
				<input type="search" name="search" placeholder="Search"/>
			</div>
			<table class="table table-hover">
				<thead>
					<tr class="bg-success">
						<th>Contact Name</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>Message</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach($contact as $data)
						{
							echo "<tr>";
								echo "<td>$data->name</td>";
								echo "<td>$data->email</td>";
								echo "<td>$data->mobile</td>";
								echo "<td>$data->message</td>";
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			<div class="modal" role="dialog" id="mymodal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<div class="modal-title text-center">Update Your Details</div>
							<a href="#" class="close" data-dismiss="modal">&times;</a>
						</div>
						<div class="modal-body" id="editresult"></div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-3"></div>
	</div>
</div>