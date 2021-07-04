<?php 
defined('BASEPATH') OR exit('No diect script access allowed');

class Login extends MX_Controller
{
    
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->view("V_login");
    }

    function proces_login(){
        var_dump($this->input->post(), $this->db->get('users'));
        die;
    }
}

?>