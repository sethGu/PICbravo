<?php 

class Signup extends CI_Controller
{ 
	public function __construct() {
        parent::__construct();
        $this->data['status'] = "";
        $this->load->model('users_model');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('cookie');
    }
	public function index() 
	{
        
		$this->load->view('Signup/header');
        $this->load->view('Signup/signupbox',$this->data);
        $this->load->view('Signup/footer');
	}
	
    public function signup(){
        $email = $this->input->post('email');
        $password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
        //$password = $this->input->post('password');

        if ($email != NULL) {
            if ($_POST['password'] != NULL && strlen($_POST['password'])>5) {
                if ($this->users_model->createaccount($email, $password)) {
                    
                    redirect(base_url(). "SecurityQuestion");
                } else {
                    $this->data['status'] = "This email already used!";
                    $this->index();
                }
            } else {
                $this->data['status'] = "Length of password should between 6 to 20!";
                $this->index();
            }
            
        } else {
            $this->data['status'] = "Email cannot be null!";
            $this->index();
        }
        

    }
}

 ?>