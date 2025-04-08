<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
       $this->load->view('frontend/contact');
    }
    
    public function contactmail()
    {
        $config = array(
        'protocol' => 'imap',
        'smtp_host' => 'imap.gmail.com',
        'smtp_port' => 993,  // or 587
        'smtp_user' => 'mwp@myweddingpalette.com',
        //'smtp_pass' => 'ksxt bmjv nwxa cjvd',  // Use your app password if two-factor authentication is enabled
        'smtp_pass'=>'vshd krtf pyra amhh',
        'mailtype'  => 'html', 
        'charset'   => 'utf-8',
        'newline'   => "\r\n",
        'wordwrap' => TRUE,
        'smtp_crypto' => 'tls',  // or 'tls'
        'Return-Path' => 'mwp@myweddingpalette.com'
        );
        $this->load->library('email');
        $this->email->initialize($config);            
        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        $this->email->from('mwp@myweddingpalette.com','My Wedding Palette');
        //$this->email->to($email);
        $this->email->to("pranoti@crezvatic.com");
        $this->email->subject('Exploring Your Dream Wedding Together!');
        $this->email->message("test mail");
        //$this->email->send();
        if($this->email->send()){
            
            echo "mail sent";
        }
        else{
            
                echo 'Error sending email: ' . $mail->ErrorInfo;
        }
    }
    
    public function test(){
        $message="test";
                $config=array('protocol' => 'smtp',
                'smtp_host' => 'smtp.gmail.com',
                'smtp_port' => 587,
                'smtp_user' => 'mwp@myweddingpalette.com',
                'smtp_pass' => 'zbtobteenohkkxwk',
                'mailtype'  => 'html', 
                'charset'   => 'utf-8',
                'newline'=>"\r\n",
                'smtp_crypto'=>'tls',
                'Return-Path' => 'mwp@myweddingpalette.com');
      
                $this->load->library("email");
                $this->email->initialize($config);
                    
                $this->email->set_header("MIME-Version", "1.0; charset=utf-8");
                 
                $this->email->from("mwp@myweddingpalette.com","My Wedding Palette");
                $this->email->to("shankar.crezvatic@gmail.com"); 
                $this->email->subject("test");
                $this->email->message($message);  
                   
                if ($this->email->send()) 
                {
                   $this->emailmerchant($data);
                } 
                else 
                {
                     echo $this->email->print_debugger();
                     exit;
                }
    }
    
    public function test2(){
        $message="test";
                $config=array('protocol' => 'smtp',
                'smtp_host' => 'smtp.gmail.com',
                'smtp_port' => 587,
                'smtp_user' => 'labindiaseo@gmail.com',
                'smtp_pass' => 'qhcuicxzrkgjecjo',
                'mailtype'  => 'html', 
                'charset'   => 'utf-8',
                'newline'=>"\r\n",
                'smtp_crypto'=>'tls',
                'Return-Path' => 'labindiaseo@gmail.com');
      
                $this->load->library("email");
                $this->email->initialize($config);
                    
                $this->email->set_header("MIME-Version", "1.0; charset=utf-8");
                 
                $this->email->from("labindiaseo@gmail.com","test");
                $this->email->to("shankar.crezvatic@gmail.com"); 
                $this->email->subject("test");
                $this->email->message($message);  
                   
                if ($this->email->send()) 
                {
                   $this->emailmerchant($data);
                } 
                else 
                {
                     echo $this->email->print_debugger();
                     exit;
                }
    }
    
}
