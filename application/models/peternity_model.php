<?php

class peternity_model extends CI_model
{
    
	private $table = "students";
	private $table2 = "course";
	
	public function create($data)
	{
		$this->db->insert($this->table, $data);
		return TRUE;	
	}
	
	
}
?>

