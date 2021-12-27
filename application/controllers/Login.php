<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    function index() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_authenticate');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('login');
        } else {
            redirect('Stock/stock_list');
        }
    }

    function authenticate() {
        $data = array();
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = $this->User_model->authenticate_user($username, $password);

        if (empty($data)) {
            $this->form_validation->set_message('authenticate', 'Invalid Username or Password');
            return FALSE;
        }

        $userdata = array(
            "user_id" => $data['id'],
            "user_email" => $data['email'],
            "user_active" => $data['is_active']
        );

        $this->session->set_userdata('loggedin', $userdata);
        return TRUE;
    }

    function logout() {
        $this->session->unset_userdata('loggedin');
        session_destroy();
        redirect('Login');
    }

}
