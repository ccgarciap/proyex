<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Drogueria extends CI_Controller
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
        $this->load->model('drogueriaModel');
        $data['drogueria'] = $this->drogueriaModel->get_drogueria_full();
        $this->load->view('Administrador/droguerias', $data);

    }

    public function createDrogueria()
    {   
        

        $this->load->model('drogueriaModel');
        $data['drogueria'] = $this->drogueriaModel->get_drogueria_full();
        $this->load->view('Administrador/createDrogueria', $data);
        
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


        $this->load->model('drogueriaModel');
        $this->drogueriaModel->insert_drogueria($this->input->post());
        redirect(base_url('index.php/drogueria/index'));
    }

    /**
     * Edit Data from this method.
     *
     * @return Response
     */
    public function edit($id)
    {
        $this->load->model('drogueriaModel');
        $data['drogueria'] = $this->drogueriaModel->get_drogueria_by_id($id);     
        $this->load->view('Administrador/editDrogueria',$data);
    }
    /**
     * Update Data from this method.
     *
     * @return Response
     */
    public function update($id)
    {
        $this->load->model('drogueriaModel');        
        $this->drogueriaModel->update_drogueria($id, $this->input->post()); 
        redirect(base_url('index.php/drogueria/index'));
    }
    /**
     * Delete Data from this method.
     *
     * @return Response
     */
    public function delete($id)
    {
        $this->load->model('drogueriaModel');
        $this->drogueriaModel->delete($id);
        redirect(base_url('index.php/drogueria/index'));
    }



 
    
   
}