<?php

$pdo = new PDO('mysql:host=localhost;dbname=livraria','root','');


$sql = $pdo->prepare("SELECT * FROM livros WHERE email");
    if ($sql->execute()){
        $info = $sql->fetchALL(PDO::FETCH_ASSOC);

if(isset($_POST['acao'])){
  

     $titulo = $_POST['titulo'];
     $estado = $_POST['estado'];
     $editora = $_POST['editora'];
     $telefone = $_POST['telefone'];
     $email = $_POST['email'];
     $lancamento = $_POST['lancamento'];
     $preco = $_POST['preco'];
     $autor = $_POST['autor'];
     
                  

    $sql = $pdo->prepare("INSERT INTO livros (id,titulo,estado,editora,telefone,email,lancamento,preco,autor) 
                          values (null,?,?,?,?,?,?,?,?)");
    if ($sql->execute(array($titulo,$estado,$editora,$telefone,$email,$lancamento,$preco,$autor))) {
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
    
    <title>cadastro do livro</title>
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
</head>
<body>
       <form action="" method="post">
       <fieldset>
           <legend>cadastro de usuario</legend>
           <label for="titulo">titulo:</label>
           <input type="text" name="titulo" required>
           <br>
           <label for="email">email:</label>
           <input type="text" name="email" required>
           <br>
           <label for="estado">estado:</label>
           <input type="text" name="estado" required>
           <br>
           <label for="editora">editora:</label>
           <input type="text" name="editora" required>
           <br>
           <label for="telefone">telefone:</label>
           <input type="text" name="telefone" required>
           <br>
           <label for="lancamento">lancamento:</label>
           <input type="text" name="lancamento" required>
           <br>
           <label for="preco">preco:</label>
           <input type="text" name="preco" required>
           <br>
           <label for="autor">autor:</label>
           <input type="text" name="autor" required>
           <br>
           
        
           
           
        </fieldset>
         
           <input type="submit" name="acao" value="Cadastrae">
       </form>
</body>
</html>
    
</body>
</html>
