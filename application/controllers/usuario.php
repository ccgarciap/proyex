<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
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
        $this->load->model('usuarioModel');
        $data['usuario'] = $this->usuarioModel->get_usuario();
        $this->load->view('Administrador/usuarios', $data);

    }

    public function create()
    {   
        

        $this->load->model('drogueriaModel');
        $data['drogueria'] = $this->drogueriaModel->get_drogueria();
        $this->load->view('Administrador/create', $data);
        
    }

    /**
     * Store Data from this method.
     *
     * @return Response
     */
    public function store()
    {
        
        // echo '<pre>';
        // print_r($this->input->post());
        // echo '</pre>';
        // die();


        $this->load->model('usuarioModel');
        $this->usuarioModel->insert_usuarios($this->input->post());
        redirect(base_url('index.php/usuario/index'));
    }

    /**
     * Edit Data from this method.
     *
     * @return Response
     */
    public function edit($id)
    {
        $this->load->model('usuarioModel');
        $data['usuario'] = $this->usuarioModel->get_user_by_id($id);     
        $this->load->view('Administrador/edit',$data);
    }
    /**
     * Update Data from this method.
     *
     * @return Response
     */
    public function update($id)
    {
        $this->load->model('usuarioModel');        
        $this->usuarioModel->update_usuario($id, $this->input->post()); 
        redirect(base_url('index.php/usuario/index'));
    }
    /**
     * Delete Data from this method.
     *
     * @return Response
     */
    public function delete($id)
    {
        $this->load->model('usuarioModel');
        $this->usuarioModel->delete($id);
        redirect(base_url('index.php/usuario/index'));
    }



 
    
   
}