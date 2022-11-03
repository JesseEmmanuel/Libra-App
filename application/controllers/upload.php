<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('cookie');
        //$this->load->model('Auth_model');
    }

    public function index()
    {
        if($this->session->userdata('logged_in') <> '1')
        {
            redirect(site_url().'auth');
        }
        else
        {
            $this->load->view('upload/layout.php');
        }
    }

    public function addbook($userid)
    {

    }

    public function addform()
    {
        $this->load->view('upload/add-book.php');
    }
}