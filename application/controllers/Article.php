<?php
class Article extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Article_model');
	}

	public function index($artid)
	{
		$data = array(
			'title' => $this->Article_model->get_title($artid),
			'filename' => 'article',
			'content' => $this->Article_model->get_data($artid)
		);
		$this->load->view('article',$data);
	}
}
?>