<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author asus-pc
 */
class Login extends CI_Controller {

    // data for view, we do this so we can set value in __construct
    // and pass to other functions if needed
    var $data = array();

    function __construct() {
        // Call the Controller constructor
        parent::__construct();
        $this->load->model('usuario_model');
    }

    public function index() {
        $username = $this->input->post('login');
        $password = $this->input->post('password');

        if ($user = $this->usuario_model->get_by_username($username)) {
            if ($this->usuario_model->check_password($password, $user['password'])) {
                $this->usuario_model->allow_pass($user);
                redirect('admin');
            } else {
                $this->data['login_error'] = 'Invalid username or password';
            }
        } else {
            $this->data['login_error'] = 'Username not found';
        }

        $this->load->view('login/v_login', $this->data);
    }

    public function register() {

        filter_input(INPUT_SERVER, 'SERVER_NAME', FILTER_SANITIZE_STRING);
        $user = array(
            'nombre' => filter_input(INPUT_POST, 'nombre'),
            'apellido' => filter_input(INPUT_POST, 'apellido'),
            'login' => $this->input->post('login'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
                
        );
        
        $name = filter_input(INPUT_POST, "email");
        
        $nobre = $this->input->post('nombre');
        if ($this->usuario_model->save($user)) {            
        $this->load->view('plantillas/plantilla', $this->data);
    }
    }

    // route /logout -- check settings in /application/config/routes.php
    public function logout() {
        $this->m_user->remove_pass();
        $this->data['login_success'] = 'You have been logged out. Thank you.';
        $this->load->view('front-end/home_view', $this->data);
    }

    // noaccess to show no access message
    public function noaccess() {
        $this->data['login_error'] = 'You do not have access or your login has expired.';
        $this->load->view('front-end/home_view', $this->data);
    }

}
