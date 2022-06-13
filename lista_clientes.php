<?php
require_once('Clientes.php');
$Clientes=new Clientes();
$consulta=$Clientes->listar_clientes();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		  th{
		  	padding:5px;
		  }
		  th{

		  }
		  table{
                  width: 80%;
                  border-collapse:collapse;
		  }
		  a{
		  	background:#DB9065;
		 	color:white;
		 	border:solid 1px #595050;
		 	text-decoration:none;
		    font-family:cursiva;
		    text-align:center;
		    padding:5px;
		    border-radius:5px;

		  }
		  img{
		  	width:15px;
		  }
	</style>
</head>
<body>
	<h1 style="background:#55AC74;text-align:center;color:while;">LISTA CLIENTES</h1>

	<table border="5",align="center">
		    <tr>
		    	<th>$</th>
			         <th>NOMBRES</th>
			         <th>APELLIDOS</th>
			         <th>DIRECCION</th>
			         <th>EDAD</th>
			     </tr>
		    

		  <style>
		  	th{
		    	text-align:center;
		    }
		  </style> 

          <?php
          $x=0;
          foreach($consulta as $c){
          	  $x++;
          	echo "<tr>
                         <td>$x</td>
                         <td>{$c['cli_nombre']}</td>
                         <td>{$c['cli_apellido']}</td>
                         <td>{$c['cli_direccion']}</td>
                         <td>{$c['cli_edad']}</td>
                         <td>
                              <a href=''>
                                  <img src='pensol.png'
                              </a>
                              <a href=''>
                                   <img src='delete.png'
                              >/<a>
                         </td>
          	      </tr>";

          }
          ?>
	
	</table>
</body>
</h