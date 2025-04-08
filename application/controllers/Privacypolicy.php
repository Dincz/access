<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Privacypolicy extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('blog_model');
    }

    public function index()
    {
        $this->load->view('frontend/privacypolicy');
    }
}