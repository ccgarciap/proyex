<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pedido extends CI_Controller
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
        $this->load->model('pedidoModel');
        $data['pedido'] = $this->pedidoModel->get_pedido();
        $this->load->view('Vendedor/pedidos', $data);

    }

    public function createPedido()
    {   
        

        $this->load->model('pedidoModel');
        $data['pedido'] = $this->pedidoModel->get_pedido();
        $this->load->view('Vendedor/createPedido', $data);
        
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


        $this->load->model('pedidoModel');
        $this->pedidoModel->insert_pedido($this->input->post());
        redirect(base_url('index.php/pedido/index'));
    }

    /**
     * Edit Data from this method.
     *
     * @return Response
     */
    public function edit($id)
    {
        $this->load->model('pedidoModel');
        $data['pedido'] = $this->pedidoModel->get_user_by_id($id);     
        $this->load->view('Vendedor/editPedido',$data);
    }
    /**
     * Update Data from this method.
     *
     * @return Response
     */
    public function update($id)
    {
        $this->load->model('pedidoModel');        
        $this->pedidoModel->update_pedido($id, $this->input->post()); 
        redirect(base_url('index.php/pedido/index'));
    }
    /**
     * Delete Data from this method.
     *
     * @return Response
     */
    public function delete($id)
    {
        $this->load->model('pedidoModel');
        $this->pedidoModel->delete($id);
        redirect(base_url('index.php/pedido/index'));
    }



 
    
   
}