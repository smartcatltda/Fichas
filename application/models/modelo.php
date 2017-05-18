<?php

class modelo extends CI_Model {

    //*************************LOGIN************************
    function conectar($user, $pass) {
        $this->db->select('*');
        $this->db->where('user', $user);
        $this->db->where('pass', ($pass));
        $this->db->where('estado_user', 0);
        return $this->db->get('usuario');
    }

    //*************************MANTENEDOR USUARIOS************************
     function cargar_usuarios() {
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->order_by('id_user', 'ASC');
        return $this->db->get();
    }
    
    function insert_usuario($nombre, $user, $pass, $apellido, $tipo) {
        $this->db->select('*');
        $this->db->where('user', $user);
        $cantidad = $this->db->get('usuario')->num_rows();
        if ($cantidad == 0):
            $data = array(
                "user" => $user,
                "pass" => $pass,
                "nombre_user" => $nombre,
                "apellido_user" => $apellido,
                "tipo_user" => $tipo,
                "estado_user" => 0,
            );
            $this->db->insert("usuario", $data);
            return 0;
        else:
            $this->db->select('*');
            $this->db->where('user', $user);
            $this->db->where('estado_user', 0);
            $activo = $this->db->get('usuario')->num_rows();
            if ($activo == 0):
                $data = array(
                    "user" => $user,
                    "pass" => $pass,
                    "nombre_user" => $nombre,
                    "apellido_user" => $apellido,
                    "tipo_user" => $tipo,
                    "estado_user" => 0,
                );
                $this->db->insert("usuario", $data);
                return 0;
            else:
                return 1;
            endif;
        endif;
    }

}
