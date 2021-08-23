<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ProductoModel extends CI_Model
{
    private $table = "producto";
    public function get_producto()
    {
        $query = "select p.id,
                         p.nombre,
                         p.valor,
                         p.unidad
                         from producto p";
        $result = $this->db->query($query);
        if ($result) {
            $result = $result->result_array();
            return $result;
        } else {
            return false;
        }
    }
    
    public function get_Producto_by_id($id)
    {
        $query = "select p.id,
                        p.nombre,
                        p.valor,
                        p.unidad
                        from producto p WHERE p.id=$id";

        $result = $this->db->query($query);
        if ($result) {
            $result = $result->result_array();
            return $result;
        } else {
            return false;
        }
    }

    public function insert_producto($data)
    {
        $nombre = $data['nombre'];
        $valor = $data['valor'];
        $unidad = $data['unidad'];


        $query = "INSERT INTO producto (nombre, valor, unidad) VALUES ( '$nombre', '$valor', '$unidad')";
        $this->db->query($query);
        return;
    }

    public function delete($id)
    {
        $query = "delete from producto where id = $id";
        $this->db->query($query);
        return;
    }
    public function update_producto($id, $data)
    {
        if ($id == 0) {
            $this->insert_producto($data);
            return;
        } else {
            $nombre = $data['nombre'];
            $valor = $data['valor'];
            $unidad = $data['unidad'];

            $query = "UPDATE producto set nombre = '$nombre', valor = '$valor', unidad = $unidad WHERE id = $id;";
            if ($this->db->query($query)) {
                return;
            }
        }
    }
}