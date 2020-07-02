<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// echo base_url();exit;
		$this->load->view('secureport/login');
	}


	public function dashboard()
	{
		$data['title'] = "dashboard";
		$data['script'] = ['index.js'];
		$this->load->view('secureport/dashboard',$data);
	}

	public function dashboard2()
	{
		$data['title'] = "dashboard2";
		$data['script'] = ['index2.js'];

		
		$this->load->view('secureport/dashboard2',$data);
	}

	public function dashboard3()
	{
		$data['title'] = "dashboard3";
			$data['script'] = [];
		$this->load->view('secureport/dashboard3',$data);
	}
}
