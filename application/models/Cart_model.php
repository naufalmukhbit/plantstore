<?php
class Cart_model extends CI_Model
{
	public function get_data()
	{
		$this->db->select('cart.prod_id,prod_name,price,amount,img_src');
		$this->db->from('cart');
		$this->db->join('product','cart.prod_id=product.prod_id');
		$this->db->where('cart.userid',$this->session->userdata('userid'));
		$query = $this->db->get();
		return $query->result();
	}
}
?>