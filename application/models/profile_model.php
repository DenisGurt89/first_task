<?php

class Profile_model extends CI_Model
{
    public function load_profile()
    {
        $this->db->from('users');
        $this->db->where('users.token', $this->input->cookie('auth'));
        $query = $this->db->get();
        $user_info = $query->row_array();
        return $user_info;
    }

    public function update_profile()
    {
        $this->load->library('upload');
        $this->upload->do_upload();
        $file_info = $this->upload->data();
        $data = array();
        $data['familyname']     = $this->input->post('familyname');
        $data['name']           = $this->input->post('name');
        $data['email']          = $this->input->post('email');
        $data['birthday']       = $this->input->post('birthday');
        $data['phone']          = $this->input->post('phone');
        if($file_info['file_name'] == '') {
            unset($data['avatar']);
        } else {
            $data['avatar']     = $file_info['file_name'];
        }
        $this->db->where('users.token', $this->input->cookie('auth'));
        $this->db->update('users', $data);
    }

    public function remove_profile()
    {
        $this->db->where('token', $this->input->cookie('auth'));
        $this->db->delete('users');
        $data['info'] = 'Ваш профиль удален!';
        return $data;
    }

    public $profile_rules = array();
}