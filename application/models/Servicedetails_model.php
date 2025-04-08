<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Servicedetails_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function fetch($seourl)
    {
        $this->db->select('*');
        $this->db->from('service-table');
        $this->db->where('seo-url',$seourl);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row_array();
        }
        return $data;
    }
}

/* End of file ModelName.php */
