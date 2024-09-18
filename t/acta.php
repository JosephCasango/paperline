<?php
function conecta(){
$servidor="localhost";
$usuario="root";
$password="";
$bd="acta";
$conexion = new mysqli($servidor,$usuario,$password,$bd);
if($conexion -> connect_error){
die("Conexion no exitosa: " .connect_error);
}
echo "Conexion exitosa!<br>";




$cu= $_POST["curpActa"];
$nap= $_POST["NamePadres"];
$apep= $_POST["Ape1Padres"];

$apepa= $_POST["Ape2Padres"];

$tela= $_POST["TelActa"];
$gma= $_POST["GmailActa"];



$sql="INSERT INTO r(curp,nombrepadres,primerapellido,segundoapellido,telefono,gmail) 
VALUES 
('$cu','$nap','$apep','$apepa','$tela','$gma')";


mysqli_query($conexion,$sql);

mysqli_close($conexion);
}
conecta();
?>