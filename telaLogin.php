<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>


    <div class="site" align="center">
        
        <form method = "post" action = "telaUsuario.php">

            <Fieldset>
                <legend><b>Login</b></legend><br>
                
                <left>
                    <label for="usuario">Nick:</label><br>
                    <input type="text" id="user" required="required" name="user" >
                </left><br><br>

                <mid>
                    <label for="senha">Senha:</label><br>
                    <input type="text" id="senha" required="required" name="senha" >
                </mid><br><br>

                <input type="submit" name= "entrar" value="Entrar"  ><br><br>

                <a href="telaCadastro.php">cadastre-se</a>
                

            </Fieldset>
        
        </form>
        
    </div><br>

    
</body>
</html>