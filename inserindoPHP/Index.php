<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Primeiro código PHP com tags HTML</title>
</head>
<body>
    <h1>Teste de login</h1>
    <h2> 
        <a href="protegida.php">protegida</a>
    </h2>
    <hr/>
    <?php
    session_start();
    if(isset($_SESSION["usuario"])) {
    ?>
<a href="logout.php"></a>
    <?php
        }
    ?>

</body>
</html>
