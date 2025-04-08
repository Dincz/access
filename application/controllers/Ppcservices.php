<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Ppcservices extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Blog_model', '', TRUE);
    }
    public function index()
    {
        $data['blogs'] = $this->Blog_model->getBlogforppc();
        $this->load->view('frontend/ppcservice', $data);
    }
}
