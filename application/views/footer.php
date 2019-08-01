	
	<!--jQuery Embedding-->
	<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
	<!--JavaScript-->
	<?php
	if (isset($filename)) {
		echo '<script src="' . base_url() . 'assets/js/' . $filename . '.js"></script>';
	}
	?>
	<!--Bootstrap's JavaScript Embedding-->
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--Bootstrap Form Helpers-->
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap-form-helpers/js/bootstrap-formhelpers.min.js"></script>
	<!--autoNumeric Embedding-->
	<script src="<?php echo base_url(); ?>assets/vendor/autoNumeric/autoNumeric.js"></script>
	<!--Navbar JS-->
	<script src="<?php echo base_url(); ?>assets/js/navbar.js"></script>
	<!--dataTables-->
	<script src="<?php echo base_url(); ?>assets/vendor/DataTables/datatables.min.js"></script>
	<script>
		function openForm() {
		  	document.getElementById("myForm").style.display = "block";
		  	var chat_to_close = document.querySelector('#chat-button');
		  	var replacement = document.createElement('div');
		  	replacement.setAttribute("id","chat-button");
		  	replacement.innerHTML = '<a onclick="closeForm()" href="javascript:void(0);" class="float close-button"><i class="fa fa-times my-float"></i></a>';
		  	chat_to_close.replaceWith(replacement);
		}

		function closeForm() {
		  	document.getElementById("myForm").style.display = "none";
		  	var close_to_chat = document.querySelector('#chat-button');
		  	var replacement = document.createElement('div');
		  	replacement.setAttribute("id","chat-button");
		  	replacement.innerHTML = '<a onclick="openForm()" href="javascript:void(0);" class="float open-button"><i class="fa fa-comment-dots my-float"></i><span class="ml-1">Chat with bot</span></a>';
		  	close_to_chat.replaceWith(replacement);
		}
	</script>
</body>
<html>