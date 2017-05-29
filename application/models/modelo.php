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
        $this->db->where('estado_user', 0);
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
            return 1;
        endif;
    }

    function update_usuario($id, $user, $pass, $nombre, $apellido, $tipo) {
        $this->db->select('*');
        $this->db->where('id_user', $id);
        $datos = $this->db->get('usuario');
        foreach ($datos->result() as $fila):
            $user_edit = $fila->user;
        endforeach;
        if ($user_edit == $user):
            $data = array(
                "pass" => $pass,
                "nombre_user" => $nombre,
                "apellido_user" => $apellido,
                "tipo_user" => $tipo,
            );
            $this->db->where('id_user', $id);
            $this->db->update('usuario', $data);
            return 0;
        else:
            $this->db->select('*');
            $this->db->where('user', $user);
            $this->db->where('estado_user', 0);
            $cantidad = $this->db->get('usuario')->num_rows();
            if ($cantidad == 0):
                $data = array(
                    "user" => $user,
                    "pass" => $pass,
                    "nombre_user" => $nombre,
                    "apellido_user" => $apellido,
                    "tipo_user" => $tipo,
                );
                $this->db->where('id_user', $id);
                $this->db->update('usuario', $data);
                return 0;
            else:
                return 1;
            endif;
        endif;
    }

    function delete_usuario($id) {
        $data = array(
            "estado_user" => '1',
        );
        $this->db->where('id_user', $id);
        $this->db->update('usuario', $data);
        return 0;
    }

    function seleccionar_usuario($id) {
        $this->db->select('*');
        $this->db->where('id_user', $id);
        $this->db->from('usuario');
        return $this->db->get();
    }

}
