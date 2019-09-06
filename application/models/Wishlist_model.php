<?php 

/**
 * 
 */
class Wishlist_model extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}

	public function get_wishlist($email) {
		
		$this->db->select('*');
		$this->db->from('wishlist');
		
		$this->db->where('email', $email);
		
		$query = $this->db->get();
		return $query->result_array();
		//return $query->row_array();
	}

	public function delete_from_wishlist($file_name){

		$this->db->delete('wishlist', array('file_name' => $file_name));
	}
}
