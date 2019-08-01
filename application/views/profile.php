<?php 
$this->load->view('header'); 
?>

<body>
	<?php 
	$this->load->view('navbar'); 
	?>
	<div class="container mt-3 justify-content-center profile-box">
		<div class="row">
			<div class="col-3 sidebar">
				<?php
				foreach ($profile as $data) {
					if($data->disp_pic == "") {
						?>
						<img src="<?php echo base_url(); ?>docs/display-pictures/default.png" class="rounded-circle mx-auto d-block">
						<?php
					} else {
						?>
						<img src="<?php echo base_url(); ?>docs/display-pictures/<?php echo $data->disp_pic; ?>" class="rounded-circle mx-auto d-block">
						<?php
					}
				}
				?>
			</div>
			<div class="col-9 data">
				<h2>Your Profile</h2>
				<?php
				foreach ($profile as $data) {
				?>
				<label>Name</label><br>
				<input type="text" name="name" value="<?php echo $data->name; ?>" disabled><br><br>
				<label>Birth Date</label><br>
				<input type="date" name="bdate" value="<?php echo $data->bdate; ?>" disabled><br><br>
				<label>Gender</label><br>
				<input type="text" name="gender" value="<?php echo $data->gender; ?>" disabled><br><br>
				<label>Phone Number</label><br>
				<input type="text" name="phone" value="<?php echo $data->phone; ?>" disabled><br>
				<?php
				}
				?>
				<br><br><p>Go to Settings to change profile!</p>
			</div>
		</div>
	</div>

<?php 
$this->load->view('footer'); 
?>