<?php
include '../infraestrutura/connect.php';
if(!isset($conn) || !$conn === null){
    die('error ao conectar ao banco de dados. ');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome']?? ' ';

    $sql ='iNSERT INTO brinquedos (nome) VALUES (?)';
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt === false) {
        die("Erro ao preparar a consulta: " . mysqli_error($conn));
    }
    mysqli_stmt_bind_param($stmt, "s", $nome);
    if (mysqli_stmt_execute($stmt)) {
        echo "Brinquedo adicionado com sucesso!";
        echo "<br><a href='index.php'>Voltar para a lista de brinquedos</a>";
        exit();
    } else {
        echo "Erro ao adicionar brinquedo: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Brinquedos</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>


    <form method="POST">
        <label for="nome">Nome do Brinquedo:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="faixa_etaria">Faixa Etária:</label>
        <input type="text" id="faixa_etaria" name="faixa_etaria" required>
        <br>
        <button type="buttoon" onclick="window.location.href='index.php'">Voltar</button>
        </body>
</html>