<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

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

	public function index(){
        $this->load->view('login.php');
    }

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login/'));
    }

    public function testlogin(){
        $this->load->model('AdminService');
        $data=array();
        $username=$this->input->post("email");
        $password=$this->input->post("password");

        $result=$this->AdminService->testLogin($username,sha1($password));
        if($result!=null){
			$this->session->set_userdata('nom',$username);
			redirect(base_url('admin'));
	        
        }else{
            $data['error']="Veuillez resaisir votre mot de passe ou username";
            $this->load->view("login.php",$data);
        }
    }			
}
