<?php


class Controlador extends CI_Controller{

   function index(){
      //cargo el helper de url, con funciones para trabajo con URL del sitio
      $this->load->helper('url');
      
      //cargo el modelo de artículos
      $this->load->model('Consulta_model');
      
      //pido los ultimos artículos al modelo
      $info = $this->Consulta_model->dame_usuarios();
      
      //creo el array con datos de configuración para la vista
      $datos_vista = array('registros' => $info);
      
      //cargo la vista pasando los datos de configuacion
      $this->load->view('home', $datos_vista);
   }
}

?>