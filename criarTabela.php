<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginUsuario";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Falha na conexão: ". $conn->connect_error);

}


$sql = "CREATE TABLE loginn (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, nome
VARCHAR(30) NOT NULL, nascimento DATE NOT NULL, email VARCHAR(30), usuario VARCHAR(30)
NOT NULL, senha VARCHAR(30) NOT NULL, acesso VARCHAR(15) NOT NULL)";

if($conn->query($sql)== TRUE){
    echo "Tabela  loginn criada com sucesso";

}
else{
    echo "Erro ao criar a tabela: ".$conn->error;
}

$conn->close();