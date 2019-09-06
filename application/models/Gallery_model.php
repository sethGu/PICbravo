<?php 

/**
 * 
 */
class Gallery_model extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}
	public function get_image_no($search = FALSE){
		if($search === FALSE){
			//$this->db->select('username','description');
			//$this->db->from('user');
			//$this->db->join('image', 'image.user_id = user.id', 'left');
			$query = $this->db->get('image');
			return $query->result_array();
		}
	}

	public function get_image($search) {
		
		//$query = $this->db->get_where('papers',array('year' => $year));
		//$this->db->where('title', 'abc');
		$this->db->select('*');
		$this->db->from('image');
		//echo $this->db->count_all_results();
		//$this->db->like('description', $search, 'before');    // Produces: WHERE `title` LIKE '%match' ESCAPE '!'
		//$this->db->like('description', $search, 'after'); // Produces: WHERE `title` LIKE 'match%' ESCAPE '!'
		//$this->db->like('description', $search, 'both');  // Produces: WHERE `title` LIKE '%match%' ESCAPE '!'
		$this->db->like('description', $search);
		//$this->db->order_by('title', 'DESC');
		
		$query = $this->db->get();
		//return $query->result_array();
		
		return $query->result_array();
	}

	public function get_details($search_details){

		$this->db->select('*');
		$this->db->from('image');
		$this->db->where('file_name', $search_details);
		$query = $this->db->get();
		return $query->row_array();
	}


	public function get_detail($search_details){

		$this->db->select('*');
		$this->db->from('image');
		$this->db->where('file_name', $search_details);
		$query = $this->db->get();
		return $query->result_array();
	}


	public function add_wishlist($email, $filename){
		$queryID = $this->db->query("SELECT id FROM user WHERE email = '" . $email . "'");
		$rowID = $queryID->row_array();
		$userID = $rowID['id'];
		$queryDe = $this->db->query("SELECT description FROM image WHERE file_name = '" . $filename . "'");
		$rowDe = $queryDe->row_array();
		$description = $rowDe['description'];
		$imagePath = 'public/pictures/edited/' . $filename;

		$data = array(
			'email' => $email,
			'file_name' => $filename,
			'user_id' => $userID,
			'description' => $description
		);
		$this->db->insert('wishlist',$data);
	}

	public function get_user($email){
		$this->db->select('*');
		$this->db->from('image');
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->result_array();
	}

}
