<?php

include '../infraestrutura/connect.php';
if(!isset($conn) || !$conn === null){
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM brinquedos";
$result = mysqli_query($conn, $sql);
if ($result === false) {
    die("Error ao consultar brinquedos: " . mysqli_error($conn));
}

if ( $_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $faixa etaria = $_POST['faixa_etaria'];
    $preco = $_POST['preco'];
    $categoria = $_POST['categoria'];

    $sql = "INSERT INTO brinquedos (nome, faixa_etaria, preco, categoria) VALUES ('$nome', '$faixa_etaria', '$preco', '$categoria')";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt === false) {
        die("Erro ao preparar a consulta: " . mysqli_error($conn)); {
    
        }

        mysqli_stmt_bind_param($stmt, "ssds", $nome, $faixa_etaria, $preco, $categoria);
        if (mysqli_stmt_execute($stmt)) {
            echo "Brinquedo adicionado com sucesso!";
            echo "<br><a href='index.php'>Voltar para a lista de brinquedos</a>";

        exit();
    } else {

        echo "Erro ao adicionar brinquedo: " . mysqli_error($conn);
    }
    ?>
    <!doctype html>
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
            <input type="text" id="faixa_etaria" name="faixa_etaria" required><br><br>
             <br>


            <label for="preco">Preço:</label>
            <input type="number" id="preco" name="preco" step="0.01" required><br><br>
            <br>


            <label for="categoria">Categoria:</label>
            <input type="text" id="categoria" name="categoria" required><br><br>
            <br>


        <label for ="usuario">Usuário:</label>
        <select name="usuario" id="">
            <OPTION value="">Selecione um usuário</OPTION>
             
            <?PHP

            WHILE ($USUARIO = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $USUARIO['id'] . "'>" . $USUARIO['nome'] . "</option>";
            }
            ?>

            </SELECT>
            <br>
            <button type="submit">Cadastrar brinquedo</button>
            </form>
            <button type="button" onclick="window.location.href='index.php'">Voltar</button>

    
    </body>
    </html>