<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function log_in()
	{
		if($this->login_model->check_user() === TRUE)
		{
			redirect('profile/show_profile');
		}
		else
		{
			$this->show_auth($this->login_model->check_user());
		}
	}

	function logout()
	{
		if($this->login_model->logout_user() == TRUE)
		{
			$this->show_auth();
		}
	}

	public function show_auth($data = '')
	{
		$this->load->view('header_view');
		$this->load->view('menu_unregistered');
		$this->load->view('info_view', $data);
		$this->load->view('login_view');
		$this->load->view('footer_view');
	}
}