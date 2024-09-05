  <!--Desenvolvido por Lucas De Carvalho Praxedes-->
  <!--DATA 05/09/2024 -->
  <!--Professor: Luís Alberto Pires de Oliveira-->
  <!--Lista de exercício PHP 03/09/24-->
  
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Idade</title>
</head>
<body>

<h2>Cadastro</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idade = $_POST['idade'];

    if ($idade < 18) {
        echo "<p>Você não pode se cadastrar, pois é menor de 18 anos.</p>";
    } else {
        echo "<p>Cadastro permitido!</p>";
    }
}
?>

<form method="POST">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br><br>
    
    <label for="idade">Idade:</label>
    <input type="number" id="idade" name="idade" required><br><br>

    <input type="submit" value="Cadastrar">
</form>

</body>
</html>
