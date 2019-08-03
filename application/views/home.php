<?php
$this->load->view('header');
?>
	<body>
		<?php
		$this->load->view('navbar');
		?>
		
		<!--Image Carousel-->
		<div class="container banner-main">
			<div id="banner-images" class="carousel slide mb-5" data-ride="carousel">
				<ul class="carousel-indicators">
	    			<li data-target="#banner-images" data-slide-to="0" class="active"></li>
	    			<li data-target="#banner-images" data-slide-to="1"></li>
	    			<li data-target="#banner-images" data-slide-to="2"></li>
	    			<li data-target="#banner-images" data-slide-to="3"></li>
	    			<li data-target="#banner-images" data-slide-to="4"></li>
	  			</ul>
	  			<div class="carousel-inner">
		    		<div class="carousel-item active">
	    				<img class="d-block" src="<?php echo base_url(); ?>assets/images/banner-image-1.jpg" alt="Banner 1">
	    			</div>
	    			<div class="carousel-item">
	      				<img class="d-block" src="<?php echo base_url(); ?>assets/images/banner-image-2.jpg" alt="Banner 2">
	    			</div>
	    			<div class="carousel-item">
		    			<img class="d-block" src="<?php echo base_url(); ?>assets/images/banner-image-3.jpg" alt="Banner 3">
	    			</div>
	    			<div class="carousel-item">
	      				<img class="d-block" src="<?php echo base_url(); ?>assets/images/banner-image-4.jpg" alt="Banner 4">
	    			</div>
	    			<div class="carousel-item">
	      				<img class="d-block" src="<?php echo base_url(); ?>assets/images/banner-image-5.jpg" alt="Banner 5">
	    			</div>
	  			</div>
	  			<a class="carousel-control-prev" href="#banner-images" data-slide="prev">
		    		<span class="carousel-image-prev"></span>
	  			</a>
	  			<a class="carousel-control-next" href="#banner-images" data-slide="next">
	    			<span class="carousel-image-next"></span>
	  			</a>
			</div>
		</div>
		
		<!--Contents-->
		<div class="container site-content">
			<div class="row">
				<div class="col-lg-8">
					<ul class="nav">
  						<li class="nav-item">
    						<a class="nav-link active" data-toggle="pill" href="#content1">FEATURED</a>
  						</li>
  						<li class="nav-item">
    						<a class="nav-link" data-toggle="pill" href="#content2">WHAT'S NEW</a>
  						</li>
  						<li class="nav-item">
    						<a class="nav-link" data-toggle="pill" href="#content3">LOW BUDGET</a>
  						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active container" id="content1">
							<div class="container-fluid">
								<div class="row">
									<?php
									foreach ($featured as $prod) { 
										$price = $prod->price;
										if (($price > $minprice) && ($price < $maxprice))
										{
										?>
									<div class="col-md-4 content-item">
										<div class="card">
  											<img class="card-img-top product-picture" src="<?php echo base_url(); ?>docs/product-pictures/<?php echo $prod->img_src; ?>">
  											<!--400x500 image-->
											<div class="card-body">
												<a href="<?php echo site_url('Product/index/'.$prod->prod_id); ?>">
													<h4 class="card-title"><?php echo $prod->prod_name; ?></h4>
												</a>
												<h6 class="card-text">by <?php echo $prod->name; ?></h6>
								    			<span class="card-text new-price">
								    				<span>Rp </span>
								    				<span class="fixed-price"><?php echo $prod->price; ?></span>
								    			</span>
								    			<a href="<?php echo site_url('Product/index/'.$prod->prod_id); ?>" class="btn btn-block">VIEW PRODUCT</a>
											</div>
										</div>
									</div>
									<?php 
									}
									}
									?>
								</div>
							</div>
						</div>
  						<div class="tab-pane container" id="content2">
  							<div class="container-fluid">
								<div class="row">
									<?php
									foreach ($new as $prod) { 
										$price = $prod->price;
										if (($price > $minprice) && ($price < $maxprice))
										{
										?>
									<div class="col-md-4 content-item">
										<div class="card">
  											<img class="card-img-top product-picture" src="<?php echo base_url(); ?>docs/product-pictures/<?php echo $prod->img_src; ?>">
  											<!--400x500 image-->
											<div class="card-body">
												<a href="<?php echo site_url('Product/index/'.$prod->prod_id); ?>">
													<h4 class="card-title"><?php echo $prod->prod_name; ?></h4>
												</a>
												<h6 class="card-text">by <?php echo $prod->name; ?></h6>
								    			<span class="card-text new-price">
								    				<span>Rp </span>
								    				<span class="fixed-price"><?php echo $prod->price; ?></span>
								    			</span>
								    			<a href="<?php echo site_url('Product/index/'.$prod->prod_id); ?>" class="btn btn-block">VIEW PRODUCT</a>
											</div>
										</div>
									</div>
									<?php 
									}
									}
									?>
								</div>
							</div>
  						</div>
  						<div class="tab-pane container" id="content3">
  							<div class="container-fluid">
								<div class="row">
									<?php
									foreach ($lowcost as $prod) { 
										$price = $prod->price;
										if (($price > $minprice) && ($price < $maxprice))
										{
										?>
									<div class="col-md-4 content-item">
										<div class="card">
  											<img class="card-img-top product-picture" src="<?php echo base_url(); ?>docs/product-pictures/<?php echo $prod->img_src; ?>">
  											<!--400x500 image-->
											<div class="card-body">
												<a href="<?php echo site_url('Product/index/'.$prod->prod_id); ?>">
													<h4 class="card-title"><?php echo $prod->prod_name; ?></h4>
												</a>
												<h6 class="card-text">by <?php echo $prod->name; ?></h6>
								    			<span class="card-text new-price">
								    				<span>Rp </span>
								    				<span class="fixed-price"><?php echo $prod->price; ?></span>
								    			</span>
								    			<a href="<?php echo site_url('Product/index/'.$prod->prod_id); ?>" class="btn btn-block">VIEW PRODUCT</a>
											</div>
										</div>
									</div>
									<?php 
									}
									}
									?>
								</div>
							</div>
  						</div>
					</div>
				</div>
				<div class="col-lg-4 card pt-3 px-4">
					<b class="mb-4">FILTER YOUR SEARCH</b>
					<!-- <div class="row">
						<iframe src="widget.html" width="100%"  height="550"  border="0"></iframe>
					</div> -->
					<!-- <div class="row"> -->
						<?php echo form_open('Home/set_pricerange'); ?>
							<div class="slidecontainer">
								<label for="min-price">Minimum Price : </label>
								<span id="min-price-info"></span><br>
		  						<input type="range" min="0" max="2000000" value="<?php echo $minprice; ?>" class="slider w-100" id="min-price" name="minprice">
							</div>
							<div class="slidecontainer">
								<label for="min-price">Maximum Price : </label>
								<span id="max-price-info"></span><br>
		  						<input type="range" min="0" max="2000000" value="<?php echo $maxprice; ?>" class="slider w-100" id="max-price" name="maxprice">
							</div>
							<button type="submit" class="btn btn-primary submitprice">Submit</button>
							<a href="<?php echo site_url('Home/index'); ?>" class="btn btn-primary">Reset</a>
						</form>
					<!-- </div> -->
				</div>
			</div>
		</div>

		<!--Footer-->
		<div class="container-fluid bg-dark" id="main-footer">
			<div class="row mx-5 py-3">
				<div class="col-xs-4 w-50 text-right pr-3">
					<a href="#">
						About us
					</a>
				</div>
				<div class="col-xs-6 w-50">
					&copy; Plantstore 2019. All rights reserved.
				</div>
			</div>
		</div>
<?php
$this->load->view('chat');
$this->load->view('footer');
?>