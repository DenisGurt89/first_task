<?php

class Register_model extends CI_Model {

    public function add_user()
    {
        $data = array();
        $data['familyname']     = $this->input->post('familyname');
        $data['name']           = $this->input->post('name');
        $data['username']       = $this->input->post('username');
        $data['password']       = md5($this->input->post('password'));
        $data['email']          = $this->input->post('email');
        $data['birthday']       = $this->input->post('birthday');
        $data['phone']          = $this->input->post('phone');
        $this->db->insert('users',$data);      
        $data['info'] = 'Регистрация завершена успешно!';
        return $data;   
    }

    public function get_captcha()
    {
        $this->load->helper('captcha');
        $this->load->helper('string');
        $captcha = random_string('alnum', 7);
        $vals = array(
            'word' => $captcha,
            'img_path' => './captcha/',
            'img_url' => base_url().'/captcha/',
            'font_path' => './system/fonts/texb.ttf',
            'img_width' => 220,
            'img_height' => 30,
            'expiration' => 2000
        );

        $data['captcha'] = create_captcha($vals);
        $this->session->set_flashdata('captcha', $captcha);
        return $data;
    }

    public function check_captcha()
    {
        if ($this->input->post('captcha') != $this->session->flashdata('captcha'))
        {
            $data['error'] = 'Символы с картинки введены не верно!';
            return $data;
        }
        return true;
    }
}