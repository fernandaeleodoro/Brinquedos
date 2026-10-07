<?php

include 'infraestrutura/connect.php';

$sql = "SELECT * FROM brinquedos ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Erro ao buscar os brinquedos: " . mysqli_error($conn));
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lista de Brinquedos</title>

    <link rel="stylesheet" href="estilos/style.css">

</head>

<body>

    <main>

        <h1>Lista de Brinquedos</h1>

        <a class="botao" href="publico/cad_brinquedo.php">
            Cadastrar novo brinquedo
        </a>

        <table>

            <thead>

                <tr>

                    <th>ID</th>

                    <th>Nome</th>

                    <th>Categoria</th>

                    <th>Faixa Etária</th>

                    <th>Preço</th>

                    <th>Quantidade em Estoque</th>

                    <th>Ações</th>

                </tr>

            </thead>

            <tbody>

                <?php while ($brinquedo = mysqli_fetch_assoc($result)) { ?>

                    <tr>

                        <td>
                            <?php echo $brinquedo['id']; ?>
                        </td>

                        <td>
                            <?php echo htmlspecialchars($brinquedo['nome']); ?>
                        </td>

                        <td>
                            <?php echo htmlspecialchars($brinquedo['categoria']); ?>
                        </td>

                        <td>
                            <?php echo htmlspecialchars($brinquedo['faixa_etaria']); ?>
                        </td>

                        <td>
                            R$ <?php echo number_format($brinquedo['preco'], 2, ',', '.'); ?>
                        </td>

                        <td>
                            <?php echo $brinquedo['quantidade']; ?>
                        </td>

                        <td>

                            <a href="publico/editar_brinquedo.php?id=<?php echo $brinquedo['id']; ?>">
                                Editar
                            </a>

                            |

                            <a
                                href="publico/excluir_brinquedo.php?id=<?php echo $brinquedo['id']; ?>"
                                onclick="return confirm('Tem certeza que deseja excluir este brinquedo?');"
                            >
                                Excluir
                            </a>

                        </td>

                    </tr>

                <?php } ?>

            </tbody>

        </table>

    </main>

</body>

</html>

<?php

mysqli_free_result($result);

mysqli_close($conn);

?>