<?php  
class tutorials_m extends CI_Model {  
  
    function _construct()  
    {  
        // Call the Model constructor  
        parent::_construct();  
    }
    function gettutorial($name){
        $this->db->where('menu_name',$name);
        $query = $this->db->get('tutorialpages');
	
	return $query->result();
        
        
    }
     function getmaintabs($category,$subtabid,$eventid){
	$this->db->where('category',$category);
        $this->db->where('tutorial_name',$eventid);
        $this->db->where('subtab_id',$subtabid);
$this->db->where('visible','0');

	$this->db->order_by('position','ASC');


        $query = $this->db->get('tutorialpages');
	
	return $query->result();
        
        
    }
    function getalltabs($name, $cat){
	//all tabs of a particular tutorial
        $this->db->where('category',$cat);
        $this->db->where('tutorial_name',$name);
        
        $query = $this->db->get('tutorialpages');
	return $query->result();
        
        
    }
    
    
    function gettutorials($cat){
	//tutorials of a particular category
       $this->db->where('slug',$cat);
        $query = $this->db->get('categories');
	
	return $query->result();
        
        
    }
    function getalltutorials(){
      
        $query = $this->db->get('tutorialpages');
	return $query->result();
        
        
    }
    function getallcats(){
      $this->db->order_by('position','ASC');
        $query = $this->db->get('categories');

	return $query->result();
        
        
    }
    function inserttab($data){
        
	 $this->db->insert('tutorialpages',$data);
        
        
    }
    function insertcat($data){
        
	 $this->db->insert('categories',$data);
        
        
    }
    function inserttut($data){
        
	 $this->db->insert('tutorials',$data);
        
        
    }
    function updatetab($prop = 'id',$val,$data){
	$this->db->where($prop,$val);
	$this->db->update('tutorialpages',$data);
    }
    function updatecat($cat,$data){
	$this->db->where('slug',$cat);
	$this->db->update('categories',$data);
    }
    function gettab($id){
	$this->db->where('id',$id);
	$query = $this->db->get('tutorialpages');
	return $query->result();
    }
    function deletetab($prop = 'id', $val){
	$this->db->where($prop, $val);
	$this->db->delete('tutorialpages');
	
    }
    function deletecategory($prop, $val){
	$this->db->where($prop, $val);
	$this->db->delete('categories');
	
    }
    function deletetutorial($prop, $val){
	$this->db->where($prop, $val);
	$this->db->delete('tutorials');
	
    }
    function getcat($cat){
	$this->db->where('slug',$cat);
	$query = $this->db->get('categories');
	return $query->result();
    }
function getcatbyid($cat){
	$this->db->where('id',$cat);
	$query = $this->db->get('categories');
	return $query->result();
    }
    function gettut($prop, $val){
	$this->db->where($prop, $val);
	$query = $this->db->get('tutorials');
	return $query->result();
    }
    function updatetut($prop, $val,$data){
	$this->db->where($prop, $val);
	$this->db->update('tutorials',$data);
	
    }

 function gettabbyname($tut_id,$name){
        $this->db->where('tutorial_id',$tut_id);
	$this->db->where('menu_name',$name);
        

	$query = $this->db->get('tutorialpages');
	return $query->result();
    }
}
 
  
