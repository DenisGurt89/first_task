<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts_model extends CI_Model
{
	public function send_mail()
	{
		$data = array();
		$data['name']    = $this->input->post('name');
		$data['subject'] = $this->input->post('subject');
		$data['email']   = $this->input->post('email');
		$data['text']    = $this->input->post('text');

		$this->email->from($data['email']);
		$this->email->to('denis.gurtovenko23@gmail.com');
		$this->email->subject($data['subject']);
		$message = $data['text'];
		$this->email->message($message);
		$this->email->send();
		$data['info'] = 'Спасибо, Ваше сообщение отправлено!';
		return $data;
	}
}