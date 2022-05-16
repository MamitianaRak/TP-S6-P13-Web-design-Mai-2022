<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class ActualiteService extends CI_Model
    {
        
	function getListActusrand()
	{
        $query=$this->db->query("SELECT * FROM actusview where year(date) >= year(now()) ORDER BY RAND() limit  6");
        $retour=array();
        foreach ($query->result_array() as $one) {
            $retour[] = $one;
        }
        return $retour;
	}

	function getListActusrand2()
	{
        $query=$this->db->query("SELECT * FROM actusview where year(date) >= year(now()) ORDER BY RAND() limit  2");
        $retour=array();
        foreach ($query->result_array() as $one) {
            $retour[] = $one;
        }
        return $retour;
	}


	function getListActusLast()
	{
        $query=$this->db->query("SELECT * FROM actusview where year(date) >= year(now()) order by date limit  3 ");
        $retour=array();
        foreach ($query->result_array() as $one) {
            $retour[] = $one;
        }
        return $retour;
	}

	function getListActusLast3()
	{
        $query=$this->db->query("SELECT * FROM actusview where year(date) >= year(now()) order by date limit  3 ");
        $retour=array();
        foreach ($query->result_array() as $one) {
            $retour[] = $one;
        }
        return $retour;
	}

	function getActusByid($id)
	{
		$sql = "SELECT * FROM  actualites c where id='%s'";
        $sql=sprintf($sql,$id);
    	$query=$this->db->query($sql);
            $retour=array();
            foreach ($query->result_array() as $one) {
                $retour[] = $one;
            }
            return $retour[0];
	}

	function getCatByid($id)
	{
		$sql = "SELECT * FROM  categories where id='%s'";
        $sql=sprintf($sql,$id);
    	$query=$this->db->query($sql);
            $retour=array();
            foreach ($query->result_array() as $one) {
                $retour[] = $one;
            }
            return $retour[0];
	}

	function checkURL($str,$id,$categorie){
		$sql = "SELECT * FROM  actualites c where id='%s'";
    	$sql=sprintf($sql,$id);
    	$result=$this->db->query($sql)->result_array();
        if($result == null){
            return 1;
        }
    	$val = $categorie.'/'.$str.'/'.$id;
		// echo $val."<br>";echo strlen($val)."<br>";
		// echo $result[0]['url']."<br>";echo strlen( $result[0]['url'])."<br>";
		// echo strcmp($val,$result[0]['url']);
		if( strcmp($val,$result[0]['url']) != 0)
		{
			return 1;
		}
		return 0;
	}

	function getallCat(){
        $query=$this->db->query("SELECT * FROM categories");
        $retour=array();
        foreach ($query->result_array() as $one) {
            $retour[] = $one;
        }
        return $retour;
	}


	function setActus($idcategorie,$titre,$resume,$contenu)
	{
		$categorie = getCatByid($idcategorie);
		$sql= "INSERT into actualites VALUES (null,now(),'%s','%s','%s','%s','%s')";
		$sql=sprintf($sql,$this->db->escape($idcategorie),$this->db->escape($titre),$this->db->escape($resume),$this->db->escape($contenu),toSlug($categorie."/".$titre));
		$this->db->query($sql);
		
	}

	function toSlug($str,$delimiter= '-')
	{
		$slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter)); 
		return $slug;
		
	}
    
    }

?>