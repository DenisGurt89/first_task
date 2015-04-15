<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->library('user_rules');
        $this->load->model('register_model');
    }

    public function register_user()
    {
        $this->form_validation->set_rules($this->user_rules->registration_rules);
        if ($this->form_validation->run() == true)
        {
            if ($this->register_model->check_captcha() === true)
            {
                $data = $this->register_model->add_user();
                $this->session->set_flashdata('info', $data['info']);
                redirect('login/show_auth');
            }
            else
            {
                $this->show_register_form($this->register_model->check_captcha());
            }    
        }
        else
        {
            $data['error'] = form_error("username");
            $this->show_register_form($data);
        }
    }

    public function show_register_form($data = "")
    {
        $this->load->view('header_view');
        $this->load->view('menu_unregistered');
        $this->load->view('info_view', $data);
        $this->load->view('register_view', $this->register_model->get_captcha());
        $this->load->view('footer_view');
    }
}
