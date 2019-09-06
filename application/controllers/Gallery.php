<?php 
class Gallery extends CI_Controller
{ 
	/*public function read($year = 2018) 
	{
		if (!file_exists(APPPATH.'views/papers/'.$year.'.php')) {
			show_404();
		}
		$data['year'] = $year;
		$this->load->view('templates/header',$data);
		$this->load->view('papers/'.$year,$data);
		$this->load->view('templates/footer',$data);
	} */
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Gallery_model');
		$this->load->model('upload_model');
		$this->load->model('follow_model');
		$this->load->model('notification_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->helper('cookie');
		$this->load->library('session');
		$this->data['no_results'] = "";
		$this->data['status'] = "";
	}
	public function index()
	{
		$data['no_results'] = "";
		$data['image'] = $this->Gallery_model->get_image_no();
		//$data['title'] = 'Papers achieve';
		//$data['pageTitle'] = 'Create a paper item';
		$this->load->view('Gallery/header');
		$this->load->view('Gallery/container');
		$this->load->view('Gallery/gallery',$data);
		$this->load->view('Login/footer');
		//$this->output->cache(1);
	}
	public function search($search = NULL)
	{
		$this->search = $this->input->post('search');
		$this->data['image'] = $this->Gallery_model->get_image($this->search);
		if (empty($this->data['image'])) {
			$this->search = $this->input->post('search');
			$this->data['no_results'] = "We cannot find any result include ' " . $this->search . " ' ";
			$this->data['image'] = $this->Gallery_model->get_image(NULL);
			//show_404();
		}
		
		$this->load->view('Gallery/header');
		$this->load->view('Gallery/container');
		$this->load->view('Gallery/gallery',$this->data);
		$this->load->view('Login/footer');
		//$this->output->cache(1);
		/*
		$this->output->enable_profiler(TRUE);
		$sections = array(
			'benchmarks' => FALSE,
			'config' => FALSE,
			'controller_info' => FALSE,
			'get' => FALSE,
			'post' => FALSE,
			'http_headers' => FALSE,
			'url_string' => FALSE,
			'memory_usage' => FALSE
		);
		$this->output->set_profiler_sections($sections);
		*/
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
	public function add_into_wishlist($search_details)
	{
		if (isset($_SESSION['email'])) {
			$this->Gallery_model->add_wishlist($_SESSION['email'], $search_details);

			redirect(base_url(). "Wishlist/" . $_SESSION['email']);
		} else {
			redirect(base_url(). "Login/");
		}
		
	}

	public function user_intro($email){
		$this->data['image'] = $this->Gallery_model->get_user($email);
		$this->data['profile_details'] = $this->upload_model->get_profile($email);
        $this->data['profileIMG'] = $this->upload_model->getprofileIMG($email);
		$this->load->view('Gallery/header');
		$this->load->view('Gallery/container');
		$this->load->view('Gallery/intro',$this->data);
		$this->load->view('Login/footer');
	}

	public function follow($follow){
		$email = $_SESSION['email'];
		if ($this->follow_model->follow($email, $follow)) {
			//notify email be followed
			$this->notification_model->create_notification($email, $follow);
			$this->index();
		} else {
			$this->user_intro($email);
		}
	}
	
}

?>