<?php
class Operaciones
{
  public $n1;
  public $n2;
  public $resultado;

  function __costrct(){
  	  $this->n1=10;
  	  $this->n2=25;
 }
   
   function sumar(){
   	return $this->resultado=$this->n1+$this->n2;
   }

}























$Operaciones= new Operaciones();
echo $Operaciones->sumar(); 
?>
