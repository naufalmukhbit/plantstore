<?php
class Register_model extends CI_Model
{
	public function add_account($data)
	{
		$param = array(
			"username" => $data['username'],
			"email" => $data['email'],
			"password" => $data['password']
		);
		$this->db->where('username',$param['username']);
		$check = $this->db->get('id_data');
		if($check->num_rows()==1) {
			return false;
		} else {
			$insert = $this->db->insert('id_data', $param);
			if ($insert) {
				return true;
			} else {
				return false;
			}
		}
	}

	public function get_id($username)
	{
		$this->db->where('username',$username);
        $result = $this->db->get('id_data');
        if($result->num_rows() == 1){
            return $result->row(0);
        }else{
            return NULL;
        }
	}
}
?>