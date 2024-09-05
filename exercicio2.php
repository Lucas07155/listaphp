<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificação de Notas</title>
</head>
<body>

<h2>Classificação de Notas</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nota = $_POST['nota'];
    
    if ($nota >= 0 && $nota <= 10) {
        switch (true) {
            case ($nota == 10):
                echo "<p>Classificação: A</p>";
                break;
            case ($nota == 9):
                echo "<p>Classificação: B</p>";
                break;
            case ($nota == 8 || $nota == 7):
                echo "<p>Classificação: C</p>";
                break;
            case ($nota == 6 || $nota == 5):
                echo "<p>Classificação: D</p>";
                break;
            default:
                echo "<p>Classificação: E</p>";
                break;
        }
    } else {
        echo "<p>Nota inválida! Insira uma nota entre 0 e 10.</p>";
    }
}
?>

<form method="POST">
    <label for="nota">Digite a nota (0 a 10):</label>
    <input type="number" id="nota" name="nota" min="0" max="10" required><br><br>
    
    <input type="submit" value="Classificar">
</form>

</body>
</html>
