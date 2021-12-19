<?php
$servername = "localhost";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error){
    die("Falha na conexão: ". $conn->connect_error);

}


$sql = "CREATE DATABASE loginUsuario";
if($conn->query($sql)== TRUE){
    echo "Banco de dados criado com sucesso";

}
else{
    echo "Erro ao criar o banco de dados: ".$conn->error;
}

$conn->close();