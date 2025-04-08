<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('service_model');
    }

    public function index()
    {
        $data['data'] = [
            'services' => $this->service_model->fetch(),
        ];
        $this->load->view('frontend/service',$data);
    }
}
