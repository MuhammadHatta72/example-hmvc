<?php
defined("BASEPATH") OR exit('No direct script access allowed');

class Template extends MX_Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->load->view('V_template');
    }

    function templateCore($data){
        // var_dump($data);
        // die;
        $this->load->view('V_template', $data);
    }
}

?>