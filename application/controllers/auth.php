<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('cookie');
        $this->load->model('Auth_model');
    }
    
    public function index()
    {
        if($this->session->userdata('logged_in') <> '1')
        {
            $this->load->view('signin');
        }
        else
        {
            redirect(site_url().'library');
        }
        
    }

    public function validate()
    {
        $this->form_validation->set_rules('uname', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run() == FALSE)
        {
            redirect(site_url(). 'auth');
        }
        else
        {
            $data = [
                'accountUserName' => $this->input->post('uname'),
                'acountPassWord' => $this->input->post('password')
            ];
            $result = $this->Auth_model->authenticate($data);
            if($result != FALSE)
            {
                $this->session->set_userdata('logged_in', '1');
                $this->session->set_userdata('userid', $result->accountID);
                $this->session->set_userdata('Username', $data['accountUserName']);
                $this->session->set_userdata('Fullname', $result->accountFullName);
                $this->session->set_userdata('Profession', $result->accountProfession);
                $this->session->set_userdata('Email', $result->accountEmail);
                $this->session->set_userdata('Contact', $result->accountContactInfo);
                redirect(site_url(). 'library');
            }
        }
    }

    public function logout()
    {
        $this->session->userdata('logged_in','0');
        $this->session->sess_destroy();
        redirect(site_url().'auth');
    }
}


