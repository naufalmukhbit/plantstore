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
				<a href="<?php echo site_url('Edit_profile/index'); ?>">
					<div class="sidebar-option">
						Edit Profile
					</div>
				</a>
				<div class="sidebar-option selected">
					Change Password
				</div>
			</div>
			<div class="col-9 data">
				<h2>Change Your Password</h2><br>
				<?php echo form_open('Change_password/edit');?>
				<br><br><label>Current Password</label><br>
				<input type="text" name="old-pass"><br><br>
				<label>New Password</label><br>
				<input type="text" name="new-pass"><br><br>
				<label>Confirm New Password</label><br>
				<input type="text" name="confirm"><br><br>
				<br><button type="submit" name="editChanges" class="btn btn-primary">Submit Changes</button>
				</form>
			</div>
		</div>
	</div>

<?php 
$this->load->view('footer'); 
if($this->session->flashdata('message') == 'edit_success') {
	echo "<script>alert('Successfully changed password.');</script>";
} else if($this->session->flashdata('message') == 'edit_failed') {
	echo "<script>alert('Failed to change password.');</script>";
}
?>