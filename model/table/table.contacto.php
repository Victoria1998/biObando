<?php

class contacto {

    private $cont_id;
    private $nombreApellido;
    private $correo;
    private $telefono;
    private $mensaje;
    private $fecha;
    
    public function getContId() {
        return $this->cont_id;
    }

    public function getNombreApellido() {
        return $this->nombreApellido;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getMensaje() {
        return $this->mensaje;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function setContId($contId) {
        $this->cont_id = $contId;
    }

    public function setNombreApellido($nombreApellido) {
        $this->nombreApellido = $nombreApellido;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }


}
