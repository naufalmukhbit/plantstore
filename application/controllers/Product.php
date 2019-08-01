<?php
class Product extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
	}

	public function index($prod_id)
	{
		$info = $this->Product_model->get_data($prod_id);
		$data = array(
			'filename' => 'product',
			'info' => $info
		);
		$this->load->view('product',$data);
	}

	public function add_cart($prod_id)
	{
		if($this->session->has_userdata('userid')) {
			$add = $this->Product_model->add_cart($prod_id);
			$this->session->set_flashdata('message','cart_success');
			redirect('Product/index/'.$prod_id);
		} else {
			$this->session->set_flashdata('message','cart_not_login');
			redirect('Product/index/'.$prod_id);
		}
	}
}