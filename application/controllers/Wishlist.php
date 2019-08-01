<?php
class Wishlist extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Wishlist_model');
	}

	function index()
	{
		$data = array(
			'title' => 'Wishlist',
			'filename' => 'wishlist',
			'items' => $this->Wishlist_model->get_data()
		);
		$this->load->view('wishlist',$data);
	}
}