<?php
class Admin extends CI_Controller
{
	public function index()
	{
		$data = array(
			'title' => 'Playsthetic Admin Page',
			'filename' => 'admin'
		);
		$this->load->view('admin',$data);
	}
}
?>