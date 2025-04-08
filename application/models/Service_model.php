<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Service_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function fetch()
    {
        $this->db->select('*');
        $this->db->from('service-table');
        $this->db->order_by('id', 'asc');
        $this->db->where('deleted_at is NULL');
        $this->db->limit(4);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
    
    public function getServiceforweb(){
        $query = $this->db->select('*')->from('service-table')->where('deleted_at is NULL')->where('category','web')->order_by('id','desc')->limit(4)->get();
        if($query ->num_rows()>0){
            $data = $query->result_array();
        } else {
            $data = null;
        }
        return $data;
    }
    public function getServiceforseo(){
        $query = $this->db->select('*')->from('service-table')->where('deleted_at is NULL')->where('category','seo')->order_by('id','desc')->limit(4)->get();
        if($query ->num_rows()>0){
            $data = $query->result_array();
        } else {
            $data = null;
        }
        return $data;
    }
    public function getServiceforsmm(){
        $query = $this->db->select('*')->from('service-table')->where('deleted_at is NULL')->where('category','smm')->order_by('id','desc')->limit(4)->get();
        if($query ->num_rows()>0){
            $data = $query->result_array();
        } else {
            $data = null;
        }
        return $data;
    }
    public function getServiceforppc(){
        $query = $this->db->select('*')->from('service-table')->where('deleted_at is NULL')->where('category','ppc')->order_by('id','desc')->limit(4)->get();
        if($query ->num_rows()>0){
            $data = $query->result_array();
        } else {
            $data = null;
        }
        return $data;
    }
    public function getServiceforvideo(){
        $query = $this->db->select('*')->from('service-table')->where('deleted_at is NULL')->where('category','video_creation')->order_by('id','desc')->limit(4)->get();
        if($query ->num_rows()>0){
            $data = $query->result_array();
        } else {
            $data = null;
        }
        return $data;
    }

    public function getservicedata()
    {
        $this->db->select('*');
        $this->db->from('service-table');
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
        $this->db->from('service-table');
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
