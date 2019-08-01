<?php
class EditProfile_model extends CI_Model
{
	public function get_data($userid)
	{
		$this->db->select('*');
		$this->db->from('profile_data');
		$this->db->where('userid',$userid);
		$query = $this->db->get();
		return $query->result();
	}
	public function edit_profile($data,$imgsrc)
	{
		if ($imgsrc == "") {
			$param = array(
				"name" => $data['name'],
				"bdate" => $data['bdate'],
				"gender" => $data['gender'],
				"phone" => $data['phone']
			);
		} else {
			$param = array(
				"name" => $data['name'],
				"bdate" => $data['bdate'],
				"gender" => $data['gender'],
				"phone" => $data['phone'],
				"disp_pic" => $imgsrc
			);	
		}
		$this->db->where('userid',$this->session->userdata('userid'));
		$update = $this->db->update('profile_data', $param);
		if ($update) {
			return true;
		} else {
			return false;
		}
	}
}
?>