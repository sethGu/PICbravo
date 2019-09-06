<?php 
class Wishlist extends CI_Controller
{ 
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Wishlist_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->helper('cookie');
		$this->load->library('session');
	}
	public function index($user_email = NULL)
	{
		if (isset($_SESSION['email'])) {
			$email = $_SESSION['email'];
			$this->data['wishlist'] = $this->Wishlist_model->get_wishlist($email);
			$this->load->view('Gallery/header');
			$this->load->view('Gallery/container');
			$this->load->view('Gallery/wishlist',$this->data);
			$this->load->view('Login/footer');
		} else {
			redirect(base_url(). "Login/");
		}
		
		//$this->output->cache(1);
	}
	public function delete_from_wishlist($file_name)
	{
		$this->Wishlist_model->delete_from_wishlist($file_name);
		redirect(base_url(). "Wishlist/" . $_SESSION['email']);
	}
	public function details($search_details)
	{
		$this->dataD['image'] = $this->Gallery_model->get_details($search_details);
		$this->data['image'] = $this->Gallery_model->get_detail($search_details);
		$this->load->view('Gallery/header');
		$this->load->view('Gallery/container');
		$this->load->view('Gallery/centerpicture',$this->dataD);
		$this->load->view('Gallery/gallery',$this->data);
		$this->load->view('Login/footer');
	}
	
	public function delete_cache(){
		$this->output->delete_cache('/papers');
	}
}

?>