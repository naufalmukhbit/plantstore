<?php
class Profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Profile_model');
	}

	public function index()
	{
		$data = array(
			'title' => 'Your Profile',
			'filename' => 'profile',
			'profile' => $this->Profile_model->get_data($this->session->userdata('userid'))
		);
		$this->load->view('profile',$data);
	}
}
?>