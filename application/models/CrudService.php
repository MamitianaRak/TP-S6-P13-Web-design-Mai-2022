<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class CrudService extends CI_Model
    {
        
	function generateCRUD($tablename)
	{
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table($tablename);
     
        $crud->set_relation('idcategorie','categories','nom');
        $crud->display_as('idcategorie','Nom Categorie');
        $crud->set_subject('Actualite');
        
        $crud->set_field_upload('img','assets/img');
    
        $output = $crud->render();
        
        return $output;
	}

	



    
    }

?>