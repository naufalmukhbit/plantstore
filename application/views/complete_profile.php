<?php
$this->load->view('header');
?>

<body>
	<?php 
	$this->session->set_userdata('userpic','default.png');
	$this->load->view('navbar');
	?>
	<div class="container"> 		
		<h3>Fill your profile</h1>
			<?php 
			echo form_open_multipart("Complete_profile/add_profile",array('class'=>'mx-auto'));
			?>
			<div class="row mt-5">
				<div class="col-sm-4 text-center img-upload">
					<img id="pic-preview" src="<?php echo base_url(); ?>docs/display-pictures/default.png" class="rounded-circle mx-auto d-block">
					
					<br><br>
					<input type="file" id="photo" name="display-picture" size="10" onchange="previewImage()">
				</div>
				<div class="col-sm-8">
					<div class="form-group">
						<input type="text" class="form-control" id="profile-name" value="<?php echo $name; ?>" placeholder="Name" name="name">
					</div>
					<div class="form-group">
						<input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control" id="profile-bd" placeholder="Birth date" name="bd">
					</div>
					<div class="form-group">
						<select class="form-control custom-select" id="profile-gender" name="gender">
							<option value="" disabled selected value>Gender</option>
							<option value="Laki-laki">Male</option>
							<option value="Perempuan">Female</option>
						</select>
					</div>
					<div class="form-group">
						<input type="text" class="form-control bfh-phone" id="profile-phone" data-format="dddd-dddd-dddd" placeholder="Phone number" name="phone">
					</div>
				</div>
			</div>
			<br>
			<div class="row ml-0">
				<div class="col-md-1 padding-0">
					<button type="button" class="btn" id="add-address" data-toggle="modal" data-target="#addAddress">
						Add new address
					</button>
				</div>					
			</div><br>
			<table class="table table-striped">
				<tr>
					<th>Address</th>
					<th>City</th>
					<th>Province</th>
					<th>Postal Code</th>
				</tr>
				<?php
				if($address->num_rows() == 0) {
					echo '
					<tr>
						<td colspan="4">
							You haven'."'".'t added any address yet!
						</td>
					</tr>';
				} else {
					$address_data = $address->result();
					foreach ($address_data as $alamat) {
				?>
				<tr>
					<td><?php echo $alamat->address; ?></td>
					<td><?php echo $alamat->city; ?></td>
					<td><?php echo $alamat->province; ?></td>
					<td><?php echo $alamat->postal_code; ?></td>
				</tr>
				<?php
					}
				}
				?>
			</table>
			<button type="submit" name="submitProfile" class="btn btn-submit mt-3">Submit</button>
		</form>		
	</div>

	<div class="modal fade" id="addAddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add New Address</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php 
					echo form_open("Complete_profile/add_address");
					?>
					<div class="form-group">
						<input type="text" class="form-control" name="address-main" placeholder="Address"><br>
						<input type="text" class="form-control" name="address-city" placeholder="City"><br>
						<select class="form-control custom-select" name="address-province">
							<option value="" disabled selected value>Province</option>
							<option value="Aceh">Aceh</option>
							<option value="Bali">Bali</option>
							<option value="Banten">Banten</option>
							<option value="Bengkulu">Bengkulu</option>
							<option value="D.I. Yogyakarta">D.I. Yogyakarta</option>
							<option value="DKI Jakarta">DKI Jakarta</option>
							<option value="Gorontalo">Gorontalo</option>
							<option value="Jambi">Jambi</option>
							<option value="Jawa Barat">Jawa Barat</option>
							<option value="Jawa Tengah">Jawa Tengah</option>
							<option value="Jawa Timur">Jawa Timur</option>
							<option value="Kalimantan Barat">Kalimantan Barat</option>
							<option value="Kalimantan Selatan">Kalimantan Selatan</option>
							<option value="Kalimantan Tengah">Kalimantan Tengah</option>
							<option value="Kalimantan Timur">Kalimantan Timur</option>
							<option value="Kalimantan Utara">Kalimantan Utara</option>
							<option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
							<option value="Kepulauan Riau">Kepulauan Riau</option>
							<option value="Lampung">Lampung</option>
							<option value="Maluku">Maluku</option>
							<option value="Maluku Utara">Maluku Utara</option>
							<option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
							<option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
							<option value="Papua">Papua</option>
							<option value="Papua Barat">Papua Barat</option>
							<option value="Riau">Riau</option>
							<option value="Sulawesi Barat">Sulawesi Barat</option>
							<option value="Sulawesi Selatan">Sulawesi Selatan</option>
							<option value="Sulawesi Tengah">Sulawesi Tengah</option>
							<option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
							<option value="Sulawesi Utara">Sulawesi Utara</option>
							<option value="Sumatera Barat">Sumatera Barat</option>
							<option value="Sumatera Selatan">Sumatera Selatan</option>
							<option value="Sumatera Utara">Sumatera Utara</option>
						</select><br><br>
						<input type="text" class="form-control" name="address-zipcode" placeholder="Postal Code">
					</div>
					<button type="submit" name="addAddress" class="btn btn-primary btn-block">Submit</button>
				</form>                        
			</div>
		</div>
	</div>
</div>

<?php
$this->load->view('footer');
if($this->session->flashdata('message') == 'insert_error') {
	echo "<script>alert('Something's wrong. Please try again.');</script>";
} else if($this->session->flashdata('message') == 'address_success') {
	echo "<script>alert('Address successfully added!');</script>";
} else if($this->session->flashdata('message') == 'address_failed') {
	echo "<script>alert('Address can't be added. Please try again.');</script>";
} else if($this->session->flashdata('message') == 'address_delete') {
	echo "<script>alert('Success delete address.');</script>";
} else if($this->session->flashdata('message') == 'address_del_failed') {
	echo "<script>alert('Address can't be deleted. Please try again.');</script>";
} else if($this->session->userdata('userid') == NULL) {
	echo "<script>alert('userid not found');</script>";
}
?>