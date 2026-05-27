<?php

require "Usuario.class.php";

$usuario = new Usuario();
$usuario->conecta();

if(isset($_GET['id'])){
    $id = $_GET['id'];
} else{
    echo "ID não informado. Impossível editar o usuário";
    exit();
}

$dados = $usuario->localizarUsuario($id);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Alteração de Usuário</title>
</head>

<body>

<h2>Alteração de Usuário</h2>

<form action="editar_submit.php" method="post">

    <input type="hidden" name="id" value="<?=$dados['id']?>">

    <input type="text"
           name="nome"
           value="<?=$dados['nome']?>"
           placeholder="Informe seu nome">
    <br>

    <input type="text"
           name="email"
           value="<?=$dados['email']?>"
           placeholder="Informe o email">
    <br>

    <input type="password"
           name="senha"
           value="<?=$dados['senha']?>"
           placeholder="Informe sua senha">
    <br>

    <input type="submit" value="Alterar">

</form>

</body>
</html>