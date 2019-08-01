<?php
class Profile_model extends CI_Model
{
	public function get_data($userid)
	{
		$this->db->select('*');
		$this->db->from('profile_data');
		$this->db->where('userid',$userid);
		$query = $this->db->get();
		return $query->result();
	}
}
?>