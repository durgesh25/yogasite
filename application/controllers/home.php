<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->view('header');
		$this->load->view('home');
	}
        public function portfolio()
	{
        $this->load->view('header');
		$this->load->view('portfolio');
	}
        public function about_us()
	{
        $this->load->view('header');
		$this->load->view('aboutUs');
	}
        public function contact_us()
	{
		 $this->load->helper(array('form','url'));
         $this->load->view('header');
		 $this->load->view('contacUs');
	}

	public function insert()
	{
		$this->load->database();
		$this->load->model('home_model');
		$this->home_model->insert($_POST);
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */