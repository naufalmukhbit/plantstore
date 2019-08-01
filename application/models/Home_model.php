<?php
class Home_model extends CI_Model
{
	public function get_data($tab)
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->join('profile_data','product.userid=profile_data.userid');
		if($tab == 1) {
			$this->db->order_by('product.userid');
		} else if($tab == 2) {
			$this->db->order_by('prod_id','DESC');
		} else if($tab == 3) {
			$this->db->order_by('price');
		}
		$query = $this->db->get();
		return $query->result();
	}
}
?>