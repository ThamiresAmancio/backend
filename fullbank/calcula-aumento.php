<?php


if(!isset($_GET["nome"]) 

    || !isset($_GET["salario"])){
    header("location:index.php");
}

$nome = $_GET["nome"];
$salario = $_GET["salario"];

$salarioMaior = $salario + 10;
$salarioMenor = $salario + 20;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando o aumento</title>
    <link rel="stylesheet" href="../style-global.css">

</head>
<body>
    
    <?php
         
         if($salarioMaior > 5.000){
                 
            echo "<h1> O $nome passará a receber R$ $salarioMaior</h1>";
         }
         else{
             echo "<h1> O{$nome} passrá a receber R$ {$salarioMenor}";
         }
  ?>
</body>
</html>