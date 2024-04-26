<?php
include_once('conexao.php');

$sql = "SELECT * FROM fale_conosco ORDER BY 1";

$result = $conn->query($sql);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/sistema.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>Sistema</title>
</head>

<body>
    <section>
        <div class="container">
            <h1>Mensagens dos alunos</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Assunto</th>
                        <th scope="col">Mensagem</th>
                    </tr>
                </thead>
                <tbody class="bw">
                    <?php
                    while ($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td width=\"20px\">" . $user_data['id'] . "</td>";
                        echo "<td width=\"200px\">" . $user_data['nome'] . "</td>";
                        echo "<td width=\"250px\">" . $user_data['email'] . "</td>";
                        echo "<td width=\"30px\">" . $user_data['assunto'] . "</td>";
                        echo "<td width=\"350px\">" . $user_data['mensagem'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <h2><a href="../html/index.html">Voltar para a página principal</a></h2>
        </div>

    </section>
</body>

</html>