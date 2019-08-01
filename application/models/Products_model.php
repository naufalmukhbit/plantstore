<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class Products_model extends CI_Model
{

	public function get_data()
	{
		$query = $this->db->order_by('prod_name','DESC')->get('product');
		return $query->result();
	}

	public function save_data($data,$imgsrc)
	{
		$param = array(
    		"prod_name"=>$data['prod_name'],
            "price"=>$data['price'],
    		"userid"=>$data['userid'],
            "prod_desc"=>$data['prod_desc'],
    		"img_src"=>$imgsrc
		);
		$insert = $this->db->insert('product', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
	}

    public function edit_data($data){
	    $table = 'product';
        $param = array(
            "prod_id"=>$data['prod_id'],
            "prod_name"=>$data['prod_name'],
            "userid"=>$data['userid'],
            "img_src"=>$data['img_src'],
            "category"=>$data['category'],
        );
        $this->db->where('prod_id', $data['prod_id']);
        $update = $this->db->update($table,$param);
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }

    }

    public function delete_data($prod_id){
        $table = 'product';
        $this->db->where('prod_id', $prod_id);
        $delete = $this->db->delete($table);

        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }

    }
}

?>