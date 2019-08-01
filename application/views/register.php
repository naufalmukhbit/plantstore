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
				<h3 class="title">Register to Playsthetic</h3>							
       <?php 
       echo form_open("Register/add_account",array('class'=>'mt-4'));
       ?> 
       <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Name">
      </div>
      <div class="form-group">
       <input type="text" class="form-control" name="username" placeholder="Username">
     </div>
     <div class="form-group">
       <input type="email" class="form-control" name="email" placeholder="E-mail">
     </div>
     <div class="form-group">
       <input type="password" class="form-control" name="password" placeholder="Password">
     </div>
     <div class="form-group">
       <input type="password" class="form-control" name="passConfirm" placeholder="Confirm password">
     </div>
     <div class="form-check">
      <label class="form-check-label">
       <input type="checkbox" class="form-check-input" id="agreement">
       I agree to the <a href="javascript:;" data-toggle="modal" data-target="#tnc">terms and conditions</a>
       <div class="modal fade" id="tnc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Terms and Conditions</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="terms">
                <p>
                  This website is a college project. We don't have any real terms and condition yet, because obviously we created this website for task purpose only. But we don't limit our expectations to just a college task, and we are open to possibilities of this site going big. Hope doesn't kill you, right? ;)
                </p><br>
                <p>
                  However, please don't use passwords that you usually use on your other accounts, because we can see your password that you registered in this site so easily.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </label>						
  </div>
  <div class="text-center daftar">
    <button type="submit" class="btn btn-block" name="submit" id="signupButton">Register</button>
  </div>
</form>
<?php


?>
<footer class="mt-3">
 <p class="text-center sign">Already have an account? 
  <a class="acc" href="<?php echo site_url('login'); ?>">Click here to login</a>
</p>
</footer>
</div>
</div>
</div>
<?php
$this->load->view('footer');
if($this->session->flashdata('error') == 'username_taken') {
  echo "<script>alert('Username has been taken!');</script>";
}
?>