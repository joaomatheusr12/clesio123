<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Verificação básica
    if ($username === 'admin' && $password === 'admin') {
        header('Location: templates/pages/inicio.php');
        exit;
    } else {
        $error = "Usuário ou senha incorretos!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Simples</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; }
        .login-box { width: 300px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; }
        input { display: block; margin-bottom: 10px; padding: 8px; width: 100%; box-sizing: border-box; }
        button { padding: 8px 15px; background: #007bff; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        
        <?php if (!empty($error)): ?>
            <p style="color: red;"><?= $error ?></p>
        <?php endif; ?>
        
        <form method="post">
            <input type="text" name="username" placeholder="Usuário" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>