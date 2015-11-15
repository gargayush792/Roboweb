<?php  
class events_m extends CI_Model {  
  
    function _construct()  
    {  
        // Call the Model constructor  
        parent::_construct();  
    }
    function getevent($name){
        $this->db->where('slug',$name);
        $query = $this->db->get('links');
	
	return $query->result();
        
        
    }
    function addevent($name){
    
    	 $this->db->insert('links',$name);

    
    }
    function updateevent($field,$value,$data){
    	$this->db->where($field,$value);
    	$this->db->update('links', $data);
    
    }
     function getmaintabs($eventid,$subtabid,$category = 'events',$visible = '0'){
	    $this->db->where('category',$category);
        $this->db->where('event_id',$eventid);
        $this->db->where('subtab_id',$subtabid);
        $this->db->where('visible',$visible);  //Visible hiding tabs
	    $this->db->order_by('position','ASC');


        $query = $this->db->get('eventpages');
	
	    return $query->result();
        
        
    }
    function getalltabs($eventid, $category = ''){
	if(!empty($category))
	    $this->db->where('category',$category);
        $this->db->where('event_id',$eventid);
        //$this->db->where('visible','0'); //Visible hiding tabs
        $query = $this->db->get('eventpages');
    	return $query->result();
        
        
    }
    function getallevents(){
         $this->db->where('visible','0');
         $this->db->order_by('position','ASC');
         $query = $this->db->get('links');
        
	     return $query->result();
        
        
    }
    function inserttab($data){
        
	    $this->db->insert('eventpages',$data);
        
        
    }
    function updatetab($id,$data){
	    $this->db->where('id',$id);
	    $this->db->update('eventpages',$data);
    }
    function gettab($id){
	    $this->db->where('id',$id);
    	$query = $this->db->get('eventpages');
	    return $query->result();
    }
    function deletetab($field, $value){
	    $this->db->where($field,$value);
	    $this->db->delete('eventpages');
	
    }
    function deleteevent($id){
    	$this->db->where('id',$id);
    	$this->db->delete('links');
    
    }
    function gettabbyname($ev_id,$name){
        $this->db->where('event_id',$ev_id);
	    $this->db->where('menu_name',$name);
	    $query = $this->db->get('eventpages');
	    return $query->result();
    }
 
  
}  