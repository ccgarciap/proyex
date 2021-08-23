<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Producto extends CI_Controller
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
        $this->load->model('productoModel');
        $data['producto'] = $this->productoModel->get_producto();
        $this->load->view('Administrador/productos', $data);

    }

    public function createProducto()
    {   
        

        $this->load->model('productoModel');
        $data['producto'] = $this->productoModel->get_producto();
        $this->load->view('Administrador/createProducto', $data);
        
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


        $this->load->model('productoModel');
        $this->productoModel->insert_producto($this->input->post());
        redirect(base_url('index.php/producto/index'));
    }

    /**
     * Edit Data from this method.
     *
     * @return Response
     */
    public function edit($id)
    {
        $this->load->model('productoModel');
        $data['producto'] = $this->productoModel->get_Producto_by_id($id);     
        $this->load->view('Administrador/editProducto',$data);
    }
    /**
     * Update Data from this method.
     *
     * @return Response
     */
    public function update($id)
    {
        $this->load->model('productoModel');        
        $this->productoModel->update_producto($id, $this->input->post()); 
        redirect(base_url('index.php/producto/index'));
    }
    /**
     * Delete Data from this method.
     *
     * @return Response
     */
    public function delete($id)
    {
        $this->load->model('productoModel');
        $this->productoModel->delete($id);
        redirect(base_url('index.php/producto/index'));
    }



 
    
   
}