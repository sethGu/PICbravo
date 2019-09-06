<?php 

class Picbravo extends CI_Controller
{ 
	public function __construct() {
        parent::__construct();
        $this->data['status'] = "";
        $this->load->model('users_model');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('cookie');
        $this->load->library('session');
    }
	public function index() 
	{
		$this->load->view('homepage/header');
		$this->load->view('homepage/homepage');
	}
	public function login(){
		$email = $this->input->post('email');
        $password = $this->input->post('password');
        $remember = $this->input->post('remember');

        if ($remember) {
            setcookie("email", $_POST["email"], time() + 60*60*24, "/");            
        } else {
            delete_cookie('email');
        }

        if ($this->users_model->authenticate($email, $password)) {
            $_SESSION['email'] = $email;

            redirect(base_url(). "home/");
        } else {
            $this->data['status'] = "Your email or password is incorrect!";
            $this->index();
        }

        $this->load->view('Login/header');
        $this->load->view('Login/loginbox');
        $this->load->view('Login/footer');
	}
}

 ?>