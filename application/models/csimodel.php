<?php
class Csimodel extends CI_Model
{
	function __construct()
    {
        parent::__construct();
        
    }
	function register($data)
	{
		var_dump($data);
		$this->db->insert('register',$data);
	}

	
} 
?>