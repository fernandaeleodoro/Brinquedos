<?php
include 'infraestrutura/connect.php';

<<<<<<< HEAD
=======
include 'infraestrutura/connect.php';

>>>>>>> e457c9ed265c6e4d2c89093080365516a8732e61
$sql = "SELECT * FROM brinquedos";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Erro na consulta: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<<<<<<< HEAD
=======

>>>>>>> e457c9ed265c6e4d2c89093080365516a8732e61
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lista de Brinquedos</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="../css/style.css">
</head>
=======

    <link rel="stylesheet" href="estilos/style.css">
</head>

>>>>>>> e457c9ed265c6e4d2c89093080365516a8732e61
<body>
<main>

    <h1>Lista de Brinquedos</h1>
<<<<<<< HEAD
    <a href="cad_brinquedo.php">Cadastrar novo brinquedo</a>
=======

    <a href="public/cad_brinquedo.php">Cadastrar novo brinquedo</a>
>>>>>>> e457c9ed265c6e4d2c89093080365516a8732e61

    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Faixa Etária</th>
                <th>Preço</th>
                <th>Categoria</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>

            <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                <tr>
<<<<<<< HEAD
                    <td><?php echo htmlspecialchars($row['id']); ?></td>
                    <td><?php echo htmlspecialchars($row['nome']); ?></td>
                    <td><?php echo htmlspecialchars($row['faixa_etaria']); ?></td>
                    <td>R$ <?php echo number_format($row['preco'], 2, ',', '.'); ?></td>
                    <td><?php echo htmlspecialchars($row['categoria']); ?></td>
                    <td>
                        <a href="editar_brinquedo.php?id=<?php echo $row['id']; ?>">Editar</a> |
                        <a href="excluir_brinquedos.php?id=<?php echo $row['id']; ?>"
                           onclick="return confirm('Tem certeza que deseja excluir este brinquedo?');">
                        
                        </a>
=======

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['nome']; ?></td>

                    <td><?php echo $row['faixa_etaria']; ?></td>

                    <td><?php echo $row['preco']; ?></td>

                    <td><?php echo $row['categoria']; ?></td>

                    <td>

                        <a href="public/editar_brinquedo.php?id=<?php echo $row['id']; ?>">
                            Editar
                        </a>

                        |

                        <a href="public/excluir_brinquedos.php?id=<?php echo $row['id']; ?>"
                           onclick="return confirm('Tem certeza que deseja excluir este brinquedo?');">
                            Excluir
                            
                        </a>

>>>>>>> e457c9ed265c6e4d2c89093080365516a8732e61
                    </td>

                </tr>

            <?php } ?>

        </tbody>

    </table>
</main>

<<<<<<< HEAD
<?php
mysqli_free_result($result);
mysqli_close($conn);
?>
=======
    <?php

    mysqli_free_result($result);
    mysqli_close($conn);

    ?>

</main>

>>>>>>> e457c9ed265c6e4d2c89093080365516a8732e61
</body>
</html>