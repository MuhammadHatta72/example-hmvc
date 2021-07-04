<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model {
	function __construct(){
		parent::__construct();
	}
    function get_user(){
        return $this->db->get('users')->result(); 
    }
	function add_user($getName, $getUsername, $getPassword){
		$data = array(
            'nama' => $getName,
            'username' => $getUsername,
            'password' => $getPassword
        );

        return $this->db->insert('users', $data);
	}
		
}
?>