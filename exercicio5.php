<!--Desenvolvido por Lucas De Carvalho Praxedes-->
  <!--DATA 05/09/2024 -->
  <!--Professor: Luís Alberto Pires de Oliveira-->
  <!--Lista de exercício PHP 03/09/24-->
  <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Login</title>
</head>
<body>
<h2>Login</h2>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    if ($usuario == "admin" && $senha == "1234") {
        echo "<p>Login bem-sucedido</p>";
    } else {
        echo "<p>Login ou senha incorretos</p>";
    }
}
?>
<form method="POST">
    <label for="usuario">Usuário:</label>
    <input type="text" id="usuario" name="usuario" required><br><br>
    
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required><br><br>

    <input type="submit" value="Entrar">
</form>
</body>
</html>
