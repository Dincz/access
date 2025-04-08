<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/login_model');
    }

    public function index()
    {
        if(isset($_GET['token'])){
            if($_GET['token'] == "qI0KtkR7Ld8ucaAlGtlIhiEpI6790xlwd7rk2kqGcWO48C0TKbAIMh1r0bdBCeuf"){
                $name   = 'token';
                $value  = 'true';
                $expire = time() + (10 * 60 * 60); // 10 hours
                $path  = '/';
                $secure = TRUE;
                setcookie($name, $value, $expire, $path, "", $secure, true);
                redirect(base_url()."admin/blog");
            }else{
                delete_cookie('token');
            }
        }
        $this->load->view('admin/login/login');
    }
    public function login()
    {   
            $email = $this->input->post('email');
            $password = md5(sha1($this->input->post('password')));
            $data = [
                'email' => $email,
                'password' => $password,
            ];
            $this->login_model->login($data);
    
        
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('admin/login'));
    }
   
}

/* End of file Login.php */
