<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class ClimatService extends CI_Model
    {
        
	function getRclimat()
	{
        $query=$this->db->query("SELECT * FROM rclimat");
        $retour=array();
        foreach ($query->result_array() as $one) {
            $retour[] = $one;
        }
        return $retour[0];
	}

	function getcauses()
	{
		$query=$this->db->query("SELECT * FROM causes");
        $retour=array();
        foreach ($query->result_array() as $one) {
            $retour[] = $one;
        }
        return $retour;
	}


	function getconsequences()
	{
		$query=$this->db->query("SELECT * FROM consequences");
        $retour=array();
        foreach ($query->result_array() as $one) {
            $retour[] = $one;
        }
        return $retour;
	}


	function getsolutions()
	{
		$query=$this->db->query("SELECT * FROM solutions");
        $retour=array();
        foreach ($query->result_array() as $one) {
            $retour[] = $one;
        }
        return $retour;
	}



	// function getActusByid($id)
	// {
	// 	$sql = "SELECT * FROM  actus c where id='%s'";
    //     $sql=sprintf($sql,$id);
    // 	$query=$this->db->query($sql);
    //         $retour=array();
    //         foreach ($query->result_array() as $one) {
    //             $retour[] = $one;
    //         }
    //         return $retour[0];
	// }

	// function getCatByid($id)
	// {
	// 	$sql = "SELECT * FROM  categorie where id='%s'";
    //     $sql=sprintf($sql,$id);
    // 	$query=$this->db->query($sql);
    //         $retour=array();
    //         foreach ($query->result_array() as $one) {
    //             $retour[] = $one;
    //         }
    //         return $retour[0];
	// }

	// function checkURL($str,$id,$categorie){
	// 	$sql = "SELECT * FROM  actus c where id='%s'";
    // 	$sql=sprintf($sql,$id);
    // 	$result=$this->db->query($sql)->result_array();
    //     if($result == null){
    //         return 1;
    //     }
    // 	$val = 'actualite/'.$categorie.'/'.$str.'-'.$id;
	// 	if($val != $result[0]['url'])
	// 	{
	// 		return 1;
	// 	}
	// 	return 0;
	// }

	// function getallCat(){
    //     $query=$this->db->query("SELECT * FROM categorie");
    //     $retour=array();
    //     foreach ($query->result_array() as $one) {
    //         $retour[] = $one;
    //     }
    //     return $retour;
	// }


	// function setActus($idcategorie,$titre,$resume,$contenu)
	// {
	// 	$categorie = getCatByid($idcategorie);
	// 	$sql= "INSERT into actus VALUES (null,now(),'%s','%s','%s','%s','%s')";
	// 	$sql=sprintf($sql,$this->db->escape($idcategorie),$this->db->escape($titre),$this->db->escape($resume),$this->db->escape($contenu),toSlug($categorie."/".$titre));
	// 	$this->db->query($sql);
		
	// }

	// function toSlug($str,$delimiter= '-')
	// {
	// 	$slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter)); 
	// 	return $slug;
		
	// }
    
    }

?>