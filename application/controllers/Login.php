<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_login');
    }
    
    public function index()
    {
        $this->load->view('view_login');
    }

    public function do_login()
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('view_login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $login = $this->m_login->login($username, $password);

            if($login->num_rows() > 0) {
                $data_login = $login->result_array();

                $this->session->set_userdata('logged_in', true);
                $this->session->set_userdata('id_login', $data_login[0]['id_login']);
                $this->session->set_userdata('nama_lengkap', $data_login[0]['nama_lengkap']);
                $this->session->set_userdata('username', $data_login[0]['username']);
                $this->session->set_userdata('password', $data_login[0]['password']);
                $this->session->set_userdata('level', $data_login[0]['level']);

                redirect('blog'); // admin gantinen jeneng e controller mu 
            } else {
                redirect('login/index');
            }
        }
    }

    public function do_logout()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('id_login');
        $this->session->unset_userdata('nama_lengkap');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('level');

        redirect('login/index');
    }
}

/* End of file Login.php */
