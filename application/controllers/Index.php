<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('frontend/index');
    }
    
    public function homepage_uae()
    {
        $this->load->view('frontend/homepage_uae');
    }
    
}

/* End of file Index.php */
