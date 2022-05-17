
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
	

    class AdminService extends CI_Model{
        
        public function testLogin($user,$mdp){
    
            $sql = "select * from admin  where user='%s' and password='%s'";
            $sql=sprintf($sql,$user,$mdp);
            $query = $this->db->query($sql);
            foreach ($query->result_array() as $key) {
                return $key;
            }
            return null;
    
        }

    }
    ?>