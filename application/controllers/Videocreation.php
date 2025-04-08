<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Videocreation extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Blog_model', '', TRUE);
    }
    public function index()
    {
        $data['blogs'] = $this->Blog_model->getBlogforvideo();
        $this->load->view('frontend/videocreation', $data);
    }
}
