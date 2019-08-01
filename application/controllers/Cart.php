<?php
class Cart extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Cart_model');
	}

	function index()
	{
		$data = array(
			'title' => 'Shopping Cart',
			'filename' => 'cart',
			'items' => $this->Cart_model->get_data()
		);
		$this->load->view('cart',$data);



		// $this->Cart_model->get_data('cart', array(
		// 	'Name'             => $this->input->post('prod_name'),
		// 	'Product ID'       => $this->input->post('prod_id'),
		// 	'Price'            => $this->input->post('price'),
		// 	'Quantity'         => $this->input->post('amount'),
		// )); 
	}


	// function show_cart()
	// {
	// 	foreach ($this->cart->contents() as $item)
	// 	{
	// 		$this->checkout_model->get_data('checkout', array(
	// 			'Name'             => $item['prod_name'],
	// 			'Product ID'       => $item['prod_id'],
	// 			'Price'            => $item['price'],
	// 			'Quantity'         => $item['amount'],
	// 		));
	// 	}
	// }

// 	function update_cart(){

// 		$data = array(
// 			'rowid'  => $this->input->post('row_id'),
// 			'qty'    => 0,
// 			'price'  => '',

// 		);

// 		$this->cart->update($data);

// 	}
}
?>