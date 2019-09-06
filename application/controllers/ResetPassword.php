<?php 

class ResetPassword extends CI_Controller
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
        $this->load->view('ResetPassword/ResetPassword',$this->data);
        $this->load->view('SecurityQuestion/footer');
    }

    public function ResetPassword(){
        if (strlen($this->input->post('newpassword')) > 0) {
            $password = password_hash($this->input->post('newpassword'), PASSWORD_BCRYPT);

            if ($_POST['newpassword'] != NULL && strlen($_POST['newpassword'])>5) {
                $id = $_SESSION['id'];
                if ($this->users_model->changePassword($id, $password)) {
                    
                    redirect(base_url(). "Userprofile/logout");
                } else {
                    $this->data['status'] = "This email already used!";
                    $this->index();
                }
            } else {
                $this->data['status'] = "Length of password should between 6 to 20!";
                $this->index();
            }
        } else {
            redirect(base_url(). "Userprofile");
        }
    }

    public function InputEmail(){
        $this->load->view('ResetPassword/header');
        $this->load->view('ResetPassword/InputEmail',$this->data);
        $this->load->view('SecurityQuestion/footer');
    }
    public function SendEmail(){
        $email = $this->input->post('email');
        $_SESSION['id'] = $this->Users_model->getID($email);
        if ($this->users_model->checkEmail($email)) {
            if ($_SESSION['id'] != NULL) {
                redirect(base_url(). "VerifySecurityQuestion");
            } else {
                $this->data['status'] = "Email invalid!";
                $this->InputEmail();
            }
        } else {
            $this->data['status'] = "Email invalid!";
            $this->InputEmail();
        }
        
    }



}

 ?>