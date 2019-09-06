<?php 

class Uploadprofile extends CI_Controller
{ 
	public function __construct() {
        parent::__construct();
        $this->data['status'] = "";
        $this->load->model('upload_model');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('cookie');
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
        //$this->load->library('form');
        $this->load->library('form_validation');
        $this->load->library('image_lib');
        
    }
	public function index() 
	{
        
		$this->load->view('Userprofile/header');
        $this->load->view('Userprofile/updateprofile',$this->data);
        $this->load->view('Userprofile/footer');
	}
	
    public function uploadprofile(){
        $username = $this->input->post('username');
        $nickname = $this->input->post('nickname');
        $preferedEmail = $this->input->post('preferedEmail');
        $description = $this->input->post('description');
        $email = $_SESSION['email'];

        if ($this->upload_model->uploaduserprofile($username, $nickname, $preferedEmail, $description, $email)) {
            
            redirect(base_url(). "Userprofile");
        } else {
            $this->data['status'] = "This username has already exists! (description length should be less than 300 characters!)";
            $this->index();
        }
    }

    public function uploadPIMG(){
        $email = $_SESSION['email'];
        $this->data['profileIMG'] = $this->upload_model->getprofileIMG($email);
        $this->load->view('Userprofile/header');
        $this->load->view('Userprofile/uploadprofileIMG', array('error' => ' ' ));
        $this->load->view('Userprofile/footer');
    }

    public function uploadprofileIMG(){
        $config['upload_path'] = './public/pictures/temp';
        $config['allowed_types'] = 'gif|png|jpg';
        $config['max_size']= 10000000;
        $config['encrypt_name']= TRUE;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('file')) {
            $error = array('error' => $this->upload->display_errors());
            $this->uploadPIMG();
        } else {
            $fileInfo = $this->upload->data();

            $filename = $fileInfo['file_name'];
            $email = $_SESSION['email'];
            //$this->data['filename'] = $fileInfo['file_name'];
            if($this->upload_model->uploadprofileIMG($email, $filename)){
                redirect(base_url(). "Userprofile");
            } else {
                $this->data['status'] = "Something wrong happen!";
                $this->uploadPIMG();
            }
        }
    }
}

 ?>