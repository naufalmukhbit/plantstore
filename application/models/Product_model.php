<?php

class Product_model extends CI_Model
{
	function get_data($prod_id)
	{
		$this->db->select('prod_id,prod_name,price,prod_desc,img_src');
		$this->db->from('product');
		$this->db->where('prod_id',$prod_id);
		$query = $this->db->get();
		return $query->result();
	}

	function add_cart($prod_id)
	{
		$param = array(
			'userid' => $this->session->userdata('userid'),
			'prod_id' => $prod_id,
			'amount' => 1
		);
		$add = $this->db->insert('cart',$param);
		if($add) {
			return true;
		}
	}
}
?>