<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('contacts_model');
		$this->load->model('main_model');
		$this->load->model('register_model');
		$this->load->library('email');
		$this->load->library('user_rules');
	}

	function index($data = '')
	{
		if (!isset($_COOKIE['auth']))
		{
			$this->load->view('header_view');
			$this->load->view('menu_unregistered');
		}
		else
		{
			$this->load->view('header_view', $this->main_model->get_user_icon());
			$this->load->view('menu_registered');
		}
		$this->load->view('info_view', $data);
		$this->load->view('contacts_view', $this->register_model->get_captcha());
		$this->load->view('footer_view');
	}

	public function send()
	{
		$this->form_validation->set_rules($this->user_rules->contacts_rules);
		if ($this->form_validation->run() == true)
		{
			if ($this->register_model->check_captcha() === true)
			{
				$data = $this->contacts_model->send_mail();
				$this->session->set_flashdata('info', $data['info']);
				redirect('contacts/index');
			}
			else
			{
				$this->index($this->register_model->check_captcha());
			}
		}
		else
		{
			$this->index();
		}
	}
}