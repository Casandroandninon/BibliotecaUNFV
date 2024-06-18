<?php
function conn(){
	$hostname="localhost";
	$usuariodb="root";
	$passaworddb="";
	$dbname="biblioteca";
	
	$conectar=mysqli_connect($hostname,$usuariodb,$passaworddb,$dbname);
	return $conectar;
}
?>