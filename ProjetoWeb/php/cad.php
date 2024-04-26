<?php
//Verifica se há informação no submit
if (isset($_POST['cadastrar']) && !empty($_POST)) {
    include_once('conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];

    $result = mysqli_query(
        $conn,
        "INSERT INTO tab_login(email, senha, nome, sobrenome) VALUES ('$email', '$senha', '$nome', '$sobrenome')"
    );

    header('Location: login.php');
}
