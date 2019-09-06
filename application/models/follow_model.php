<?php
class follow_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}
    

	public function get_notification($email){
		
	}

	public function follow($email, $follow){
		$this->db->select('*');
		$this->db->from('follow');
		$this->db->where('email', $email);
		$this->db->where('follow_email', $follow);
		$query = $this->db->get();

		$row = $query->row();
		if (isset($row)) {
			return FALSE;
		} else {
			if ($email == $follow) {
				return FALSE;
			} else {
				$data = array(
					'email' => $email,
					'follow_email' => $follow
				);
				$this->db->insert('follow',$data);
				return TRUE;
			}			
		}
		
	}
	




	
}