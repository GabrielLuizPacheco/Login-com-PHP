<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>


    <div align="center">
        
        <form method = "post" >

            <Fieldset>
                <legend><b>Cadastro</b></legend><br>
                
                <label for="nome">Nome:</label><br>
                <input type="text" required="required" name="nome" >
                <br><br>

                <label for="nascimento">Data de Nascimento:</label><br>
                <input type="date"  required="required" name="nascimento" >
                <br><br>

                <label for="email">E-mail:</label><br>
                <input type="text"  required="required" name="email" >
                <br><br>

                <div>
                <label for="acesso">Nivel de Acesso:</label><br>
                <select required = "required" name = "acesso"> 
                <option value="user">Usuário</option>
                <option value="adm">ADM</option>
                <option value="mod">Moderador</option><br><br>
                </select>
                </div><br>

                <label for="usuario">Nick:</label><br>
                <input type="text"  required="required" name="user" >
                <br><br>

                <label for="senha">Senha:</label><br>
                <input type="text"  required="required" name="senha" >
                <br><br>

                <input type="submit" name= "salvar" value="Cadastrar"  ><br><br>

                <a href="javascript:history.go(-1)">Voltar</a>
                

            </Fieldset>
        
        </form>
        
    </div><br>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "loginusuario";
    $nome= "";
    $nascimento= "";
    $email= "";
    $senha= "";
    $usuario = "";
    $acesso= "";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error){
    die("Falha na conexão: ". $conn->connect_error);

    }

    if(isset($_POST["salvar"])){
    
        $nome= ($_POST["nome"]);
        $nascimento= ($_POST["nascimento"]);
        $email= ($_POST["email"]);
        $senha= ($_POST["senha"]);
        $usuario = ($_POST["user"]);
        $acesso= ($_POST["acesso"]);
       

        $sql = "INSERT INTO loginn (nome, nascimento, email, usuario, senha, acesso) VALUES ('$nome', '$nascimento', '$email', '$usuario', '$senha', '$acesso')";

    
        if($conn->query($sql)== TRUE){
        echo "Novo registro criado com sucesso";

        }
        else{
        echo "Erro: ".$sql. "<br>". $conn->error;
        }
    
    }

    $conn->close();

    ?>

    
</body>
</html>