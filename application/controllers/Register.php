<?php
class Register extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Register_model');
	}

	public function index()
	{
		$data = array(
			'title' => 'Register to Playsthetic',
			'filename' => 'register'
		);
		$this->load->view('register',$data);
	}

	public function add_account()
	{
		$data = $this->input->post(null,TRUE);
        $add_account = $this->Register_model->add_account($data);
        if($add_account) {
            $this->session->set_flashdata('name', $data['name']);
            $id = $this->Register_model->get_id($data['username']);
            $this->session->set_userdata('userid',$id->userid);
            redirect('Complete_profile/index');
        } else {
        	$this->session->set_flashdata('error','username_taken');
            redirect('Register/index');
        }
	}
}
?>