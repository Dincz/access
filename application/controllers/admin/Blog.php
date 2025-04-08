<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/blog_model');
        $this->load->library('session');
    }

    public function index()
    {
        $data['data'] = [
            'blog' => $this->blog_model->fetch(),
        ];
        $this->load->view('admin/blog/blog', $data);
    }

    public function create()
    {
        $banners = [];
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = '*';
        // $config['max_size']             = 10000;
        // $config['max_width']            = 1536;
        // $config['max_height']           = 1024;
        $config['file_name']            = md5(date('Y-m-d H:s:i'));

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors().' required - max-width:1536 & max-height:1024 or image above 1MB ');
            $this->session->set_flashdata($error);
            redirect(base_url('admin/blog'));
        } else {
            $image = $this->upload->data();
            
            $data = [
                'blog-image' => $image['file_name'],
                'blog-heading' => $this->input->post('blog_heading'),
                'short-description' => str_replace("'", "''", $this->input->post('short_description')),
                'description' => str_replace("'", "''", $this->input->post('description')),
                'seo-url' => $this->input->post('seo_url'),
                'meta-title' => $this->input->post('meta_title'),
                'meta-description' => $this->input->post('meta_description'),
                'meta-keywords' => $this->input->post('meta_keyword'),
                'alt-name' => $this->input->post('alt_name'),
                'category'=> $this->input->post('category'),
                'og_tags'=> $this->input->post('og_tags'),
                'schema_code'=> $this->input->post('schema_code')
            ];

            $this->blog_model->create($data);
            $this->session->set_flashdata('success', 'Blog added');
            redirect(base_url('admin/blog'));
        }
    }

    // public function get()
    // {
    //     $id = $this->input->post('data');
    //     $data = $this->blog_model->get($id);
    //     var_dump($data);
    // }

    public function edit($id)
    {
        $data['data'] = [
            'blog' => $this->blog_model->get($id),
        ];
        $this->load->view('admin/blog/edit', $data);
    }

    public function update()
    {
        if (($_FILES['image']['size'] > 0)) {
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = '*';
            $config['max_size']             = 10000;
            $config['max_width']            = 2000;
            $config['max_height']           = 1093;
            $config['file_name']            = md5(date('Y-m-d H:s:i'));

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors().' required - max-width:1536 & max-height:1024 or image above 1MB ');
                print_r($error);exit;
                $this->session->set_flashdata($error);
                redirect(base_url('admin/blog'));
            } else {
                $image = $this->upload->data();
                $data = [
                    'id' => $this->input->post('id'),
                    'blog-image' => $image['file_name'],
                    'blog-heading' => $this->input->post('blog_heading'),
                    'short-description' => str_replace("'", "''", $this->input->post('short_description')),
                    // 'description' => str_replace("'", "''", $this->input->post('description')),
                    'description' =>  $this->input->post('description'),
                    'seo-url' => $this->input->post('seo_url'),
                    'meta-title' => $this->input->post('meta_title'),
                    'meta-description' => $this->input->post('meta_description'),
                    'meta-keywords' => $this->input->post('meta_keyword'),
                    'alt-name' => $this->input->post('alt_name'),
                    'category'=> $this->input->post('category'),
                    'og_tags'=> $this->input->post('og_tags'),
                'schema_code'=> $this->input->post('schema_code')
                ];
            }
        } else {
            echo '0';
            $data = [
                'id' => $this->input->post('id'),
                'blog-heading' => $this->input->post('blog_heading'),
                'short-description' => str_replace("'", "''", $this->input->post('short_description')),
                // 'description' => str_replace("'", "''", $this->input->post('description')),
                'description' =>  $this->input->post('description'),
                'seo-url' => $this->input->post('seo_url'),
                'meta-title' => $this->input->post('meta_title'),
                'meta-description' => $this->input->post('meta_description'),
                'meta-keywords' => $this->input->post('meta_keyword'),
                'alt-name' => $this->input->post('alt_name'),
                'category'=> $this->input->post('category'),
                'og_tags'=> $this->input->post('og_tags'),
                'schema_code'=> $this->input->post('schema_code')
            ];
        }
        $this->blog_model->update($data);
        $this->session->set_flashdata('success', 'Blog Updated');
        redirect(base_url('admin/blog'));
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $this->blog_model->delete($id);
        $this->session->set_flashdata('success', 'Blog Deleted');
        redirect(base_url('admin/blog'));
    }
}

/* End of file Blog.php */
