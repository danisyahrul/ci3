<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
    public function login($username, $password) {
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );

        $query = $this->db->where($where);
        $query = $this->db->get('tabel_login');

        return $query;
    }
}

/* End of file M_login.php */
