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
        $permiso = "";
        $nombre = "";
        $apellido = "";
        $estado_user = "";
        $mensaje = "Combinación de Usuario y Contraseña Incorrecta";
        $datos = $this->modelo->conectar($user, $pass);
        $cookie = array('permiso' => '', 'conectado' => false);
        if ($datos->num_rows() == 1) {
            $data = $datos->result();
            foreach ($data as $fila) {
                $estado_user = $fila->estado_user;
                $permiso = "1";
                $nombre = strtoupper($fila->nombre_user);
                $apellido = strtoupper($fila->apellido_user);
            }
            if ($estado_user == "0") {
                $cookie = array('nombre' => $nombre, 'apellido' => $apellido, 'permiso' => $permiso, 'conectado' => true);
                $valor = 1;
            }
            $this->session->set_userdata($cookie);
        }
        echo json_encode(array('valor' => $valor, 'mensaje' => $mensaje, 'nombre' => $nombre, 'apellido' => $apellido, 'permiso' => $permiso, 'estado_user' => $estado_user));
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

}
