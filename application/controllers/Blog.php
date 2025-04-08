<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('blog_model');
    }

    public function index()
    {
        $data['data'] = [
            'blogs' => $this->blog_model->fetch(),
        ];
        $this->load->view('frontend/blog',$data);
    }
}
