<?php 

/**
 * 
 */
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function index(){

		$this->load->view('home');
	}

	public function contact(){

		$this->load->view('contact');

	}
	public function team()
	{
		$this->load->view('team');
	}
}

?>