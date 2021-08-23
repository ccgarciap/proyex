<?php
defined('BASEPATH') or exit('No direct script access allowed');
class UsuarioModel extends CI_Model
{
    private $table = "usuario";
    public function get_usuario()
    {
        $query = "select u.id,
                         u.telefono,
                         u.nombre,
                         IF(u.tipo_usuario='1','administrador', IF(u.tipo_usuario='2','vendedor', IF(u.tipo_usuario='3','asociado', NULL))) as rol,
                         u.correo,  
                         d.nombre as nombreDrogueria
                    from usuario u LEFT JOIN drogueria d on(u.id_drogueria_id=d.id)";
        $result = $this->db->query($query);
        if ($result) {
            $result = $result->result_array();
            return $result;
        } else {
            return false;
        }
    }

    public function insert_usuarios($data)
    {
        
        $nombre = $data['nombre'];
        $id_drogueria_id = $data['id_drogueria']=='no aplica' ? NULL : $data['id_drogueria']; 
        $telefono = $data['telefono'];
        $tipo_usuario = $data['tipo_usuario'];
        $correo = $data['correo'];
        $clave = $data['clave'];
        $existeDrogueria=$data['id_drogueria']=='no aplica' ? '': 'id_drogueria_id,' ;
        $exDrogueria=$data['id_drogueria']=='no aplica' ? '': $id_drogueria_id .',' ;

        $query = "INSERT INTO usuario (nombre, $existeDrogueria  telefono, tipo_usuario, correo, clave) VALUES ( '$nombre', $exDrogueria  '$telefono','$tipo_usuario', '$correo',  '$clave')";
        $this->db->query($query);
        return;
    }

    public function delete($id)
    {
        $query = "delete from usuario where id = $id";
        $this->db->query($query);
        return;
    }

    public function get_user_by_id($id)
    {
      $query = "select u.id,
                        u.telefono,
                        u.nombre,
                        IF(u.tipo_usuario='1','administrador', IF(u.tipo_usuario='2','vendedor', IF(u.tipo_usuario='3','asociado', NULL))) as rol,
                        u.correo,
                        u.clave,  
                        u.id_drogueria_id,
                        d.nombre as nombreDrogueria  
                from usuario u LEFT JOIN drogueria d on(u.id_drogueria_id=d.id) WHERE u.id=$id";
        $result = $this->db->query($query);
        if ($result) {
            $result = $result->result_array();
            return $result;
        } else {
            return false;
        }
    }

    public function update_usuario($id, $data)
    {
        if ($id == 0) {
            $this->insert_usuarios($data);
            return;
        } else {          
            $nombre = $data['nombre'];
            $id_drogueria_id = $data['id_drogueria_id'];
            $telefono = $data['telefono'];
            $tipo_usuario = $data['tipo_usuario'];
            $correo = $data['correo'];
            $clave = $data['clave'];
            $existe1Drogueria=$data['id_drogueria']=='no aplica' ? '': 'id_drogueria_id=' ;
            $ex1Drogueria=$data['id_drogueria']=='no aplica' ? '': $id_drogueria_id .',' ;

            $query = "UPDATE usuario set nombre = '$nombre', $existe1Drogueria $ex1Drogueria tipo_usuario = '$tipo_usuario', correo ='$correo', clave= '$clave', telefono= '$telefono' WHERE id = $id;";
            if($this->db->query($query)){
             return;
            }         
        }
    }

   
}