<?php

include '../infraestrutura/connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $faixa_etaria = $_POST['faixa_etaria'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    $sql = "INSERT INTO brinquedos
            (nome, categoria, faixa_etaria, preco, quantidade)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    if (!$stmt) {
        die("Erro ao preparar o cadastro: " . mysqli_error($conn));
    }

    mysqli_stmt_bind_param(
        $stmt,
        "sssdi",
        $nome,
        $categoria,
        $faixa_etaria,
        $preco,
        $quantidade
    );

    if (mysqli_stmt_execute($stmt)) {

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        header("Location: ../index.php");
        exit();

    } else {

        echo "Erro ao cadastrar: " . mysqli_stmt_error($stmt);

    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastrar Brinquedo</title>

    <link rel="stylesheet" href="../estilos/style.css">

</head>

<body>

    <main>

        <h1>Cadastrar Brinquedo</h1>

        <form method="POST">

            <label for="nome">
                Nome:
            </label>

            <input
                type="text"
                id="nome"
                name="nome"
                value="Barbie"
                required
            >

            <label for="categoria">
                Categoria:
            </label>

            <input
                type="text"
                id="categoria"
                name="categoria"
                value="Bonecas"
                required
            >

            <label for="faixa_etaria">
                Faixa Etária:
            </label>

            <input
                type="text"
                id="faixa_etaria"
                name="faixa_etaria"
                value="5 a 10 anos"
                required
            >

            <label for="preco">
                Preço:
            </label>

            <input
                type="number"
                id="preco"
                name="preco"
                value="59.90"
                step="0.01"
                min="0"
                required
            >

            <label for="quantidade">
                Quantidade em estoque:
            </label>

            <input
                type="number"
                id="quantidade"
                name="quantidade"
                value="10"
                min="0"
                required
            >

            <button type="submit">
                Cadastrar brinquedo
            </button>

        </form>

        <a class="voltar" href="../index.php">
            Voltar
        </a>

    </main>

</body>

</html>