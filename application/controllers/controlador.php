<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class controlador extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("modelo");
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('content');
        $this->load->view('footer');
    }

    //****************************************LOGIN**********************************************
    function conectar() {
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        $valor = 0;
        $tipo = "";
        $nombre = "";
        $apellido = "";
        $estado_user = "";
        $mensaje = "¡Combinación de Usuario y Contraseña Incorrecta!";
        $datos = $this->modelo->conectar($user, $pass);
        $cookie = array('permiso' => '', 'conectado' => false);
        if ($datos->num_rows() == 1) {
            $data = $datos->result();
            foreach ($data as $fila) {
                $estado_user = $fila->estado_user;
                $tipo = $fila->tipo_user;
                $nombre = strtoupper($fila->nombre_user);
                $apellido = strtoupper($fila->apellido_user);
            }
            if ($estado_user == "0") {
                $cookie = array('nombre' => $nombre, 'apellido' => $apellido, 'tipo' => $tipo, 'conectado' => true);
                $valor = 1;
            }
            $this->session->set_userdata($cookie);
        }
        echo json_encode(array('valor' => $valor, 'mensaje' => $mensaje, 'nombre' => $nombre, 'apellido' => $apellido, 'tipo' => $tipo, 'estado_user' => $estado_user));
    }

    function verificalogin() {
        $valor = 0;
        $permiso = '';
        $nombre = '';
        $apellido = '';
        if ($this->session->userdata('conectado') == true) {
            $valor = 1;
            $permiso = $this->session->userdata('permiso');
            $nombre = $this->session->userdata('nombre');
            $apellido = $this->session->userdata('apellido');
        }
        echo json_encode(array('valor' => $valor, 'permiso' => $permiso, 'nombre' => $nombre, 'apellido' => $apellido));
    }

    function salir() {
        $this->session->sess_destroy();
    }

    //****************************************MANTENEDOR USUARIOS********************************************

    function cargar_usuarios() {
        $datos = $this->modelo->cargar_usuarios();
        $data ['cantidad'] = $datos->num_rows();
        $data ['usuarios'] = $datos->result();
        $this->load->view("lista_usuarios", $data);
    }

    function insert_usuario() {
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        $nombre = $this->input->post('nombre');
        $apellido = $this->input->post('apellido');
        $tipo = $this->input->post('tipo');
        $valor = 0;
        $msg = "¡ Usuario Ya Registrado !";
        if ($this->modelo->insert_usuario($nombre, $user, $pass, $apellido, $tipo) == 0) {
            $msg = "Usuario Registrado Correctamente";
            $valor = 1;
        }
        echo json_encode(array("valor" => $valor, "msg" => $msg));
    }

    function update_usuario() {
        $id = $this->input->post('id');
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        $nombre = $this->input->post('nombre');
        $apellido = $this->input->post('apellido');
        $tipo = $this->input->post('tipo');
        $valor = 0;
        $msg = "¡ Usuario Ya Registrado !";
        if ($this->modelo->update_usuario($id, $user, $pass, $nombre, $apellido, $tipo) == 0) {
            $msg = "Usuario Modificado Correctamente";
            $valor = 1;
        }
        echo json_encode(array("valor" => $valor, "msg" => $msg));
    }

    function delete_usuario() {
        $id = $this->input->post('id');
        $msj = "¡ Error, algo salio mal !";
        $valor = 0;
        if ($this->modelo->delete_usuario($id) == 0) {
            $msj = "Usuario Eliminado";
            $valor = 1;
        }
        echo json_encode(array("valor" => $valor, "msj" => $msj));
    }

    function seleccionar_usuario() {
        $id = $this->input->post('id');
        $valor = 0;
        $datos = $this->modelo->seleccionar_usuario($id)->result();
        $cont = $this->modelo->seleccionar_usuario($id)->num_rows();
        if ($cont > 0) {
            $valor = 1;
            foreach ($datos as $fila) {
                $id = $fila->id_user;
                $user = $fila->user;
                $pass = $fila->pass;
                $nombre = $fila->nombre_user;
                $apellido = $fila->apellido_user;
                $tipo = $fila->tipo_user;
            }
            echo json_encode(array("valor" => $valor, "id" => $id, "user" => $user, "pass" => $pass,
                "nombre" => $nombre, "apellido" => $apellido, "tipo" => $tipo));
        } else {
            echo json_encode(array("valor" => $valor));
        }
    }

}
