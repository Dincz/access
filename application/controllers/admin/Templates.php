<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Templates extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/templates_model');
    }

    public function index()
    {
        $data['data'] = [
            'templates' => $this->templates_model->fetch(),
        ];
        $this->load->view('admin/templates/view', $data);
    }

    public function create()
    {
        $banners = [];
        $config['upload_path']          = './uploads/templates';
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000;
        $config['max_width']            = 1536;
        $config['max_height']           = 1024;
        $config['file_name']            = md5(date('Y-m-d H:s:i'));

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error);
        } else {
            $image = $this->upload->data();
            $data = [
                'image' => $image['file_name'],
                'alt_name' => $this->input->post('alt_name'),
                'title' => $this->input->post('title'),
                'description' => str_replace("'", "''", $this->input->post('description')),
                'theme_url' => $this->input->post('templates_url'),
                'seo_url' => $this->input->post('seo_url'),
                'meta_title' => $this->input->post('meta_title'),
                'meta_description' => $this->input->post('meta_description'),
                'meta_keywords' => $this->input->post('meta_keyword'),
            ];
            $this->templates_model->create($data);
            $this->session->set_flashdata('success', 'Templates added');
            redirect(base_url('admin/templates'));
        }
    }

    public function edit($id)
    {
        $data = [
            'templates' => $this->templates_model->get($id),
        ];
        $this->load->view('admin/templates/edit', $data);
    }

    public function update()
    {
        if (($_FILES['image']['size'] > 0)) {
            $config['upload_path']          = './uploads/templates';
            $config['allowed_types']        = '*';
            $config['max_size']             = 10000;
            $config['max_width']            = 1536;
            $config['max_height']           = 1024;
            $config['file_name']            = md5(date('Y-m-d H:s:i'));

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $error);
            } else {
                $image = $this->upload->data();
                $data = [
                    'id' => $this->input->post('id'),
                    'image' => $image['file_name'],
                    'alt_name' => $this->input->post('alt_name'),
                    'title' => $this->input->post('title'),
                    'description' => str_replace("'", "''", $this->input->post('description')),
                    'theme_url' => $this->input->post('templates_url'),
                    'seo_url' => $this->input->post('seo_url'),
                    'meta_title' => $this->input->post('meta_title'),
                    'meta_description' => $this->input->post('meta_description'),
                    'meta_keywords' => $this->input->post('meta_keyword'),
                ];
            }
        } else {
            echo '0';
            $data = [
                'id' => $this->input->post('id'),
                'alt_name' => $this->input->post('alt_name'),
                'title' => $this->input->post('title'),
                'description' => str_replace("'", "''", $this->input->post('description')),
                'theme_url' => $this->input->post('templates_url'),
                'seo_url' => $this->input->post('seo_url'),
                'meta_title' => $this->input->post('meta_title'),
                'meta_description' => $this->input->post('meta_description'),
                'meta_keywords' => $this->input->post('meta_keyword'),
            ];
        }
        $this->templates_model->update($data);
        $this->session->set_flashdata('success', 'Template Updated');
        redirect(base_url('admin/templates'));
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $this->templates_model->delete($id);
        $this->session->set_flashdata('success', 'Templates Deleted');
        redirect(base_url('admin/templates'));
    }
}

/* End of file Blog.php */
