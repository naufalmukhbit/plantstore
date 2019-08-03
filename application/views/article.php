<?php
$this->load->view('header');
?>
	<body>
		<?php
		$this->load->view('navbar');
		?>
		<div class="content">
			<?php
			foreach ($content as $article) {
			?>
			<div class="bg-image" style="background-image: url('<?php echo base_url(); ?>docs/bg-images/<?php echo $article->img_src; ?>');"></div>
			<div class="inner-content">
				<div class="container article-content">
					<h1><?php echo $article->title; ?></h1>
					<?php include($_SERVER['DOCUMENT_ROOT'] . '/plantstore/docs/article/' . $article->text_src); ?>
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
			</div>
			<?php
			}
			?>
		</div>
		
<?php
$this->load->view('chat');
$this->load->view('footer');
?>