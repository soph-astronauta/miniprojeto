<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Login</h2>

    <?php if(isset($_SESSION['error'])) {echo "<p style= 'color:red>" . $_SESSION['error'] . "</p>"; unset($_SESSION['error']); } ?>
    <form action="login.php" method="POST">
    <label> usuário:</label>
    <input type="text" name="username" id=""><br>
    <label>Senha:</label>
    <input type="password" name="password" id=""><br>
    <button type="submit">Entrar</button>
    </form>

    <?php
session_start();
$usuario = "admin";
$senha = "1234";

if ($_POST['username'] == $usuario && $_POST['password'] == $senha) {
    $_SESSION['loggedin'] = true;
    header("Location: home.php");
    exit;
} else {
    $_SESSION['error'] = "Usuário ou senha incorretos.";
    header("Location: index.php");
    exit;
}


<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Página Inicial</title>
</head>
<body>
    <h2>Bem-vindo!</h2>
    <a href="logout.php">Sair</a>
</body>
</html>

<?php
session_start();
session_destroy();
header("Location: index.php");
exit;


</body>
</html>