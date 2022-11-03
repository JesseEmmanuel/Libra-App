<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('cookie');
    }
    
    public function index()
    {
        $this->load->view('test');
    }

   
}


