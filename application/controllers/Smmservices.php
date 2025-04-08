<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Smmservices extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Blog_model', '', TRUE);
    }
    public function index()
    {
        $data['blogs'] = $this->Blog_model->getBlogforsmm();
        $this->load->view('frontend/smmservice', $data);
    }
}
