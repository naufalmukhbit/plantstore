<?php
$this->load->view('header');
?>

<body>
<div class="container mt-5 text-center">
	<h3>Welcome, Admin!</h3><br>
	<a href="<?php echo site_url('Admin_users/index'); ?>">
		<button class="btn btn-primary option">
			<img class="option-img" src="<?php echo base_url(); ?>assets/images/admin-users.png"><br>
			Users
		</button>
	</a>
	<a href="<?php echo site_url('Admin_products/index'); ?>">
		<button class="btn btn-primary option">
			<img class="option-img" src="<?php echo base_url(); ?>assets/images/admin-product.png"><br>
			Product
		</button>
	</a>
	<a href="<?php echo site_url('Home/logout'); ?>">
		<button class="btn btn-primary option">
			<img class="option-img" src="<?php echo base_url(); ?>assets/images/admin-logout.png"><br>
			Log Out
		</button>
	</a>
</div>


<?php
$this->load->view('footer');
?>