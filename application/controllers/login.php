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

        
        if($_FILES['foto']['name'] !=''){
            $respuesta = $this->upload_image();
            print_r($respuesta);
            if(!is_array($respuesta)){
                $this->usuario_model->add_user($respuesta);
                $mensaje = "El usuario de registro correctamente";
            }
            
        }     
        
//        $user = array(
//            'nombre' => filter_input(INPUT_POST, 'nombre'),
//            'apellido' => filter_input(INPUT_POST, 'apellido'),
//            'login' => $this->input->post('user'),
//            'email' => $this->input->post('email'),
//            'password' => $this->input->post('password')               
//        );
//        
//        if ($this->usuario_model->save($user)) {            
//        $this->load->view('plantillas/plantilla', $this->data);
//    }
    
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
    
    
    private function upload_image() {
        
        $config['upload_path'] = 'files/img/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2*1024;
        $config['max_width'] = '1024';
        $config['max_height'] = '1024';
        $config['file_name'] = $this->input->post('nombre').$this->input->post('apellido');
        $config['remove_spaces'] = TRUE;
        
        $this->load->library('upload', $config);
        $this->load->library('Image_lib');
        
        if (!$this->upload->do_upload()){
            $error = array('error' =>  $this->upload->display_errors());
            return $error;
        } else {
            $data = $this->upload->data();
            $this->create_thumb($data['file_name']);
            
            return $data['file_name'];
        }
    }
    
    function create_thumb($image){
        $config['image_library'] = 'g2d';
        $config['source_image'] = 'files/img/'.$image;
        $config['new_image'] = 'files/img/thumbs/';
        $config['thumb_marker'] = '';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 150;
        $config['height'] = 150;
        
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
    }

}
