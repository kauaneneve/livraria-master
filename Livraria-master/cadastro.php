<?php

$pdo = new PDO('mysql:host=localhost;dbname=livraria','root','');


$sql = $pdo->prepare("SELECT * FROM cadastrousuario WHERE email");
    if ($sql->execute()){
        $info = $sql->fetchALL(PDO::FETCH_ASSOC);

if(isset($_POST['acao'])){
  

     $nome = $_POST['nome'];
     $email = $_POST['email'];
     $senha = $_POST['senha'];
                  

 

    $sql = $pdo->prepare("INSERT INTO cadastrousuario (codigo,nome,email,senha) 
                          values (null,?,?,?)");
    if ($sql->execute(array($nome,$email,$senha))) {
        echo 'cadastro com sucesso';
    } else {
        echo 'erro ao cadastrar';
    }
 }
}       
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>cadastro</title>
    <style>
    fieldset{
        width: 20%;
    }
    body {
        background-color: #dfcfe2;
    }
    </style>
    <script>
    function alerta(){

          texto1 = document.getElementById('senha').value;
          texto2 = document.getElementById('confirme').value;
          
           if (texto1 != texto2){
             alert("senhas não conferem");
             return false;
       }
    }
    </script>

</head>
<body>
      <title>tarefa</title>
      <style>
        body {
            background-image: url("imagens/livrinho.jpg");
        }
    </style>
</head>
<body>
       <form action="" method="post">
       <fieldset>
           <legend>cadastro de usuario</legend>
           <label for="nome">Nome:</label>
           <input type="text" name="nome" required>
           <br>
           <label for="email">email:</label>
           <input type="text" name="email" required>
           <br>
           <label for="senha">Senha:</label>
           <input type="password" name="senha" id="senha" required>
           <br>
           
        </fieldset>
         
           <input type="submit" name="acao" value="Cadastrae">
       </form>
</body>
</html>
    
</body>
</html>