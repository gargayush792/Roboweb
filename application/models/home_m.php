<?php  
class home_m extends CI_Model {  
  
    function _construct()  
    {  
        // Call the Model constructor  
        parent::_construct();  
    }
    function gethpage($slug){
        $this->db->where('slug',$slug);
        $query = $this->db->get('pages');
	
	return $query->result();
        
        
    }
function gethpageid($slug){
        $this->db->where('id',$slug);
        $query = $this->db->get('pages');
	
	return $query->result();
        
        
    }
    
  
    function getallpages(){
       
        $query = $this->db->get('pages');
	return $query->result();
        
        
    }
function getpages($prop, $val){
       $this->db->where($prop , $val);
        $query = $this->db->get('pages');
	return $query->result();
        
        
    }
    function insertpage($data){
        
	 $this->db->insert('pages',$data);
        
        
    }
    function updatepage($id,$data){
	$this->db->where('id',$id);
	$this->db->update('pages',$data);
    }
    function getpage($id){
	$this->db->where('id',$id);
	$query = $this->db->get('pages');
	return $query->result();
    }
    function deletepage($id){
	$this->db->where('id',$id);
	$this->db->delete('pages');
	
    }
  
 
  
}  