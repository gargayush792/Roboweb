<?php
class college_m extends CI_Model{
	function insertcollege($data){
            $this->db->insert($data);
        }
	function getcolleges(){
	 $query = $this->db->get('colleges');
	 return $query -> result();
	}
        
}
?>