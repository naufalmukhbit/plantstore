<?php
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
	}

	public function index()
	{
		if($this->session->userdata('userid') == 1) {
            redirect('Admin/index');
		} else {
			$data = array(
				'title' => 'Plantstore - Your Agriculture Companion',
				'filename' => 'home',
				'featured' => $this->home_model->get_data(1),
				'new' => $this->home_model->get_data(2),
				'lowcost' => $this->home_model->get_data(3),
				'minprice' => '0',
				'maxprice' => '20000000'
			);
			$this->load->view('home',$data);
		}
	}

	public function set_pricerange()
	{
		$data = $this->input->post(null,TRUE);
		$data['title'] = 'Playsthetic - Style by You';
		$data['filename'] = 'home';
		$data['featured'] = $this->home_model->get_data(1);
		$data['new'] = $this->home_model->get_data(2);
		$data['lowcost'] = $this->home_model->get_data(3);
		$this->load->view('home',$data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Home/index');
	}
}