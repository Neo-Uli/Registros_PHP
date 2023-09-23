<?php 
class conexion{
private $usuario="diego";
private $clave="12345678";
private $bd="accessos";

private $servidor="localhosts";
public $sql;public $res;public $conector;
public function __Construct(){
$this->conector=new mysqli($this->servidor,$this->usuario,
$this->clave,$this->bd,$this->puerto);
}
}
 ?>
 
