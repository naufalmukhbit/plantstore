<?php
class CompleteProfile_model extends CI_Model
{
	public function add_profile($data,$imagesrc)
	{
		$param = array(
			"userid" => $this->session->userdata('userid'),
			"name" => $data['name'],
			"bdate" => $data['bd'],
			"gender" => $data['gender'],
			"phone" => $data['phone'],
			"disp_pic" => $imagesrc
		);
		$insert = $this->db->insert('profile_data', $param);
		if ($insert) {
			return true;
		} else {
			return false;
		}
		
	}

	public function add_address($data)
	{
		$param = array(
			"userid" => $this->session->userdata('userid'),
			"address" => $data['address-main'],
			"city" => $data['address-city'],
			"province" => $data['address-province'],
			"postal_code" => $data['address-zipcode']
		);
		$insert = $this->db->insert('address_data', $param);
		if ($insert) {
			return true;
		} else {
			return false;
		}
	}

	public function get_address($userid)
	{
		$this->db->select('address_id,address,city,province,postal_code');
		$this->db->from('address_data');
		$this->db->where('userid',$userid);
		$query = $this->db->get();
		return $query;
	}
}
?>