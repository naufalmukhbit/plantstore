<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_users extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model');
	}

	public function index()
	{
		$data = array(
			'title' => 'Users Data',
			'filename' => 'admin_users',
			'users' => $this->Users_model->get_data()
		);
		$this->load->view('admin_users',$data);
	}

    public function delete_user()
    {
        $userid = $this->input->post('userid');
        $hapus = $this->Users_model->delete_user($userid);
        redirect('Admin_users/index');
    }
}
