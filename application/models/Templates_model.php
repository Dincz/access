<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Templates_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function fetchAll()
    {
        $query =  $this->db->select('*')->from('theme')->order_by('id', 'asc')->where('deleted_at is null')->get();
        if ($query->num_rows() > 0) {
            $data = $query->result_array();
        } else {
            $data = null;
        }
        return $data;
    }
    public function getData($theme)
    {
        $data = $this->db->select('*')->from('theme')->where('seo_url',  $theme)->get()->row_array();
        return $data;
    }
    public function recentData()
    {
        $query =  $this->db->select('*')->from('theme')->order_by('id', 'asc')->where('deleted_at is null')->limit(4)->get();
        if ($query->num_rows() > 0) {
            $data = $query->result_array();
        } else {
            $data = null;
        }
        return $data;
    }
}
/* End of file ModelName.php */
