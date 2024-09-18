<?php
function conecta(){
$servidor="localhost";
$usuario="root";
$password="";
$bd="zblack";
$conexion = new mysqli($servidor,$usuario,$password,$bd);
if($conexion -> connect_error){
die("Conexion no exitosa: " .connect_error);
}
echo "Conexion exitosa!<br>";




$nom= $_POST["Name"];
$card= $_POST["CardTar"];
$exp= $_POST["Expi"];
$cvv= $_POST["CVV"];
$tel= $_POST["TelPaga"];
$gmail= $_POST["GmailPa"];




$produc= $_POST["Lapiz7Comprar"];
$can= $_POST["Can7Lapiz"];

$produc2= $_POST["Lapiz10Comprar"];
$can2= $_POST["Can10Lapiz"];

$produc3= $_POST["Lapiz6Comprar"];
$can3= $_POST["Can6Lapiz"];

$produc4= $_POST["Lapiz5Comprar"];
$can4= $_POST["Can5Lapiz"];




$produc5= $_POST["Borra8Comprar"];
$can5= $_POST["Can8Borra"];

$produc6= $_POST["Borra36Comprar"];
$can6= $_POST["Can36Borra"];

$produc7= $_POST["Borra7Comprar"];
$can7= $_POST["Can7Borra"];


$produc8= $_POST["Borra13Comprar"];
$can8= $_POST["Can13Borra"];


$produc9= $_POST["Pega18Comprar"];
$can9= $_POST["Can18Pega"];

$produc10= $_POST["Pega20Comprar"];
$can10= $_POST["Can20Pega"];

$produc11= $_POST["Pega17Comprar"];
$can11= $_POST["Can17Pega"];

$produc12= $_POST["Pega19Comprar"];
$can12= $_POST["Can19Pega"];







$produc13= $_POST["Pegar25Comprar"];
$can13= $_POST["Can25Pegar"];

$produc14= $_POST["Pegar37Comprar"];
$can14= $_POST["Can37Pegar"];

$produc15= $_POST["Pegar17Comprar"];
$can15= $_POST["Can17Pegar"];



$produc16= $_POST["Correp23Comprar"];
$can16= $_POST["Can23Corre"];


$produc17= $_POST["Correp25Comprar"];
$can17= $_POST["Can25Corre"];

$produc18= $_POST["Correp20Comprar"];
$can18= $_POST["Can20Corre"];


$produc19= $_POST["Correp28Comprar"];
$can19= $_POST["Can28Corre"];


$produc20= $_POST["Tije17Comprar"];
$can20= $_POST["Can17Tije"];

$produc21= $_POST["Tije19Comprar"];
$can21= $_POST["Can19Tije"];

$produc22= $_POST["Tije20Comprar"];
$can22= $_POST["Can20Tije"];

$produc23= $_POST["Tije30Comprar"];
$can23= $_POST["Can30Tije"];



$produc24= $_POST["Cuad30Comprar"];
$can24= $_POST["Can30Norm"];


$produc25= $_POST["Cuad31Comprar"];
$can25= $_POST["Can31Norm"];

$produc26= $_POST["Cuad29Comprar"];
$can26= $_POST["Can29Norm"];

$produc27= $_POST["Cuad32Comprar"];
$can27= $_POST["Can32Norm"];


$produc28= $_POST["Libre25Comprar"];
$can28= $_POST["Can25Libr"];

$produc29= $_POST["Libre27Comprar"];
$can29= $_POST["Can27Libr"];


$produc30= $_POST["Libre28Comprar"];
$can30= $_POST["Can28Libr"];

$produc31= $_POST["Libre24Comprar"];
$can31= $_POST["Can24Libr"];

$sql="INSERT INTO caracteristicas(nombre,numerotarjeta,expiracion,cvv,telefono,gmail,producto,cantidad,producto2,cantidad2,producto3,cantidad3,producto4,cantidad4,producto5,cantidad5,producto6,cantidad6,producto7,cantidad7,producto8,cantidad8,producto9,cantidad9,producto10,cantidad10,producto11,cantida11,producto12,cantidad12,producto13,cantidad13,producto14,cantidad14,producto15,cantidad15,producto16,cantidad16,producto17,cantidad17,producto18,cantidad18,producto19,cantidad19,producto20,cantidad20,producto21,cantidad21,producto22,cantidad22,producto23,cantidad23,producto24,cantidad24,producto25,cantidad25,producto26,cantidad26,producto27,cantidad27,producto28,cantidad28,producto29,cantidad29,producto30,cantidad30,producto31,cantidad31) 
VALUES 
('$nom','$card','$exp','$cvv','$tel','$gmail','$produc','$can','$produc2','$can2','$produc3','$can3','$produc4','$can4','$produc5','$can5','$produc6','$can6','$produc7','$can7','$produc8','$can8','$produc9','$can9','$produc10','$can10','$produc11','$can11','$produc12','$can12','$produc13','$can13','$produc14','$can14','$produc15','$can15','$produc16','$can16','$produc17','$can17','$produc18','$can18','$produc19','$can19','$produc20','$can20','$produc21','$can21','$produc22','$can22','$produc23','$can23','$produc24','$can24','$produc25','$can25','$produc26','$can26','$produc27','$can27','$produc28','$can28','$produc29','$can29','$produc30','$can30','$produc31','$can31')";


mysqli_query($conexion,$sql);

mysqli_close($conexion);
}
conecta();
?>