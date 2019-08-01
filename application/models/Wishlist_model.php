<?php
class Wishlist_model extends CI_Model
{
	public function get_data()
	{
		$this->db->select('wishlist.prod_id,prod_name,price,img_src');
		$this->db->from('wishlist');
		$this->db->join('product','wishlist.prod_id=product.prod_id');
		$this->db->where('wishlist.userid',$this->session->userdata('userid'));
		$query = $this->db->get();
		return $query->result();
	}
}
?>