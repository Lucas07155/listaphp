<!--Desenvolvido por Lucas De Carvalho Praxedes-->
  <!--DATA 05/09/2024 -->
  <!--Professor: Luís Alberto Pires de Oliveira-->
  <!--Lista de exercício PHP 03/09/24-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de Opções</title>
</head>
<body>
<h2>Menu de Opções</h2>
<?php
$saldo = 1000.00; // Saldo inicial
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $opcao = $_POST['opcao'];
    switch ($opcao) {
        case '1':
            echo "<p>Seu saldo atual é: R$ $saldo</p>";
            break;
        case '2':
            echo "<p>Você escolheu Depositar.</p>";
            break;
        case '3':
            echo "<p>Você escolheu Sacar.</p>";
            break;
        case '4':
            echo "<p>Você escolheu Sair. Até logo!</p>";
            break;
        default:
            echo "<p>Opção inválida. Tente novamente.</p>";
            break;
    }
}
?>
<form method="POST">
    <label for="opcao">Escolha uma opção:</label><br><br>
    <input type="radio" id="verSaldo" name="opcao" value="1" required>
    <label for="verSaldo">1 - Ver Saldo</label><br>
    <input type="radio" id="depositar" name="opcao" value="2">
    <label for="depositar">2 - Depositar</label><br>
    <input type="radio" id="sacar" name="opcao" value="3">
    <label for="sacar">3 - Sacar</label><br>
    <input type="radio" id="sair" name="opcao" value="4">
    <label for="sair">4 - Sair</label><br><br>
    <input type="submit" value="Enviar">
</form>
</body>
</html>
