<!--Desenvolvido por Lucas De Carvalho Praxedes-->
  <!--DATA 05/09/2024 -->
  <!--Professor: Luís Alberto Pires de Oliveira-->
  <!--Lista de exercício PHP 03/09/24-->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação Par ou Ímpar</title>
</head>
<body>

<h2>Verifique se o número é Par ou Ímpar</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero'];

    if (is_numeric($numero)) {
        if ($numero % 2 == 0) {
            echo "<p>O número $numero é Par.</p>";
        } else {
            echo "<p>O número $numero é Ímpar.</p>";
        }
    } else {
        echo "<p>Por favor, insira um número válido.</p>";
    }
}
?>

<form method="POST">
    <label for="numero">Digite um número:</label>
    <input type="number" id="numero" name="numero" required><br><br>
    
    <input type="submit" value="Verificar">
</form>

</body>
</html>
