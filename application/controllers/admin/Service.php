<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/service_model'); 
    }

    public function index()
    {
        $data['data'] = [
            'service' => $this->service_model->fetch(),
        ];
        $this->load->view('admin/service/service', $data);
    }

    public function create()
    {
        $banners = [];
        $config['upload_path']          = './uploads/service/';
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000;
        $config['max_width']            = 1536;
        $config['max_height']           = 1024;
        $config['file_name']            = md5(date('Y-m-d H:s:i'));

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors().' required - max-width:1536 & max-height:1024 or image above 1MB ');
            $this->session->set_flashdata($error);
            redirect(base_url('admin/service'));
        } else {
            $image = $this->upload->data();
            $data = [
                'service-image' => $image['file_name'],
                'service-heading' => $this->input->post('service_heading'),
                'short-description' => str_replace("'", "''", $this->input->post('short_description')),
                'description' => str_replace("'", "''", $this->input->post('description')),
                'seo-url' => $this->input->post('seo_url'),
                'meta-title' => $this->input->post('meta_title'),
                'meta-description' => $this->input->post('meta_description'),
                'meta-keywords' => $this->input->post('meta_keyword'),
                'alt-name' => $this->input->post('alt_name'),
                'category'=> $this->input->post('category')
            ];
            // var_dump($data);
            // exit;
            $this->service_model->create($data);
            $this->session->set_flashdata('success', 'Service added');
            redirect(base_url('admin/service'));
        }
    }

    // public function get()
    // {
    //     $id = $this->input->post('data');
    //     $data = $this->service_model->get($id);
    //     var_dump($data);
    // }

    public function edit($id)
    {
        $data['data'] = [
            'service' => $this->service_model->get($id),
        ];
        $this->load->view('admin/service/edit', $data);
    }

    public function update()
    {
        if (($_FILES['image']['size'] > 0)) {
            $config['upload_path']          = './uploads/service/';
            $config['allowed_types']        = '*';
            $config['max_size']             = 10000;
            $config['max_width']            = 1536;
            $config['max_height']           = 1024;
            $config['file_name']            = md5(date('Y-m-d H:s:i'));

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors().' required - max-width:1536 & max-height:1024 or image above 1MB ');
                $this->session->set_flashdata($error);
                redirect(base_url('admin/service'));
            } else {
                $image = $this->upload->data();
                $data = [
                    'id' => $this->input->post('id'),
                    'service-image' => $image['file_name'],
                    'service-heading' => $this->input->post('service_heading'),
                    'short-description' => str_replace("'", "''", $this->input->post('short_description')),
                    // 'description' => str_replace("'", "''", $this->input->post('description')),
                    'description' =>  $this->input->post('description'),
                    'seo-url' => $this->input->post('seo_url'),
                    'meta-title' => $this->input->post('meta_title'),
                    'meta-description' => $this->input->post('meta_description'),
                    'meta-keywords' => $this->input->post('meta_keyword'),
                    'alt-name' => $this->input->post('alt_name'),
                    'category'=> $this->input->post('category')
                ];
            }
        } else {
            echo '0';
            $data = [
                'id' => $this->input->post('id'),
                'service-heading' => $this->input->post('service_heading'),
                'short-description' => str_replace("'", "''", $this->input->post('short_description')),
                // 'description' => str_replace("'", "''", $this->input->post('description')),
                'description' =>  $this->input->post('description'),
                'seo-url' => $this->input->post('seo_url'),
                'meta-title' => $this->input->post('meta_title'),
                'meta-description' => $this->input->post('meta_description'),
                'meta-keywords' => $this->input->post('meta_keyword'),
                'alt-name' => $this->input->post('alt_name'),
                'category'=> $this->input->post('category')
            ];
        }
        $this->service_model->update($data);
        $this->session->set_flashdata('success', 'Service Updated');
        redirect(base_url('admin/service'));
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $this->service_model->delete($id);
        $this->session->set_flashdata('success', 'Service Deleted');
        redirect(base_url('admin/service'));
    }
}

/* End of file Service.php */
