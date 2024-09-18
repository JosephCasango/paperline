<?php
function conecta(){
$servidor="localhost";
$usuario="root";
$password="";
$bd="curp";
$conexion = new mysqli($servidor,$usuario,$password,$bd);








$nom= $_POST["CurpName"];
$ape1= $_POST["CurpApe1"];
$ape2= $_POST["CurpApe2"];

$dn= $_POST["DNacimiento"];
$mn= $_POST["MNacimiento"];
$an= $_POST["ANacimiento"];


$se= $_POST["Sex"];
$es= $_POST["Estado"];


$te= $_POST["Tel"];
$gm= $_POST["Gmail"];



$sql="INSERT INTO z(nombre,primerapellido,segundoapellido,dianacimiento,mesnacimiento,añonacimiento,sexo,estado,telefono,gmail) 
VALUES 
('$nom','$ape1','$ape2','$dn','$mn','$an','$se','$es','$te','$gm')";


mysqli_query($conexion,$sql);

mysqli_close($conexion);
}
conecta();
?>