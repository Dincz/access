<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Blog_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function fetch()
    {
        $this->db->select('*');
        $this->db->from('blog-table');
        $this->db->order_by('id', 'DESC');
        $this->db->where('deleted_at is NULL');
        // $this->db->limit(4);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
    
    public function getBlogforweb(){
        $query = $this->db->select('*')->from('blog-table')->where('deleted_at is NULL')->where('category','web')->order_by('id','desc')->limit(4)->get();
        if($query ->num_rows()>0){
            $data = $query->result_array();
        } else {
            $data = null;
        }
        return $data;
    }
    public function getBlogforseo(){
        $query = $this->db->select('*')->from('blog-table')->where('deleted_at is NULL')->where('category','seo')->order_by('id','desc')->limit(4)->get();
        if($query ->num_rows()>0){
            $data = $query->result_array();
        } else {
            $data = null;
        }
        return $data;
    }
    public function getBlogforsmm(){
        $query = $this->db->select('*')->from('blog-table')->where('deleted_at is NULL')->where('category','smm')->order_by('id','desc')->limit(4)->get();
        if($query ->num_rows()>0){
            $data = $query->result_array();
        } else {
            $data = null;
        }
        return $data;
    }
    public function getBlogforppc(){
        $query = $this->db->select('*')->from('blog-table')->where('deleted_at is NULL')->where('category','ppc')->order_by('id','desc')->limit(4)->get();
        if($query ->num_rows()>0){
            $data = $query->result_array();
        } else {
            $data = null;
        }
        return $data;
    }
    public function getBlogforvideo(){
        $query = $this->db->select('*')->from('blog-table')->where('deleted_at is NULL')->where('category','video_creation')->order_by('id','desc')->limit(4)->get();
        if($query ->num_rows()>0){
            $data = $query->result_array();
        } else {
            $data = null;
        }
        return $data;
    }

    public function getblogdata()
    {
        $this->db->select('*');
        $this->db->from('blog-table');
        $this->db->limit(3, 2);
        $this->db->where('deleted_at is NULL');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
    public function getsingledata()
    {
        $this->db->select('*');
        $this->db->from('blog-table');
        $this->db->limit(1, 1);
        $this->db->where('deleted_at is NULL');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
}

/* End of file ModelName.php */
