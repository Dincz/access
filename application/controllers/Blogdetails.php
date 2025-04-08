<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blogdetails extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('blogdetails_model');
    }

    public function index($seourl)
    {   
        // echo $seourl;exit;
        $data['data'] = [
            'blogdetail' => $this->blogdetails_model->fetch($seourl),
        ];
        $this->load->view('frontend/blogdetails',$data);
    }
}
