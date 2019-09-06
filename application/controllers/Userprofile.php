<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userprofile extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->data['status'] = "";
        $this->load->model('upload_model');
        $this->load->model('notification_model');
        $this->load->helper('url');
		$this->load->helper('html');
		$this->load->helper('cookie');
		$this->load->library('session');
    }

    public function index() {
    	$email = $_SESSION['email'];
    	$data['profile_details'] = $this->upload_model->get_profile($email);
        $data['profileIMG'] = $this->upload_model->getprofileIMG($email);

        $this->load->view('Userprofile/header');
        $this->load->view('Userprofile/profile',$data);
        $this->load->view('Userprofile/footer');
    }


    public function logout() {
        session_destroy();
        redirect(base_url() );
    }

    public function notification($notification){
        
        $email = $_SESSION['email'];
        $data['notify'] = $this->notification_model->get_notification($email);
        $this->load->view('Userprofile/header');
        $this->load->view('Userprofile/notifications',$data);
        $this->load->view('Userprofile/footer');
        $this->notification_model->set_viewed($email);
    }

}
