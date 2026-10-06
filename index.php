<?php

include  'infraestrutura/connect.php';
$sql = "SELECT * FROM brinquedos";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Brinquedos</title>
<link rel="stylesheet" href="estilos/style.css">  


<body>

<main>
    <h1>Lista de Brinquedos</h1>
<a href="public/cad_brinquedo.php">Cadastrar novo brinquedo</a>  
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
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nome']; ?></td>
                    <td><?php echo $row['faixa_etaria']; ?></td>
                    <td><?php echo $row['preco']; ?></td>
                    <td><?php echo $row['categoria']; ?></td>
                    <td>
                        <a href="editar_brinquedo.php?id=<?php echo $row['id']; ?>">Editar</a> |
                        <a href="excluir_brinquedos.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir este brinquedo?');">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php
    mysqli_free_result($result);
    mysqli_close($conn);
    ?>