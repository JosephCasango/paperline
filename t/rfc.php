<?php
function conecta(){
$servidor="localhost";
$usuario="root";
$password="";
$bd="rfc";
$conexion = new mysqli($servidor,$usuario,$password,$bd);
if($conexion -> connect_error){
die("Conexion no exitosa: " .connect_error);
}
echo "Conexion exitosa!<br>";




$cu= $_POST["curpRFC"];
$en= $_POST["EntiFe"];
$mu= $_POST["Municipio"];

$lo= $_POST["Locali"];

$co= $_POST["Colon"];
$cl= $_POST["Clle"];

$nue= $_POST["NumEx"];
$nui= $_POST["NumIn"];


$ter= $_POST["TelRFC"];
$gmr= $_POST["GmailRFC"];



$sql="INSERT INTO j(curp,entidadfederativa,municipio,localidad,colonia,calle,numeroexterior,numerointerior,telefono,gmail) 
VALUES 
('$cu','$en','$mu','$lo','$co','$cl','$nue','$nui','$ter','$gmr')";


mysqli_query($conexion,$sql);

mysqli_close($conexion);
}
conecta();
?>