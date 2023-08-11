<?php 
session_start();
$conectado = $_SESSION['email'];
if(!$conectado){
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="bemvindo">
    <h1>Logado com sucesso <?php echo $_SESSION['email']; ?></h1>
    
    <h1>
        <a href="logout.php">Sair</a>
    </h1>
    </div>
</body>
</html>