<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Articulos extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        //cargo el helper de url, con funciones para trabajo con URL del sitio
      $this->load->helper('url_helper');
      
      //cargo el modelo de artículos
      $this->load->model('Coche_model');
      
      //pido los ultimos artículos al modelo
      $ultimosArticulos = $this->Coche_model->muestra_Todos();
      
      //creo el array con datos de configuración para la vista
      $datos_vista = array('rs_articulos' => $ultimosArticulos);
      
      //cargo la vista pasando los datos de configuacion
      $this->load->view('home', $datos_vista);
   }
    

    function ordenadores() {
        echo 'Aquí se muestran los productos de ordenadores';
    }

    function monitores() {
        echo 'Aquí se muestran los productos de monitores';
    }
    
    function fconparametros($parametro) {
        echo 'Aqui se muestran los '.$parametro;
    }
    
    function fcondosparametros($parametro1=null, $parametro2=null) {
        echo 'El primero pametro es '.$parametro1.' y el segundo es '.$parametro2;
    }
    
    function redirigevista () {
        $this->load->view('vista_prueba');
    }

}
