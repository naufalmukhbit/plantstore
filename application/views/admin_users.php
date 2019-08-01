<?php
$this->load->view('header');
?>

<body>
<h2>Users Data</h2>

<div class="container">
	<div class="col-md-12">
		<table id="users_table" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>User ID</th>
					<th>Username</th>
					<th>E-mail</th>
					<th>Password</th>
					<th><center>Action</center></th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				foreach ($users as $user) {
					if($user->userid != 1) {
				?>
				<tr>
					<td><?php echo $no++;?></td>
					<td><?php echo $user->userid;?></td>
					<td><?php echo $user->username; ?></td>
					<td><?php echo $user->email; ?></td>
					<td><?php echo $user->password; ?></td>	
					<td style="text-align: center;">
						<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete<?php echo $user->userid; ?>"><i class="fa fa-trash"></i></button>
					</td>
				</tr>
                    <div id="delete<?php echo $user->userid; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete this user?</h4>
                                    <?php echo form_open("Admin_users/delete_user"); ?>
                                    <input type="hidden" name="userid" class="form-control" value="<?php echo $user->userid;?>" id="userid" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-primary">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
				<?php 
					}
				} 
				?>
			</tbody>
		</table>
	</div>
</div>

<?php
$this->load->view('footer');
echo '
<script type="text/javascript">
  $(document).ready(function () {
      $("#users_table").DataTable();
  });
</script>
';
?>