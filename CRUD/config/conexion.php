<?php 
class conexion{
private $usuario="root";
private $clave="root";
private $bd="accesos";

private $servidor="ulises";
public $sql;public $res;public $conector;
public function __Construct(){
$this->conector=new mysqli($this->servidor,$this->usuario,
$this->clave,$this->bd,$this->puerto);
}
}
 ?>
 
