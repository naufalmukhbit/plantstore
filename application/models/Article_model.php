<?php
class Article_model extends CI_Model
{
	public function get_data($artid)
	{
		if (!isset($artid)) {
			$artid == 0;
		}
		$this->db->select('*');
		$this->db->from('article_data');
		$this->db->where('article_id',$artid);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_title($artid)
	{
		$this->db->select('title');
		$this->db->from('article_data');
		$this->db->where('article_id',$artid);
		$query = $this->db->get();
		$result = $query->row();
		return $result->title;
	}
}
?>