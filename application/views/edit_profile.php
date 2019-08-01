<?php 
$this->load->view('header'); 
?>

<body>
	<?php 
	$this->load->view('navbar'); 
	?>
	<div class="container mt-3 profile-box">
		<div class="row">
			<div class="col-3 sidebar">
				<div class="sidebar-option selected">
					<span class="text">Edit Profile</span>
				</div>
				<a href="<?php echo site_url('Change_password/index'); ?>">
					<div class="sidebar-option">
						Change Password
					</div>
				</a>
			</div>
			<div class="col-9 data">
				<h2>Your Profile</h2><br>
				<?php
				echo form_open_multipart("Edit_profile/edit_profile",array('class'=>'mx-auto'));
				foreach ($profile as $data) {
					if($data->disp_pic == "") {
						?>
						<img src="<?php echo base_url(); ?>docs/display-pictures/default.png" class="rounded-circle" id="pic-preview">
						<?php
					} else {
						?>
						<img src="<?php echo base_url(); ?>docs/display-pictures/<?php echo $data->disp_pic; ?>" class="rounded-circle" id="pic-preview">
						<?php
					}
				?>
				<br><br><input type="file" id="photo" name="display-picture" size="10" onchange="previewImage()">
				<br><br><label>Name</label><br>
				<input type="text" name="name" value="<?php echo $data->name; ?>"><br><br>
				<label>Birth Date</label><br>
				<input type="date" name="bdate" value="<?php echo $data->bdate; ?>"><br><br>
				<label>Gender</label><br>
				<input type="text" name="gender" value="<?php echo $data->gender; ?>"><br><br>
				<label>Phone Number</label><br>
				<input type="text" name="phone" class="bfh-phone" value="<?php echo $data->phone; ?>" data-format="dddd-dddd-dddd"><br>
				<?php
				}
				?>
				<br><button type="submit" name="editChanges" class="btn btn-primary">Submit Changes</button>
				</form><br>
				<button class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $data->userid; ?>">Delete My Account</button>

				<div id="delete<?php echo $data->userid; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete your account?</h4>
                                    <?php echo form_open("Edit_profile/delete_user"); ?>
                                    <input type="hidden" name="userid" value="<?php echo $data->userid; ?>">
                                </div>
                                <div class="modal-body">
                                	<p>
                                		This action cannot be undone.
                                	</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-primary">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
			</div>
		</div>
	</div> 	

<?php 
$this->load->view('footer'); 
if($this->session->flashdata('message') == 'update_error') {
	echo "<script>alert('Something's wrong. Please try again.');</script>";
} else if($this->session->flashdata('message') == 'update_succes') {
	echo "<script>alert('Profile updated!');</script>";
} else if($this->session->userdata('userid') == NULL) {
	echo "<script>alert('userid not found');</script>";
}
?>