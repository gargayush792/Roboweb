<?php
class login_model extends CI_Model {
	function validate()
	{
		 
		$query = $this->db->get('admin');
		$chk=0;
		
		foreach ($query->result() as $row)
		{
    		if($row->username == $_POST['username'] && $row->password == md5($_POST['password']))
    			$chk = 1;
		}
	return $chk;
	}
}
?>