<?php

class user_m extends CI_Model{

	

        function insertuser($data){

            $this->db->insert('users',$data);

        }

        function validate($field,$value){

            $this->db->where($field, $value);

            $query = $this->db->get('users');

            if($query->num_rows == 1){

                return 1; //If value is found return true

            }

        }

        function updateuser($field, $value,$data){

            $this->db->where($field,$value);

            $this->db->update('users',$data);

        }

        function getuser($field ,$value){
		
            $this->db->where($field,$value);

            $query = $this->db->get('users');

            return $query->result();


        }

}