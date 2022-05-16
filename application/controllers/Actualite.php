<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Actualite extends CI_Controller {

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
            $this->load->model('ActualiteService');
            $this->load->helper('assets');
            $data = array();
            $data['listeactusrand'] = $this->ActualiteService->getListActusrand();
            $data['listeactus'] = $this->ActualiteService->getListActusLast();
            $data['view'] = "actualite";
            $this->load->view('template', $data);
           
        }

        public function fiche($categorie =null ,$name = null,$id= null)
        {
            $this->load->model('ActualiteService');
            $this->load->helper('assets');
            $data = array();
            $p=$this->ActualiteService->checkURL($name,$id,$categorie);
            if($p == 1){
                //header('Location : error.php');
                header("HTTP/1.0 404 Not Found");
               exit;
            }
          
            $data['contenu'] = $this->ActualiteService->getActusByid($id);
            $data['categorie'] = $this->ActualiteService->getCatByid($data['contenu']['idcategorie']);
            $data['contenulast'] = $this->ActualiteService->getListActusLast3();          
            $data['contenurand'] = $this->ActualiteService->getListActusrand2();
            $data['view'] = "fiche";
            $this->load->view('template', $data);
            
            
           
        }
	
	
}