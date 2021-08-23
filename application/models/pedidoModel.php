<?php
defined('BASEPATH') or exit('No direct script access allowed');
class PedidoModel extends CI_Model
{
    private $table = "pedido";
    public function get_pedido()
    {
        $query = "select pe.id,
                         pe.cantidad,
                         pe.valor_Total,  
                         d.nombre as nombreDrogueria
                    from pedido pe LEFT JOIN drogueria d on(pe.id_drogueria_id=d.id)";
        $result = $this->db->query($query);
        if ($result) {
            $result = $result->result_array();
            return $result;
        } else {
            return false;
        }
    }

    public function insert_pedido($data)
    {
        
        $cantidad = $data['cantidad'];
        $valor_Total = $data['valor_Total'];
        $id_drogueria_id=['id_drogueria'];
        

        $query = "INSERT INTO pedido (cantidad, $id_drogueria_id  valor_Total) VALUES ( '$cantidad', $id_drogueria_id  '$valor_Total')";
        $this->db->query($query);
        return;
    }

    public function delete($id)
    {
        $query = "delete from usuario where id = $id";
        $this->db->query($query);
        return;
    }

    public function get_pedido_by_id($id)
    {
      $query = "select pe.id,
                        pe.cantidad,
                        pe.valor_Total,  
                        d.nombre as nombreDrogueria
                from pedido pe LEFT JOIN drogueria d on(pe.id_drogueria_id=d.id) WHERE pe.id=$id";
        $result = $this->db->query($query);
        if ($result) {
            $result = $result->result_array();
            return $result;
        } else {
            return false;
        }
    }

    public function update_pedido($id, $data)
    {
        if ($id == 0) {
            $this->insert_pedido($data);
            return;
        } else {          
            $cantidad = $data['cantidad'];
            $id_drogueria_id = $data['id_drogueria_id'];
            $valor_total = $data['valor_total'];
            

            $query = "UPDATE usuario set cantidad = '$cantidad',  valor_total, id_drogueria_id,=$id_drogueria_id = '$valor_total' WHERE id = $id;";
            if($this->db->query($query)){
             return;
            }         
        }
    }

   
}