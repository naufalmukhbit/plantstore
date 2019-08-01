<?php
$this->load->view('header');
?>

<body>
<h2>Products Data</h2>

<!--Add New Product-->
<div class="container">
	<div class="col-md-12">
		<button class="btn btn-md btn-primary" data-toggle="modal" data-target="#add-product">Add New Product</button>
	</div>
</div>
<div id="add-product" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title my-auto">Add New Product</h4>
                <button type="button" class="close my-auto" data-dismiss="modal"><i class="fa fa-times"></i></button>
            </div>
            <?php echo form_open_multipart("Admin_products/add"); ?>
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label" for="product-image">Image</label><br>
                    <input type="file" name="product-image" size="20">
                </div>
                <div class="form-group">
                    <label class="control-label" for="prod_name">Name</label>
                    <input type="text" name="prod_name" class="form-control" id="prod_name" required>
                </div>
                <div class="form-group">
                    <label class="control-label" for="prod_desc">Creator ID</label>
                    <input type="text" name="userid" class="form-control" id="userid" required>
                </div>
                <div class="form-group">
                    <label class="control-label" for="price">Price (in IDR)</label><br>
                    <input type="text" name="price" class="form-control" id="price" required>
                </div>
                <div class="form-group">
                    <label class="control-label" for="prod_desc">Description</label>
                    <textarea name="prod_desc" class="form-control" id="prod_desc" required></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type=button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-primary" name="insert-product" value="Submit">
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 20px">
	<div class="col-md-12">
		<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Product ID</th>
					<th>Product Name</th>
                    <th>Price</th>
					<th>Creator ID</th>
					<th><center>Action</center></th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				foreach ($products as $prod) {
				?>
				<tr>
					<td><?php echo $no++;?></td>
					<td><?php echo $prod->prod_id;?></td>
					<td><?php echo $prod->prod_name; ?></td>
                    <td><?php echo $prod->price; ?></td>
					<td><?php echo $prod->userid; ?></td>	
					<td style="text-align: center;">
						<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit<?php echo $prod->prod_id; ?>"><i class="fa fa-edit"></i></button>
						<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus<?php echo $prod->prod_id; ?>"><i class="fa fa-trash"></i></button>
					</td>
				</tr>

                <div id="edit<?php echo $prod->prod_id; ?>" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title my-auto">Edit Product</h4>
                                <button type="button" class="close my-auto" data-dismiss="modal"><i class="fa fa-times"></i></button>
                            </div>
                            <?php echo form_open("home_product/edit"); ?>
                            <div class="modal-body">
                                <input type="hidden" name="prod_id" class="form-control" value="<?php echo $prod->prod_id;?>" id="prod_id" required>
                                <div class="form-group">
                                    <label class="control-label" for="product-image">Image</label><br>
                                    <input type="file" name="product-image" size="20">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="prod_name">Name</label>
                                    <input type="text" name="prod_name" class="form-control" value="<?php echo $prod->prod_name;?>" id="prod_name" required>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label" for="price">Price</label><br>
                                    <input type="text" name="price" class="form-control" value="<?php echo $prod->price;?>" id="price" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="prod_desc">Description</label>
                                    <textarea name="prod_desc" class="form-control" id="prod_desc" rows="5"><?php echo $prod->prod_desc;?></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
                                <input type="submit" class="btn btn-primary" name="edit" value="Edit">
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
                <div id="delete<?php echo $prod->prod_id; ?>" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Delete this product?</h4>
                                <?php echo form_open("Admin_products/hapus"); ?>
                                <input type="hidden" name="prod_id" class="form-control" value="<?php echo $prod->prod_id;?>" id="prod_id" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn btn-primary">Cancel</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>


				<?php } ?>
			</tbody>
		</table>
	</div>
</div>

<?php
$this->load->view('footer');
?> 

<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>
</body>
</html>