<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Exhibition extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Events');
    }
    
    public function index()
    {
        // echo 'welcome to exhibition';exit;
        // $this->load->view('frontend/exhibition');
    
    if ($this->input->post()) {
            $Name = $this->input->post('name');
            $Email = $this->input->post('email');
            $Phone = $this->input->post('mobile');
            $companyName =$this->input->post('company');
            $Message = $this->input->post('message');
            
            $data = array(
                'name' => $Name,
                'email' => $Email,
                'mobile' => $Phone,
                'company' => $companyName,
                'message' => $Message,
                );
            

    $to      = 'aishwarya@crezvatic.com';
    $subject = 'Enquiry E-mail';
    $message = $_POST['message']. '\n'  ;
    $headers = 'from ' . $Email;

    $mail= mail($to, $subject, $message, $headers);
    
    if($mail){
        $this->Events->Insert($data);
        echo '<script>alert("Message sent successfuly!");
        window.location.href = "https://crezvatic.com/";
        </script>';
        
        // $this->load->view('');
    }
    else{
        // alert("Message sent failed!");
        echo '<script>alert("Message sent Failed!");</script>';
        $this->load->view('frontend/exhibition');
    }

    }
    else{
          // echo 'welcome to exhibition';exit;
        $this->load->view('frontend/exhibition');
    }
    
}
}


