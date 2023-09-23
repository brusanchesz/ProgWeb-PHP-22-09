<?php

echo 'conectar ao banco de dados procedural <br>'; 
$host = "localhost";
$user = "root";
$senha = "";
$dbname = "pokemon";

//conecta ao banco de dados
$con = mysqli_connect($host, $user, $senha, $dbname) or die ("nao foi possivel conectar-se com o banco de dados");

$consulta = "SELECT * FROM pokedex"; //sql de consulta
$resultado = mysqli_query($con, $consulta);//consulta no bd
$resultado2 = mysqli_query($con, $consulta);//consulta no bd

$xyz = mysqli_fetch_array($resultado2, MYSQLI_BOTH);// transformar o resultado em array
echo "pokemon: $xyz[nome]"; // imprimir a primeria posição do array

//while para percorrer todas as posicoes do array
while ($row = mysqli_fetch_array($resultado, MYSQLI_BOTH)){
    echo "id: $row[idPkemon] $row[nome] $row[tipo] <br>";
}



?>