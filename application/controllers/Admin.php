<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('Base.php');
class Admin extends Base {

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

	public function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');

	}

	public function _example_output($output = null)
	{
		$this->load->view('crud',(array)$output);
	}

	public function index($table = 'actualites')
	{
		$this->load->model('CrudService');
		$this->load->helper('assets');
		 $data = array();
		 $output = $this->CrudService->generateCRUD('actualites');

		 $this->_example_output($output);
	}
			
}
