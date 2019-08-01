<!--Navigation Bar-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="<?php echo site_url('Home/index'); ?>">
				<img class="navbar-brand" src="<?php echo base_url(); ?>assets/images/logo.png">
			</a>
		</div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-contents">
			<span class="navbar-toggler-icon"></span>
		</button>

		<?php
		if($this->session->has_userdata('userid')) {
			echo '
			<!--Logged In-->
			<div class="collapse navbar-collapse" id="navbar-contents">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item my-auto">
						<a href="'.site_url('Wishlist/index').'">
							<i class="fa fa-star"></i>
						</a>
					</li>
					<li class="nav-item my-auto">
						<a href="'.site_url('Cart/index').'">
							<i class="fa fa-shopping-cart"></i>
							<span class="badge badge-pill" id="cart-badge"></span>
						</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
							<img src="'.base_url().'docs/display-pictures/'.$this->session->userdata('userpic').'" class="rounded-circle">
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="'.site_url('Profile/index').'">
								<i class="fa fa-user"></i>Profile
							</a>
							<a class="dropdown-item" href="'.site_url('Edit_profile/index').'">
								<i class="fa fa-cog"></i>Settings
							</a>
							<a class="dropdown-item" href="'.site_url('Home/logout').'">
								<i class="fa fa-sign-out-alt"></i>Log Out
							</a>
						</div>
					</li>
				</ul>
			</div>
			';
		} else {
			echo '
			<div class="collapse navbar-collapse" id="navbar-contents">
				<ul class="nav ml-auto" id="login-btn">
					<li class="nav-item mr-2" style="margin-top:.4rem;">
						<a href="'.site_url('Login/index').'">Login</a>
					</li>
					<li class="nav-item">
						<a href="'.site_url('Register/index').'">
							<button class="btn btn-block reg-btn" type="button" id="sign-up-btn">
								Sign Up
							</button>
						</a>
					</li>
				</ul>
			</div>
			';
		} ?>
	</div>
</nav>