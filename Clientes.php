<?php
require_once('conection.php');
class Clientes extends conection{

    function listar_clientes(){
    	$resultado=$this->con->query("SELECT * FROM clientes");
    	return $resultado->fetch_all(MYSQLI_ASSOC);//
    }
}
?>
