<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginUsuario";
$usuario = ($_POST["user"]);
$senha = ($_POST["senha"]);

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
die("Falha na conexão: ". $conn->connect_error);
}
   
    $sql = "SELECT * FROM loginn WHERE usuario = '$usuario' and senha = '$senha'" ;
    $result = $conn->query($sql);
        
        if($result->num_rows > 0){
           
            
            while($row = $result->fetch_assoc()){
            echo "Nome: ". $row["nome"]."<br>";
            echo "Data de Nascimento: ". $row["nascimento"]."<br>";
            echo "E-mail: ". $row["email"]."<br><br>";

                if($row["acesso"] == "adm"){

                    $sql1 = "SELECT * FROM loginn";
                    $result = $conn->query($sql1);

                        if($result->num_rows > 0){

                            echo"Constas Registradas <br><br>";
                
                            while($row = $result->fetch_assoc()){
                            echo "id: ". $row["id"]."<br>" . 
                            "Nome: ".$row["nome"]."<br>". 
                            "Data de Nascimento " . $row["nascimento"]. "<br>".
                            "E-mail " . $row["email"]. "<br>".
                            "Nick" . $row["usuario"] ."<br><br>";
                            }
                
                        }
 
                        echo"<a href='telaCadastro.php'>Cadastre um Usuário</a><br>";
                        echo "<a href='telaUpdate.php'>Atualize Usuário</a><br>";
                        echo "<a href='telaDelete.php'>Remova Usuário</a><br><br>";

                        echo "<a href='telaLogin.php'>Sair</a>";
                
                }
                else if($row["acesso"] == "mod"){

                    $sql2 = "SELECT * FROM loginn";
                    $result = $conn->query($sql2);

                        if($result->num_rows > 0){

                            echo"Constas Registradas <br><br>";
                
                            while($row = $result->fetch_assoc()){
                            echo 
                            "Nome: ".$row["nome"]."<br>". 
                            "Data de Nascimento " . $row["nascimento"]. "<br>".
                            "E-mail " . $row["email"]. "<br>".
                            "Nick" . $row["usuario"] ."<br><br>";
                            }

                            echo "<a href='telaLogin.php'>Sair</a>";
                        }

                }
                
                else{

                echo "<a href='telaLogin.php'>Sair</a>";

                }


            }

        }
        
        else{
            echo "Infelismente não encontramos seu Usuário <br><br>";
            echo "<a href='telaLogin.php'>Voltar</a>";

        }


        $conn->close();
        
    
?>