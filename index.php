<?php
include 'infraestrutura/connect.php';

$sql = "SELECT * FROM brinquedos";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Erro na consulta: " . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Brinquedos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<main>
    <h1>Lista de Brinquedos</h1>
    <a href="cad_brinquedo.php">Cadastrar novo brinquedo</a>

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
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</main>

<?php
mysqli_free_result($result);
mysqli_close($conn);
?>
</body>
</html>