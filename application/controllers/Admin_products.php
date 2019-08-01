<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_products extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Products_model');
	}

	public function index()
	{
       /* if ($this->session->userdata('level')!="Products") {
            redirect('Akun_C/index');
        }*/
		$data = array(
			'title' => 'Data Product',
            'filename' => 'admin_products',
			'products' => $this->Products_model->get_data()
		);
		$this->load->view('admin_products',$data);
	}

	public function add()
	{
        $config['upload_path']          = './docs/product-pictures/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 2048;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $this->load->library('upload', $config);
        
        if($this->upload->do_upload('product-image')) {
            $upload_data = $this->upload->data(); 
            $file_name = $upload_data['file_name'];

            $data = $this->input->post(null,TRUE);
            $add_product = $this->Products_model->save_data($data,$file_name);
            redirect('Admin_products/index');
        } else {
            $this->session->set_flashdata('message','update_error');
            redirect('Admin_products/index');
        }
	}

    public function edit()
    {
        $data = $this->input->post(null,TRUE);
        $edit = $this->prod_model->edit_data($data);
        if($edit){
            $this->session->set_flashdata('alert', 'sukses_edit');
            redirect('prod_view/index');
        }else{
            echo "<script>alert('Gagal Edit Data');</script>";

        }
    }

    public function hapus()
    {
        $nim = $this->input->post('prod_id');
        $hapus = $this->prod_model->delete_data($prod_id);
        if($hapus){
            $this->session->set_flashdata('alert', 'sukses_hapus');
            redirect('prod_view/index');
        }else{
            echo "<script>alert('Gagal Hapus Data');</script>";

        }
    }
}
