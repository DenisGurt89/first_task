<?php

class Main_model extends CI_Model
{
    function __construct()
    {
    	parent::__construct();
    }

    public function check_token()
    {
        $token = $_COOKIE['auth'];
        $this->db->where('token', $token);
        $query = $this->db->get('users');
        $user = $query->row_array();
        if(empty($user)) {
            return false;
        } else {
            return true;
        }
    }

    public function get_user_icon() {
        $this->db->select('familyname, name, avatar, token');
        $this->db->from('users');
        $this->db->where('users.token', $this->input->cookie('auth'));
        $query = $this->db->get();
        $user = $query->row_array();
        $user['familyname'] = mb_substr($user['familyname'], 0, 1).'.';
        if($user['avatar'] === "") {
            $user['avatar'] = base_url('uploads').'/avatar.png';
        } else {
            $user['avatar'] = base_url('uploads').'/'.$user['avatar'];
        }
        return $user;
    }
}