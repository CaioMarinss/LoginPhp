<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>


    <form action="login.php" method="post">
            <h1>Login</h1>
        <label for="usr">E-mail:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>
        <br>
        
        <input type="submit" value="Entrar" class="enviar">

    </form>

</body>
</html>