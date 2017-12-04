<?php

interface IContacto {

  public function select();

  public function insert(contacto $cont);

  public function update(contacto $cont);

}
