<?php
$this->load->view('header');
?>

<body>
	<?php
	$this->load->view('navbar');
	?>

	<div class="container">
		<!-- Back to Homepage -->
		<ul class="justify-content-end ml-auto" >
			<a href="../homepage/index.html" id="back-btn">
				<i class="fa fa-arrow-left"></i> HOME
			</a>
		</ul>

		<!-- Body Shopping Cart -->

		<div class="shopping-cart">
			<h1>Shopping Cart</h1>
			<table border="0" id="item-table">
				<col width="250">
				<col width="500">
				<col width="200">
				<col width="180">
				<col width="150">
				<col width="200">
				<tr>
					<th colspan="2">Product</th>
					<th>Price (IDR)</th>
					<th>Quantity</th>
					<th></th>
					<th>Total (IDR)</th>
				</tr>
				<?php
				$num=0;
				foreach ($items as $cart_item) { 
					$num = $num +1; ?>
				<tr id="prd00<?php echo $num; ?>" class="product">
					<td>
						<img src="<?php echo base_url().'docs/product-pictures/'.$cart_item->img_src; ?>" class="prd-img" >
					</td>
					<td>
						<div class="product-details">
							<div class="product-title"><?php echo $cart_item->prod_name; ?></div>
						</div>
					</td>
					<td>
						<div class="money product-price" data-a-sign="Rp " data-a-sep="." data-a-dec=","><?php echo $cart_item->price; ?></div>
					</td>
					<td>
						<div class="product-quantity">
							<input type="number" min="1" class="numOfProduct" value="<?php echo $cart_item->amount; ?>">
						</div>
					</td>
					<td>
						<div class="product-removal">
							<button type="button" class="btn remove-product">
								Remove
							</button>
						</div>
					</td>
					<td>
						<div class="money product-line-price" data-a-sign="Rp " data-a-sep="." data-a-dec=","></div>
					</td>
				</tr>
				<?php }	?>
				
				
			</table>
		</div>

		<div class="totals">
			<div class="totals-item">
				<label>Subtotal</label>
				<div class="money totals-value" id="cart-subtotal" data-a-sign="Rp " data-a-sep="." data-a-dec=","></div>
			</div>
			<div class="totals-item">
				<label>Shipping</label>
				<div class="money totals-value" id="cart-shipping" data-a-sign="Rp " data-a-sep="." data-a-dec=",">15000</div>
			</div>
			<div class="totals-item totals-item-total">
				<label>Grand Total</label>
				<div class="money totals-value" id="cart-total" data-a-sign="Rp " data-a-sep="." data-a-dec=","></div>
			</div>
			<button type="button" class="btn checkout float-right">Checkout</button>
		</div>
	</div>

<?php
$this->load->view('footer');
?>