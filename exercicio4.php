<!--Desenvolvido por Lucas De Carvalho Praxedes-->
  <!--DATA 05/09/2024 -->
  <!--Professor: Luís Alberto Pires de Oliveira-->
  <!--Lista de exercício PHP 03/09/24-->
  <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
</head>
<body>

<h2>Calculadora Simples</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacao = $_POST['operacao'];
    
    if (is_numeric($numero1) && is_numeric($numero2)) {
        switch ($operacao) {
            case '+':
                $resultado = $numero1 + $numero2;
                echo "<p>Resultado: $numero1 + $numero2 = $resultado</p>";
                break;
            case '-':
                $resultado = $numero1 - $numero2;
                echo "<p>Resultado: $numero1 - $numero2 = $resultado</p>";
                break;
            case '*':
                $resultado = $numero1 * $numero2;
                echo "<p>Resultado: $numero1 * $numero2 = $resultado</p>";
                break;
            case '/':
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                    echo "<p>Resultado: $numero1 / $numero2 = $resultado</p>";
                } else {
                    echo "<p>Não é possível dividir por zero.</p>";
                }
                break;
            default:
                echo "<p>Operação inválida!</p>";
        }
    } else {
        echo "<p>Por favor, insira números válidos.</p>";
    }
}
?>

<form method="POST">
    <label for="numero1">Número 1:</label>
    <input type="number" id="numero1" name="numero1" required><br><br>

    <label for="numero2">Número 2:</label>
    <input type="number" id="numero2" name="numero2" required><br><br>

    <label for="operacao">Selecione a operação:</label>
    <select id="operacao" name="operacao" required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br><br>

    <input type="submit" value="Calcular">
</form>

</body>
</html>