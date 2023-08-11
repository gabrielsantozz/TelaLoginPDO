<?php

    require_once('classes/Usuario.php');
    require_once('conexao/conexao.php');

    $database = new Conexao();
    $db = $database->getConnection();
    $usuario = new Usuario($db);

    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confSenha = $_POST['confSenha'];

        if($usuario->cadastrar($nome,$email,$senha,$confSenha)){
            echo "Cadastro realizado com sucesso";
        }else{
            echo "Erro ao cadastrar";
        }
    }

?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    
    <form method = "POST">
        <label for="Email">Nome</label>
        <input type="text" name = "nome" placeholder = "Coloque seu nome" REQUIRED>
        <label for="Email">E-mail</label>
        <input type="email" name = "email" placeholder = "Coloque seu email" REQUIRED>
        <label for="Senha">Senha</label>
        <input type="password" name = "senha" placeholder = "Coloque sua senha" REQUIRED>
        <label for="Senha">Confirme sua senha</label>
        <input type="password" name = "confSenha" placeholder = "Coloque sua senha" REQUIRED>

        <button type="submit" name="cadastrar">Cadastrar</button>
    </form>
        <a href="index.php">Clique aqui para logar</a>
    
</body>
</html>