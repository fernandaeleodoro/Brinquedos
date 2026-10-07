<?php
<<<<<<< HEAD
include '../infraestrutura/connect.php';
if(!isset($conn) || !$conn === null){
    die("Connection failed: " . mysqli_connect_error());
}

$id = isset($_GET['id']) ? $_GET['id'] :0;

$sql = "SELECT * FROM brinquedos WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
=======

include '../infraestrutura/connect.php';

if (!$conn) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

if ($id <= 0) {
    die("Brinquedo não encontrado.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST['nome'];
    $faixa_etaria = $_POST['faixa_etaria'];
    $preco = $_POST['preco'];
    $categoria = $_POST['categoria'];

    $sql = "UPDATE brinquedos 
            SET nome = ?, faixa_etaria = ?, preco = ?, categoria = ?
            WHERE id = ?";

    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt === false) {
        die("Erro ao preparar a consulta: " . mysqli_error($conn));
    }

    mysqli_stmt_bind_param(
        $stmt,
        "ssdsi",
        $nome,
        $faixa_etaria,
        $preco,
        $categoria,
        $id
    );

    if (mysqli_stmt_execute($stmt)) {

        echo "Brinquedo atualizado com sucesso!";
        echo "<br><br>";
        echo "<a href='../index.php'>Voltar para a lista de brinquedos</a>";

        exit();

    } else {

        echo "Erro ao atualizar brinquedo: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
}

$sql = "SELECT * FROM brinquedos WHERE id = ?";

$stmt = mysqli_prepare($conn, $sql);

if ($stmt === false) {
    die("Erro ao preparar a consulta: " . mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "i", $id);

mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

>>>>>>> e457c9ed265c6e4d2c89093080365516a8732e61
$brinquedo = mysqli_fetch_assoc($result);

if (!$brinquedo) {
    die("Brinquedo não encontrado.");
}

<<<<<<< HEAD
$sql = "sELECT * FROM brinquedos";
$result = mysqli_query($conn, $sql);

if ($result === false) {
    die("Error ao consultar brinquedos: " . mysqli_error($conn));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $faixa_etaria = $_POST['faixa_etaria'];
    $preco = $_POST['preco'];
    $categoria = $_POST['categoria'];

    $sql = "UPDATE brinquedos SET nome = ?, faixa_etaria = ?, preco = ?, categoria = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssdsi", $nome, $faixa_etaria, $preco, $categoria, $id);

    if (mysqli_stmt_execute($stmt)) {
        echo "Brinquedo atualizado com sucesso!";
        echo "<br><a href='index.php'>Voltar para a lista de brinquedos</a>";
        exit();
    } else {
        echo "Erro ao atualizar brinquedo: " . mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Brinquedo</title>
    <link rel="stylesheet" href="../css/style.css">
=======
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Editar Brinquedo</title>

    <link rel="stylesheet" href="../estilos/style.css">
>>>>>>> e457c9ed265c6e4d2c89093080365516a8732e61

</head>

<body>
<<<<<<< HEAD
   
    <form method="POST">
        <label for="nome">Nome do Brinquedo:</label>
        <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($brinquedo['nome']); ?>" required>
        <br>

        <label for="faixa_etaria">Faixa Etária:</label>
        <input type="text" id="faixa_etaria" name="faixa_etaria" value="<?php echo htmlspecialchars($brinquedo['faixa_etaria']); ?>" required>
        <br>

        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.01" value="<?php echo htmlspecialchars($brinquedo['preco']); ?>" required>
        <br>

        <label for="categoria">Categoria:</label>
        <input type="text" id="categoria" name="categoria" value="<?php echo htmlspecialchars($brinquedo['categoria']); ?>" required>

        <br>
        
        <button type="submit">Atualizar</button>
    </form>
    <button onclick="window.location.href='index.php'">Voltar</button>

</body>
=======

    <h1>Editar Brinquedo</h1>

    <form method="POST">

        <label for="nome">Nome do Brinquedo:</label>

        <input
            type="text"
            id="nome"
            name="nome"
            value="<?php echo htmlspecialchars($brinquedo['nome']); ?>"
            required
        >

        <br><br>

        <label for="faixa_etaria">Faixa Etária:</label>

        <input
            type="text"
            id="faixa_etaria"
            name="faixa_etaria"
            value="<?php echo htmlspecialchars($brinquedo['faixa_etaria']); ?>"
            required
        >

        <br><br>

        <label for="preco">Preço:</label>

        <input
            type="number"
            id="preco"
            name="preco"
            step="0.01"
            min="0"
            value="<?php echo htmlspecialchars($brinquedo['preco']); ?>"
            required
        >

        <br><br>

        <label for="categoria">Categoria:</label>

        <input
            type="text"
            id="categoria"
            name="categoria"
            value="<?php echo htmlspecialchars($brinquedo['categoria']); ?>"
            required
        >

        <br><br>

        <button type="submit">Atualizar</button>

    </form>

    <br>

    <button type="button" onclick="window.location.href='../index.php'">
        
    </button>

</body>

>>>>>>> e457c9ed265c6e4d2c89093080365516a8732e61
</html>