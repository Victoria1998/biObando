<?php

class contactoDAO extends dataSource implements IContacto {

    public function insert(\contacto $cont) {
        $sql = 'INSERT INTO contacto (nombreApellido, correo, telefono, mensaje, fecha) VALUES (:nombre, :correo, :telefono, :mensaje)';
        $params = array(
            ':nombre' => $cont->getNombreApellido(),
            ':correo'=>$cont->getCorreo(),
            ':telefono'=>$cont->getTelefono(),
            ':mensaje'=>$cont->getMensaje(),
        );
        return $this->execute($sql, $params);
    }

    public function update(\contacto $cont) {
        $sql = 'UPDATE contacto SET nombreApellido = :nombre, correo = :correo, telefono = :telefono, mensaje = :mensaje  WHERE cont_id = :id';
        $params = array(
            ':nombre' => $cont->getNombreApellido(),
            ':correo' => $cont->getCorreo(),
            ':telefono' => $cont->getTelefono(),
            ':mensaje' => $cont->getMensaje(),
            ':id' => $cont->getContId(),
        );
        return $this->execute($sql, $params);
    }

}
