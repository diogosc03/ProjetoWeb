<?php 

    // Verificando se a informação está sendo recebida
    //print_r($_REQUEST);

    //Verifica se há informação no submit
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        
        //Se sim, Acessa
        include_once('conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];         

        //Verificando novamente se a informação está sendo recebida
        // print_r('Email: ' . $email);
        // echo '<br>';
        // print_r('Senha: ' . $senha);

        // Verifica se há no banco de dados o email e senha envidados        
        $sql = "SELECT * FROM tab_login WHERE email = '$email' and senha = '$senha'";

        $result = $conn->query($sql);

        // Verifica novamente
        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1){
            header('Location: login.php');
        }
        else{
            header('Location: sistema.php');
        }
    }
    else{
        //Se não,não acessa
        header('Location: login.php');
    }
?>