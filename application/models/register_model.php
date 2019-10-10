<?php 

/**
 * 
 */
class Register_model extends CI_model
{
	function insert($data)
	{
		$this->db->insert('login', $data);
		return $this->db->insert_id();
	}
	
}

 ?>