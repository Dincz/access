<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Templates_model extends CI_Model
{

    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function fetch()
    {
        $query = $this->db->select('*')->from('theme')->where('deleted_at is null')->order_by('id', 'desc')->get();
        if ($query->num_rows() > 0) {
            $data = $query->result_array();
        } else {
            $data = null;
        }
        return $data;
    }


    public function create($data)
    {
        $this->db->insert('theme', $data);
    }

    public function get($id)
    {
        $this->db->select('*');
        $this->db->from('theme');
        $this->db->where('id', $id);
        $query =  $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row_array();
        }
        return $data;
    }

    public function update($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('theme', $data);
    }

    public function delete($id)
    {
        $date = date('Y-m-d H:s:i');
        $data = [
            'deleted_at' => $date,
        ];
        $this->db->where('id', $id);
        $this->db->update('theme', $data);
    }
}

/* End of file Blog_model.php */
