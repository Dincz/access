<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Events extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function Insert($data)
    {
          $this->db->insert('events', $data);
          return $this->db->insert_id();
    }
}
?>