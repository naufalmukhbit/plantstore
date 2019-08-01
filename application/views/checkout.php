<?php
		$grand_total = 0;
		// Calculate grand total.
		if ($cart = $this->cart->contents()):
		foreach ($cart as $item):
		$grand_total = $grand_total + $item['subtotal'];
		endforeach;
		endif;
?>


<?php
	$this->load->view('header');
?>

<body>
		<?php
			$this->load->view('navbar');
		?>

	<div class="container">
		<!--1301164191-->
		<!-- Back to Homepage -->
		<ul class="justify-content-end ml-auto" >
			<a href="../homepage/index.html" id="back-btn">
				<i class="fa fa-arrow-left"></i> HOME
			</a>
		</ul>

	<div class="Shopper-information">
		<div class="row">
			<div class="col-sm-3">

			</div>
			<div class="col-sm-5" clearfix>
				<div class="shipping-information">
					<p>Shipping Information</p>
					<div class="form-one">
						<form name="form1" action="" method="POST">
							<strong>$<?php echo number_format($grand_total, 2); ?></strong>
							<input type="text" placeholder="Full Name" name="fullname" style="...">
							<input type="text" placeholder="E-mail" name="email" style="...">
							<input type="text" placeholder="Contact Number" name="contactno" style="...">
							<input type="text" placeholder="Address" name="address" style="...">
							<input type="text" placeholder="Province" name="province" style="...">
							<input type="text" placeholder="City" name="city" style="...">
							<input type="text" placeholder="Districts" name="districts" style="...">
							<input type="text" placeholder="Postal Code" name="postalcode" style="...">
							<input type="submit" name="submit" value="Save" style="...">
							<tr><td><?php
								// This button for redirect main page.
								echo "<a class ='fg-button teal'  id='back' href=" . base_url() . "index.php/cart>Back</a>"; 
								?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>	

	<?php 
	if (isset($_POST['submit']))
	{
		$link = mysqli_connect("localhost","root","");
		mysqli_select_db($link,"database_playsthetic");
		mysqli_query($link,"insert into checkout values(' ','$_POST['fullname']','$_POST['email']','$_POST['contactno']','$_POST['address']','$_POST['province'],'$_POST['city']','$_POST['districts']','$_POST['postalcode']')");
	?>
	<script type="text/javascript">
		
		alert("your orders saved successfully");
	</script>
	<?php 

	}


	?>

</body>
</html>

<?php
	$this->load->view('footer');
?>