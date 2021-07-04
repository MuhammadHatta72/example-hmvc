<?php 
class Users extends MX_Controller
{
    
    function __construct()
    {
        parent::__construct();

        //Get Model
        $this->load->model("M_user");
    }

    function index()
    {
        //Data Penting
        $data['namaModul'] = 'users';
        $data['namaView']  = 'V_show';

        //Data Opsional
        $data['title']     = 'index | users';
        $data['users']     = $this->M_user->get_user();

        //cara lama
        // $this->load->view('V_show', $data);

        //cara baru
        echo Modules::run('template/templateCore', $data);
    }

    function add_user(){
        $this->load->view('V_add');
    }

    function add_user_action(){
        $nama     = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->M_user->add_user($nama, $username, $password);

        redirect('users');
    }
}
?>