<?php
class Users_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}
    
	public function authenticate($email, $password) {
		 $query = $this->db->get_where("user", array('email' => $email));
		//$query = $this->db->query("SELECT * FROM user WHERE email = '" . $email . "'");
		
		$row = $query->row();

		if (isset($row)) {
			//$queryID = $this->db->query("SELECT id FROM user WHERE email = '" . $email . "'");
			$this->db->select('id');
			$this->db->from('user');
			$this->db->where('email', $email);
			$queryID = $this->db->get();
			$rowID = $queryID->row();
			//The id session will be used to verify security question
			$_SESSION['id'] = $rowID->id;
			return(password_verify($password, $row->password));
		} else {
			return FALSE;
		}
	}

	public function getID($email){
		$query = $this->db->get_where("user", array('email' => $email));
		$row = $query->row_array();
		if (isset($row)) {
			$this->db->select('id');
			$this->db->from('user');
			$this->db->where('email', $email);
			$queryID = $this->db->get();
			$rowID = $queryID->row();
			return $rowID->id;
		} else{
			return NULL;
		}
		
	}

	public function createaccount($email, $password){

		$query = $this->db->get_where("user", array('email' => $email));
		$row = $query->row_array();
		if (isset($row)) {
			return FALSE;
		} else {
			$data = array(
			    'email' => $email,
			    'password' => $password
			);
			$this->db->insert('user', $data);

			$query = $this->db->query("SELECT id FROM user WHERE email = '" . $email . "'");
			$row = $query->row();
			//The id session will be destoried after creation of security question.
			$_SESSION['id'] = $row->id;
			return TRUE;
		}
	}

	public function checkEmail($email) {
		$query = $this->db->get_where("user", array('email' => $email));
		$row = $query->row();
		if (isset($row)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function changePassword($id, $password) {
		$query = $this->db->get_where("user", array('id' => $id));
		$row = $query->row_array();
		
			$data = array(
			    'password' => $password
			);
			$this->db->where('id', $id);
			$this->db->update('user', $data);

			
			return TRUE;
		
	}

	public function createSecurityQuestion($questions1, $questions2, $questions3, $id){
		$query = $this->db->get_where("forgotpwd", array('account_id' => $id));
		$row = $query->row_array();
		if (isset($row)) {
			return FALSE;
		} else {
			$data = array(
				'account_id' => $id,
			    'questions1' => $questions1,
			    'questions2' => $questions2,
			    'questions3' => $questions3
			);
			$this->db->insert('forgotpwd', $data);
			return TRUE;
		}
	}

	public function verifySecurityQuestion($questions1, $questions2, $questions3, $id){
		$query = $this->db->get_where("forgotpwd", array('account_id' => $id));
		$row = $query->row();
		if (isset($row)) {
			
			//check under bcrypt
			if(password_verify($questions1, $row->questions1)){
				if (password_verify($questions2, $row->questions2)) {
					if (password_verify($questions3, $row->questions3)) {
						return TRUE;
					} else {
						return FALSE;
					}
				} else {
					return FALSE;
				}
			} else{
				return FALSE;
			}


		} else {
			return FALSE;
		}

	}


}