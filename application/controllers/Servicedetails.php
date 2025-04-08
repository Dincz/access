<?php
ini_set('memory_limit', '44M');
defined('BASEPATH') or exit('No direct script access allowed');

class Servicedetails extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('servicedetails_model');
        $this->load->model('blog_model', '', TRUE);
    }

    public function index($seourl)
    {   
        // echo $seourl;exit;
        $data['data'] = [
            'servicedetail' => $this->servicedetails_model->fetch($seourl), 
        ];
        
       if ($data['data']['servicedetail']['category'] == 'dm') { 
        $data['blogs'] = $this->blog_model->fetch(); 
            $this->load->view('frontend/dm-location',$data); 
        }
        else if($data['data']['servicedetail']['category'] == 'smm')  {
             $data['blogs'] = $this->blog_model->getBlogforsmm();
            $this->load->view('frontend/smm-location',$data);
        }
        else if($data['data']['servicedetail']['category'] == 'seo')  {
             $data['blogs'] = $this->blog_model->getBlogforseo();
            $this->load->view('frontend/seo-location',$data);
        }
        else if($data['data']['servicedetail']['category'] == 'web')  {
            $data['blogs'] = $this->blog_model->getBlogforweb();
            $this->load->view('frontend/webservice-location',$data);
            
        }
        // echo "<pre>";
        // print_r($data);
        // exit();
        // $this->load->view('frontend/servicedetails',$data); 
    }
    
}
