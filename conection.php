<?php
class conection{

      public $con;

      function  __construct(){
      	$this->con=mysqli_connect('localhost','root','','primero');

   }



    function listar_clientes(){
    $resultado=$this->con->query("SELECT * FROM clientes");
     return $resultado->fetch_all(MYSQLI_ASSOC);//

    }

    function listar_entradas(){
    $resultado=$this->con->query("SELECT * FROM entradas");
     return $resultado->fetch_all(MYSQLI_ASSOC);//

    }
    function listar_salas(){
    $resultado=$this->con->query("SELECT * FROM salas");
     return $resultado->fetch_all(MYSQLI_ASSOC);//

    }


}

$conexion=new conection();
print_r($conexion->listar_clientes());

$conexion=new conection();
print_r($conexion->listar_entradas());

$conexion=new conection();
print_r($conexion->listar_salas());

?>