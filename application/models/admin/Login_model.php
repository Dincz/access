<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{

    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }


    public function login($data)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email', $data['email']);
        $query =  $this->db->get();
        
        if ($query->num_rows() > 0) {
            $row = $query->row_array();
            if ($data['password'] == $row['password']) {

                $array = array(
                    'adminLogin' => true,
                    'adminName' => $row['name'],
                    'adminEmail' => $row['email']
                );
                $this->session->set_userdata($array);
                redirect(base_url() . 'admin/blog');
            } else {
                // echo 'password not match';
                $this->session->flashdata('error', 'password not match');
                redirect(base_url() . 'admin/login');
            }
        } else {
            // echo 'wrong credentials';
            $this->session->flashdata('error', 'wrong credentials');
            redirect(base_url() . 'admin/login');
        }
    }
}

/* End of file Login_model.php */
