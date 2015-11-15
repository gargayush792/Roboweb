<?php  
class workshops_m extends CI_Model {  
  
    function _construct()  
    {  
        // Call the Model constructor  
        parent::_construct();  
    }  
  
    function getposts()  
        {  
$this->db->order_by("position", "asc");
           $query = $this->db->get('workshops');

		return $query->result();
        }
    function getpost()  
        {  
         
	  $this->db->where('id', $this->uri->segment(3));
	  $query = $this->db->get('workshops');
	  return $query->result();
        }
    function getpics()  
        {  
         
	  $this->db->where('workshop_id', $this->uri->segment(3));
	  $query = $this->db->get('workshops_pictures');
	  return $query->result();
        }
    
    function addpost($data) 
	{
		$this->db->insert('workshops', $data);
		return;
	}
	
    function updatepost($data) 
	{
		$this->db->where('id', $this->uri->segment(3));
		$this->db->update('workshops', $data);
	}
	
    function deletepost()
	{
		$this->db->where('id', $this->uri->segment(3));
		$this->db->delete('workshops');
	}
    function deletepics($imagename)
	{
		$this->db->where('name', $imagename);
		$this->db->delete('workshops_pictures');
	}
  
}  
 