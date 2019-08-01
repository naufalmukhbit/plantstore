<?php
class Complete_profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('CompleteProfile_model');
	}

	public function index()
	{
		$data = array(
			'title' => 'Complete your profile',
			'filename' => 'complete_profile',
			'name' => $this->session->flashdata('name'),
			'userid' => $this->session->userdata('userid'),
			'address' => $this->CompleteProfile_model->get_address($this->session->userdata('userid'))
		);
		$this->load->view('complete_profile',$data);
	}

	public function add_profile()
	{
		if (empty($_FILES['display-picture']['name'])) {
			$data = $this->input->post(null,TRUE);
			$file_name = "";
			$add_profile = $this->CompleteProfile_model->add_profile($data,$file_name);
			if($add_profile) {
				$this->session->set_userdata('userpic','default.png');
				redirect('Home/index');
			} else {
				$this->session->set_flashdata('message','insert_error');
				$this->session->set_flashdata('name',$data['name']);
				redirect('Complete_profile/index');
			}
		} else {
			$config['upload_path']          = './docs/display-pictures/';
			$config['allowed_types']        = 'jpg|png';
			$config['max_size']             = 2048;
			$config['max_width']            = 0;
	        $config['max_height']           = 0;
			$this->load->library('upload', $config);
			
			if($this->upload->do_upload('display-picture')) {
				$upload_data = $this->upload->data(); 
				$file_name = $upload_data['file_name'];

				$data = $this->input->post(null,TRUE);
				$add_profile = $this->CompleteProfile_model->add_profile($data,$file_name);
				$this->session->set_userdata('userpic',$file_name);
				redirect('Home/index');
			} else {
				$this->session->set_flashdata('message','insert_error');
				$this->session->set_flashdata('name',$data['name']);
				redirect('Complete_profile/index');
			}	
		}
	}

	public function add_address()
	{
		$data = $this->input->post(null,TRUE);
        $add_address = $this->CompleteProfile_model->add_address($data);
        if($add_profile) {
        	$this->session->set_flashdata('message','address_success');
        	$this->session->set_flashdata('name',$data['name']);
            redirect('Complete_profile/index');
        } else {
            $this->session->set_flashdata('message','address_failed');
            $this->session->set_flashdata('name',$data['name']);
            redirect('Complete_profile/index');
        }
	}
}
?>