<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Climat extends CI_Controller {

        /**
         * Index Page for this controller.
         *
         * Maps to the following URL
         *      http://example.com/index.php/welcome
         *  - or -
         *      http://example.com/index.php/welcome/index
         *  - or -
         * Since this controller is set as the default controller in
         * config/routes.php, it's displayed at http://example.com/
         *
         * So any other public methods not prefixed with an underscore will
         * map to /index.php/welcome/<method_name>
         * @see https://codeigniter.com/user_guide/general/urls.html
         */
    
        public function __construct(){
            parent::__construct();
        }

        public function index()
        {
            $this->load->model('ClimatService');
            $this->load->helper('assets');
            $data = array();
            $data['rclimat'] = $this->ClimatService->getRclimat();
            $data['view'] = "acceuil";
            $this->load->view('template', $data);
           
        }

        public function causes()
        {
            $this->load->model('ClimatService');
            $this->load->helper('assets');
            $data = array();
            $data['causes'] = $this->ClimatService->getcauses();
            $data['view'] = "causes";
            $this->load->view('template', $data);
           
        }


        public function consequences()
        {
            $this->load->model('ClimatService');
            $this->load->helper('assets');
            $data = array();
            $data['cons'] = $this->ClimatService->getconsequences();
            $data['view'] = "consequences";
            $this->load->view('template', $data);
           
        }


        public function solutions()
        {
            $this->load->model('ClimatService');
            $this->load->helper('assets');
            $data = array();
            $data['solutions'] = $this->ClimatService->getsolutions();
            $data['view'] = "solutions";
            $this->load->view('template', $data);
           
        }




        // public function contenu($categorie =null ,$name = null,$id= null)
        // {
        //     $this->load->model('ActualiteService');
        //     $this->load->helper('assets');
        //     $data = array();
        //     $p=$this->ActualiteService->checkURL($name,$id,$categorie);
        //     if($p == 1){
        //         //header('Location : error.php');
        //         header("HTTP/1.0 404 Not Found");
        //        exit;
        //     }
          
        //     $data['contenu'] = $this->ActualiteService->getActusByid($id);
        //     $data['categorie'] = $this->ActualiteService->getCatByid($data['contenu']['idcategorie']);
        //     $this->load->view('contenu', $data);
            
            
           
        // }
	
	
}