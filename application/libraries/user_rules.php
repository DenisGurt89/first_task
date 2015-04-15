<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_rules {

    public $registration_rules = array(
        array (
            'field' => 'familyname',
            'label' => 'Фамилия',
            'rules' => 'trim|required|max_length[50]|xss_clean|regex_match[/^[a-zA-Zа-яА-Я]+$/u]'
        ),
        array (
            'field' => 'name',
            'label' => 'Имя',
            'rules' => 'trim|required|max_length[50]|xss_clean|regex_match[/^[a-zA-Zа-яА-Я]+$/u]'
        ),
        array (
            'field' => 'username',
            'label' => 'Логин',
            'rules' => 'trim|required|is_unique[users.username]|max_length[50]|xss_clean|alpha'
        ),
        array (
            'field' => 'password',
            'label' => 'Пароль',
            'rules' => 'required|min_length[6]|max_length[16]'
        ),
        array (
            'field' => 'password-confirm',
            'label' => 'Подтверждение пароля',
            'rules' => 'required|matches[password]|min_length[6]|max_length[16]|xss_clean'
        ),
        array (
            'field' => 'email',
            'label' => 'E-mail',
            'rules' => 'trim|required|valid_email|max_length[50]'
        ),
        array (
            'field' => 'birthday',
            'label' => 'Дата рождения',
            'rules' => 'max_length[10]'
        ),
        array (
            'field' => 'phone',
            'label' => 'Телефон',
            'rules' => 'required||max_length[11]|regex_match[/^[0-9]{3}-[0-9]{7}+$/]'
        )
    );

    public $profile_rules = array(
        array (
            'field' => 'familyname',
            'label' => 'Фамилия',
            'rules' => 'trim|required|max_length[50]|xss_clean|regex_match[/^[a-zA-Zа-яА-Я]+$/u]'
        ),
        array (
            'field' => 'name',
            'label' => 'Имя',
            'rules' => 'trim|required|max_length[50]|xss_clean|regex_match[/^[a-zA-Zа-яА-Я]+$/u]'
        ),
        array (
            'field' => 'email',
            'label' => 'E-mail',
            'rules' => 'trim|required|valid_email|max_length[50]'
        ),
        array (
            'field' => 'birthday',
            'label' => 'Дата рождения',
            'rules' => 'max_length[10]'
        ),
        array (
            'field' => 'phone',
            'label' => 'Телефон',
            'rules' => 'required||max_length[11]|regex_match[/^[0-9]{3}-[0-9]{7}+$/]'
        )
    );

    public $contacts_rules = array(
        array (
            'field' => 'name',
            'label' => 'Имя',
            'rules' => 'trim|required|max_length[50]|xss_clean|regex_match[/^[a-zA-Zа-яА-Я]+$/u]'
        ),
        array (
            'field' => 'subject',
            'label' => 'Имя',
            'rules' => 'trim|required|max_length[50]|xss_clean'
        ),
        array (
            'field' => 'email',
            'label' => 'E-mail',
            'rules' => 'trim|required|valid_email|max_length[50]'
        ),
        array (
            'field' => 'text',
            'label' => 'Инфо',
            'rules' => 'required|xss_clean'
        )
    );
}
