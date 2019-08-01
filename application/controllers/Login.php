<?php
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');	
	}

	public function index()
	{
		$data = array(
			'title' => 'Login to Playsthetic',
			'filename' => 'login'
		);
		$this->load->view('login',$data);
	}

	public function validate_data()
	{
		$data = $this->input->post(null,TRUE);
		$login_data = $this->Login_model->validate_data($data);
		if ($login_data) {
			$userid = $login_data->userid;
            $this->session->set_userdata('userid',$userid);
            $pic = $this->Login_model->get_pic($userid);
            if(empty($pic)) {
            	$this->session->set_userdata('userpic','default.png');
            } else {
            	$this->session->set_userdata('userpic',$pic->disp_pic);
            }
            redirect('Home/index');
        } else {
            $this->session->set_flashdata('message','login_failed');
            redirect('Login/index');
        }
	}
}
?>