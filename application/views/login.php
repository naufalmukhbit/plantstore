<?php
$this->load->view('header');
?>

<body>
	<span class="logo">
		<a href="<?php echo site_url('home'); ?>">
			<img src="<?php echo base_url(); ?>assets/images/logo.png">
		</a>
	</span>
	<div class="container-fluid">				
		<div class="row justify-content-center"> 
			<div class="col-md-4 col-sm-10 form-box">			
				<h3 class="title">Login to Playsthetic</h3>
				<?php 
		        echo form_open("Login/validate_data");
		        ?>
  					<div class="form-group">
    					<input type="text" class="form-control" placeholder="Enter username" id="username-user" name="username">
  					</div>
  					<div class="form-group">
    					<input type="password" class="form-control" placeholder="Password" id="password-user" name="password">
  					</div>
  					<div class="text-center">
  						<button type="submit" class="btn btn-block">Log In</button>
  					</div>
				</form>
				<footer class="mt-3">
					<p class="text-center sign">Don't have an account? 
						<a href="<?php echo site_url('register'); ?>">Click here to register</a>
					</p>
				</footer>
			</div>							
		</div>								
	</div>

<?php
$this->load->view('footer');
if($this->session->flashdata('message') == 'login_failed') {
	echo "<script>alert('Username/password is incorrect.');</script>";
}
?>