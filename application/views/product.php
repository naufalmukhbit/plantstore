<?php
$this->load->view('header');
?>

<body>
	<?php
	$this->load->view('navbar');
	?>
	<div class="container">
		<?php
		foreach ($info as $prod_data) {
		?>
		<div class="row justify-content-center"> 
			<div class="col-4">
				<img class="produk" src="<?php echo base_url(); ?>docs/product-pictures/<?php echo $prod_data->img_src; ?>">
			</div>
			<div class="col-8 desc">
				<h2><?php echo $prod_data->prod_name; ?></h2>
				<h5 id="price">Rp <?php echo $prod_data->price; ?></h5>
				<p>
					<?php echo $prod_data->prod_desc; ?>
				</p>
				<p class="size">
					Available sizes: XS | S | M | L | XL | XXL
				</p>
				<div class="text-center">
					<a href="<?php echo site_url('Product/add_cart/'.$prod_data->prod_id); ?>" class="btn btn-block">Add To Cart</a>
				</div>	
			</div>
		</div>
		<?php
		}
		?>
	</div>
	

<?php
$this->load->view('footer');
if($this->session->flashdata('message') == 'cart_not_login') {
	echo "<script>alert('Something's wrong. Please try again.');</script>";
} else if($this->session->flashdata('message') == 'cart_failed') {
	echo "<script>alert('Add to cart failed!');</script>";
} else if($this->session->flashdata('message') == 'cart_success') {
	echo "<script>alert('Add to cart success!');</script>";
}
?>