<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <form method = "post" >

            <Fieldset>

                <label >Remova um usuário</label><br><br>
                
                <left>
                    <label >Nome:</label><br>
                    <input type="text" id="user" required="required" name="nome" >
                </left><br><br>

                <mid>
                    <label >Nick:</label><br>
                    <input type="text" id="senha" required="required" name="usuario" >
                </mid><br><br>

                <input type="submit" name= "delete" value="Deletar"  ><br><br>

                <a href="javascript:history.go(-1)">Voltar</a>
>
                
            </Fieldset>
        
        </form>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginusuario";
$usuario = "";
$nome = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Falha na conexão: ". $conn->connect_error);

}

if(isset($_POST["delete"])){

    $usuario = ($_POST["usuario"]);
    $nome = ($_POST["nome"]);

    $sql = "DELETE FROM loginn WHERE usuario = '$usuario' and nome = '$nome' ";

    if($conn->query($sql) === TRUE){
    echo "Registro excluído com sucesso";
    }
    else{
    echo "Erro ao excluir registro: ".$conn->error;
    }
    $conn->close();

}


?>


</body>
</html>