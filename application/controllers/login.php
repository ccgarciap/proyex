<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    //load model


    public function index()
    {
        
        $this->load->view('Login/login');
    }

    public function validarUsuario(){

        $this->load->model('loginModel');
       
        $correo=$this->input->post()['email'];
        $clave=$this->input->post()['password'];

       $respuesta=$this->loginModel->validarUsuario($correo,$clave);
      
      if(count($respuesta)>0){

       if($respuesta[0]['tipo_usuario']=="1"){
        $this->load->view('Administrador/dashboard');
        }else if($respuesta[0]['tipo_usuario']=="2"){
            $this->load->view('Vendedor/dashboard');
        }else if($respuesta[0]['tipo_usuario']=="3"){
            $this->load->view('Asociado/dashboard');
        }else{
        $this->load->view('Login/login');
       }
        
      }else{
        $this->load->view('Login/login');
      }

       
      }

   
}