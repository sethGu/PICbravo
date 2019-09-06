<?php 

class SecurityQuestion extends CI_Controller
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
        if (isset($_SESSION['id'])) {
            $this->load->view('SecurityQuestion/header');
            $this->load->view('SecurityQuestion/SecurityQuestionBox',$this->data);
            $this->load->view('SecurityQuestion/footer');
        } else {
            redirect(base_url());
        }        
    }
    
    public function SecurityQuestion(){
        $questions1 = $this->input->post('questions1');
        $questions2 = $this->input->post('questions2');
        $questions3 = $this->input->post('questions3');
        //$password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
        //$password = $this->input->post('password');

        if($questions1 != NULL && $questions2 != NULL && $questions3 != NULL){
            $questions1 = password_hash($questions1, PASSWORD_BCRYPT);
            $questions2 = password_hash($questions2, PASSWORD_BCRYPT);
            $questions3 = password_hash($questions3, PASSWORD_BCRYPT);
            if (isset($_SESSION['id'])) {
                $id = $_SESSION['id'];
                if ($this->users_model->createSecurityQuestion($questions1, $questions2, $questions3, $id)) {
                    session_destroy();
                    redirect(base_url(). "Login");
                } else {
                    $this->data['status'] = "This Security Question of this account already created!";
                    $this->index();
                }
            } else {
                redirect(base_url());
            }            
        } else {
            $this->data['status'] = "Security Question cannot be null!";
            $this->index();
        }
        
    }

    
}

 ?>