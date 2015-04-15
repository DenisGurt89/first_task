<?php

class Login_model extends CI_Model {

    public function check_user()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->db->where('username', $username);
        $query = $this->db->get('users');
        $user = $query->row_array();
        if (!empty($user) && $user['password'] == md5($password))
        {
            $cookie = array(
                'name'      =>  'auth',
                'value'     =>   md5($username.time()),
                'expire'    =>  '604800'
            );
            $this->set_token($username, $cookie['value']);
            set_cookie($cookie);
            return TRUE;
        }
        $data['error'] = 'Неверный логин или пароль';
        return $data;
    }

    function set_token($username, $token) {
        $this->db->where('username', $username);
        $data['token'] = $token;
        $this->db->update('users', $data);
    }

    function logout_user() {
        delete_cookie('auth');
        return TRUE;
    }
}
