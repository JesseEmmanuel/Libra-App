<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('cookie');
        $this->load->model('Signup_model');
    }

    public function index()
    {
        $this->load->view('templates/head.php');
        $this->load->view('signup.php');
        $this->load->view('templates/footer.php');
    }

    public function validate()
    {
        $this->form_validation->set_rules('uname', 'Username', 'required|is_unique[tblaccounts.accountUserName]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('re_password', 'Confirmation', 'required|matches[password]',
                                            array(
                                                'matches' => 'Does not match with your password.'
                                            ));
        $this->form_validation->set_rules('fname', 'Firstname', 'required');
        $this->form_validation->set_rules('lname', 'Lasttname', 'required');
        $this->form_validation->set_rules('profession', 'Profession', 'required',
                                            array(
                                                'required' => 'Please select an option below.'
                                            ));
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tblaccounts.accountEmail]');
        $this->form_validation->set_rules('contactInfo', 'Contact Info', 'required');
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/head.php');
            $this->load->view('signup.php');
            $this->load->view('templates/footer.php');
        }
        else
        {
            $fullname = $this->input->post('fname').' '.$this->input->post('lname');
            $account_info = array(
                'accountFullName' => $fullname,
                'accountUserName' => $this->input->post('uname'),
                'acountPassWord' => $this->input->post('password'),
                'accountProfession' => $this->input->post('profession'),
                'accountEmail' => $this->input->post('email'),
                'accountContactInfo' => $this->input->post('contactInfo'),
            );
            $this->Signup_model->insert($account_info);
            $this->session->set_userdata('logged_in','1');
            redirect(site_url() .'Welcome');
        }
    }
}