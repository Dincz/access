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
        $this->load->view('admin/dashboard/index');
    }

   

}

/* End of file Index.php */
