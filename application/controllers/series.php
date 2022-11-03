<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Series extends CI_Controller {

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
        if($this->session->userdata('logged_in') <> '1')
        {
            redirect(site_url().'auth');
        }
        else
        {
            $this->load->view('series/layout.php');
        }
		
	}
}
