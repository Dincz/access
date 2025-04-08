<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Smmlocation extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Blog_model');
    }
    
    public function index()
    {
        $data['blogs'] = $this->Blog_model->getBlogforsmm();
        $this->load->view('frontend/smm-location', $data);
        // $this->load->view('frontend/smm-location');
    }
    
}
