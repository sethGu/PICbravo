<?php 

class VerifySecurityQuestion extends CI_Controller
{ 
    public function __construct() {
        parent::__construct();
        $this->data['status'] = "";
        $this->load->model('users_model');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('cookie');
    }
    

    public function index(){
        $this->load->view('SecurityQuestion/VerifySecurityQuestion/header');
        $this->load->view('SecurityQuestion/VerifySecurityQuestion/SecurityQuestionVerify',$this->data);
        $this->load->view('SecurityQuestion/footer');
    }
    public function VerifySecurityQuestion(){
        $questions1 = $this->input->post('questions1');
        $questions2 = $this->input->post('questions2');
        $questions3 = $this->input->post('questions3');

        if($questions1 != NULL && $questions2 != NULL && $questions3 != NULL){
            $id = $_SESSION['id'];
            if ($this->users_model->verifySecurityQuestion($questions1, $questions2, $questions3, $id)){
                redirect(base_url(). "ResetPassword");
            } else {
                $this->data['status'] = "Your questions are incorrect!";
                $this->index();
            }
        }
    }



}

 ?>