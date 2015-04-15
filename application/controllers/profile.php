<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('profile_model');
        $this->load->model('main_model');
        $this->load->model('login_model');
    }

    public function update()
    {
        $this->load->library('user_rules');
        $this->form_validation->set_rules($this->user_rules->profile_rules);
        if ($this->form_validation->run() == TRUE) {
            $this->profile_model->update_profile();
            redirect('profile/show_profile');
        } else {
            $this->show_profile();
        }
    }

    public function show_profile()
    {
        $this->load->view('header_view', $this->main_model->get_user_icon());
        $this->load->view('menu_registered');
        $this->load->view('info_view');
        $this->load->view('profile_view', $this->profile_model->load_profile());
        $this->load->view('footer_view');
    }

    public function show_edit_profile()
    {
        $this->load->view('header_view', $this->main_model->get_user_icon());
        $this->load->view('menu_registered');
        $this->load->view('info_view');
        $this->load->view('edit_profile_view', $this->profile_model->load_profile());
        $this->load->view('footer_view');
    }

    public function remove()
    {    
        $data = $this->profile_model->remove_profile();
        $this->session->set_flashdata('info', $data['info']);
        $this->login_model->logout_user();
        redirect('main');
    }
}