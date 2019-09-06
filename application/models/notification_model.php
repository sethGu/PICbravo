<?php
class notification_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}
    

	public function get_notification($email){
		$this->db->select('*');
		$this->db->from('notification');
		$this->db->where('email', $email);
		//$this->db->where('viewed', "0");
		$query = $this->db->get();
		return $query->result_array();
	}

	public function create_notification($email, $follow){
		$data = array(
			'email' => $follow,
			'notify_type' => "announcement",
			'msg' => $email . "  has just followed you"
		);
		$this->db->insert('notification',$data);
	}


	public function set_viewed($email){
		$data = array(
		    'viewed' => "1"
		);

		$this->db->where('email', $email);
		$this->db->update('notification', $data);
	}









	public function get_profile($email) {
		// $query = $this->db->get_where("users", array('email' => $email));
		$query = $this->db->query("SELECT * FROM user WHERE email = '" . $email . "'");
		
		return $query->row_array();
	}

	public function uploaduserprofile($username, $nickname, $preferedEmail, $description, $email){

		//$query = $this->db->query("SELECT * FROM user WHERE username = '" . $username . "'");
		$query = $this->db->get_where("user", array('username' => $username));
		$row = $query->row_array();
			

		if (isset($row)) {
			return FALSE;
		} else {
			$data = array(
			    'preferedEmail' => $preferedEmail,
			    'nickname' => $nickname,
			    'username' => $username,
			    'description' => $description
			);
			$this->db->where('email', $email);
			$this->db->update('user', $data);
			return TRUE;
		}
	}
	public function uploadpicture($email, $description, $filename){
		$this->db->select('id');
		$this->db->where('email', $email);
		$queryID = $this->db->get('user');
		//$queryID = $this->db->query("SELECT id FROM user WHERE email = '" . $email . "'");
		$rowID = $queryID->row_array();
		$userID = $rowID['id'];
		$imagePath = 'public/pictures/temp/' . $filename;

		if (isset($rowID)) {
			if (strlen($description) > 299) {
				return FALSE;
			} else {
				$data = array(
				    'email' => $email,
				    'file_name' => $filename,
				    'description' => $description,
				    'user_id' => $userID,
				    'image_path' => $imagePath
				);
				$this->db->insert('image', $data);
				return TRUE;
			}
		}else{
			return FALSE;
		}				
	}

	public function uploadprofileIMG($email, $filename){
		$this->db->select('id');
		$this->db->where('email', $email);
		$queryID = $this->db->get('user');
		$rowID = $queryID->row_array();
		$userID = $rowID['id'];
		$imagePath = 'public/pictures/temp/' . $filename;

		if (isset($rowID)) {
			$data = array(
			    'email' => $email,
			    'img_path' => $imagePath,
			    'account_id' => $userID
			);
			$this->db->update('img', $data);
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function getprofileIMG($email){
		$this->db->select('img_path');
		$this->db->where('email',$email);
		$query = $this->db->get('img');
		$row = $query->row_array();
		$IMGpath = $row['img_path'];
		if (isset($row)) {
			return $IMGpath;
		} else {
			return "public/pictures/profileIMG/default.png";
		}
	}
}