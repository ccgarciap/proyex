<?php
defined('BASEPATH') or exit('No direct script access allowed');
class LoginModel extends CI_Model
{
    private $table = "usuario";
    public function validarUsuario($correo, $clave)
    {
        $query = "select u.correo, 
                    u.clave,
                    u.tipo_usuario
                    from usuario u where u.correo='$correo' and u.clave='$clave'";

        $result = $this->db->query($query);
        if ($result) {
            $result = $result->result_array();
            return $result;
        } else {
            return false;
        }
    }

      
         
      
    
}
