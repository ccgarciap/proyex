<?php
defined('BASEPATH') or exit('No direct script access allowed');
class DrogueriaModel extends CI_Model
{
    private $table = "drogueria";
    public function get_drogueria()
    {
        $query = "select d.id,
                         d.nombre
                         from drogueria d";
        $result = $this->db->query($query);
        if ($result) {
            $result = $result->result_array();
            return $result;
        } else {
            return false;
        }
    }
    public function get_drogueria_full()
    {
        $query = "select d.id,
                         d.nombre,
                         d.direccion,
                         d.telefono
                         from drogueria d";
        $result = $this->db->query($query);
        if ($result) {
            $result = $result->result_array();
            return $result;
        } else {
            return false;
        }
    }
    public function get_drogueria_by_id($id)
    {
        $query = "select d.id, 
                    d.nombre, 
                    d.direccion, 
                    d.telefono 
                    from drogueria d WHERE d.id=$id";

        $result = $this->db->query($query);
        if ($result) {
            $result = $result->result_array();
            return $result;
        } else {
            return false;
        }
    }

    public function insert_drogueria($data)
    {
        $nombre = $data['nombre'];
        $direccion = $data['direccion'];
        $telefono = $data['telefono'];


        $query = "INSERT INTO drogueria (nombre, direccion, telefono) VALUES ( '$nombre', '$direccion', '$telefono')";
        $this->db->query($query);
        return;
    }

    public function delete($id)
    {
        $query = "delete from drogueria where id = $id";
        $this->db->query($query);
        return;
    }
    public function update_drogueria($id, $data)
    {
        if ($id == 0) {
            $this->insert_drogueria($data);
            return;
        } else {
            $nombre = $data['nombre'];
            $direccion = $data['direccion'];
            $telefono = $data['telefono'];

            $query = "UPDATE drogueria set nombre = '$nombre', direccion = '$direccion', telefono = $telefono WHERE id = $id;";
            if ($this->db->query($query)) {
                return;
            }
        }
    }
}
