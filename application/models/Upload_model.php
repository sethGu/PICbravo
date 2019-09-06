<?php
class Upload_model extends CI_Model {

	public function __construct() {
		$this->load->database();
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
	


	public function upload_original($filename, $email){
		$imagePath = 'public/pictures/temp/' . $filename;
		$data = array(
		    'email' => $email,
		    'file_name' => $filename,
		    'image_path' => $imagePath
		);
		$this->db->insert('uneditedimage', $data);
	}


	public function upload_edited($filename, $email, $description){
		$this->db->select('id');
		$this->db->where('email', $email);
		$queryID = $this->db->get('user');
		$rowID = $queryID->row_array();
		$userID = $rowID['id'];
		$imagePath = 'public/pictures/edited/' . $filename;

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


	public function get_picture($filename){
		$this->db->select('*');
		$this->db->where('file_name',$filename);
		$query = $this->db->get('uneditedimage');
		$row = $query->row_array();
		return $row;
		
	}

	public function get_edited_picture($filename){
		$this->db->select('*');
		$this->db->where('file_name',$filename);
		$query = $this->db->get('image');
		$row = $query->row_array();
		return $row;
		
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