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

            $data['title'] = "Le Réchauffement Climatique ";
            $data['description'] = $data['rclimat']['resume'] ;
            $this->load->view('template', $data);
           
        }

        public function causes()
        {
            $this->load->model('ClimatService');
            $this->load->helper('assets');
            $data = array();
            $data['causes'] = $this->ClimatService->getcauses();

            $data['title'] = "Causes du réchauffement Climatique ";
            $data['description'] = "Les humains ont un impact de plus en plus important sur le climat et la température de la terre, en consommant des combustibles fossiles, en abattant des forêts et en élevant du bétail.Ces activités libèrent d'énormes quantités de gaz à effet de serre, qui viennent s'ajouter à celles naturellement présentes dans l’atmosphère, renforçant ainsi l'effet de serre et le réchauffement de la planète." ;
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

            $data['title'] = "Conséquences du réchauffement Climatique ";
            $data['description'] = "Un réchauffement climatique durable supérieur au seuil de + 1,5 °C aurait des impacts irréversibles pour les systèmes humains et écologiques.Quel que soit le rythme de réduction des émissions de gaz à effet de serre, les impacts dévastateurs du réchauffement sur la nature et l’humanité qui en dépend vont s’accélérer et devenir douloureusement palpables bien avant 2050." ;
            $this->load->view('template', $data);
           
        }


        public function solutions()
        {
            $this->load->model('ClimatService');
            $this->load->helper('assets');
            $data = array();
            $data['solutions'] = $this->ClimatService->getsolutions();
            $data['view'] = "solutions";

            $data['title'] = "Solutions contre réchauffement Climatique ";
            $data['description'] = "Nous pouvons tous contribuer à atténuer les changements climatiques. Que ce soit par nos déplacements, par notre consommation d’électricité ou par notre alimentation, nous pouvons faire la différence.";

            $this->load->view('template', $data);
           
        }


	
	
}