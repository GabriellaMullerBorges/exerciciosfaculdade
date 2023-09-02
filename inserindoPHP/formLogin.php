<html>
    <body>
        <h1>Login do usuário</h1>
        <?php
        if(isset($_GET["erro"]))
            echo("<hr/></h2>".$_GET['erro']."</h2><hr/>");
        ?>
        <form action="login.php" method="post">
            <p>login:<input type="text" name="login"/></p>
            <p>senha:<input type="password" name="senha"/></p>
            <input type="submit" value="envia">
        </form>
    </body>
</html>