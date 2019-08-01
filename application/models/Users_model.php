<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class Users_model extends CI_Model
{

	public function get_data()
	{
		$query = $this->db->order_by('userid','ASC')->get('id_data');
		return $query->result();
	}

    public function delete_user($userid){
        $table = 'id_data';
        $this->db->where('userid', $userid);
        $delete = $this->db->delete(array('id_data','profile_data','address_data','cart','wishlist'));
    }
}

?>