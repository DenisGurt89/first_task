<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('main_model');
	}

	public function index($data = "")
	{
		if (!isset($_COOKIE['auth']))
		{
			$this->load->view('header_view');
			$this->load->view('menu_unregistered');
			$this->load->view('info_view', $data);
			$this->load->view('rezume_view');
		}
		else
		{
			if ($this->main_model->check_token() == false)
			{
				$this->load->view('header_view');
				$this->load->view('menu_unregistered');
				$this->load->view('info_view', $data);
				$this->load->view('rezume_view');
			}
			else
			{
				$this->load->view('header_view', $this->main_model->get_user_icon());
				$this->load->view('menu_registered');
				$this->load->view('info_view', $data);
				$this->load->view('rezume_view');
			}
		}
		
		$this->load->view('footer_view');
	}
}