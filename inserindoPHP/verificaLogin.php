<?phpsession_start();
$erro="";
if(!isset($_POST["login"])or($_POST["login"]==""))
    $erro = "Preencha o login";
elsif(
    !isset($_POST["senha"])or($_POST["senha"]==""))
    $erro = "Preencha a senha";
else{
    $login = $_POST["login"];
    $senha = $_POST["senha"];
        if($login!="admin" or $senha!="1234"){
            $erro="Login ou senha inválidos"
        }
        else {
            $_SESSION["usuario"] = "Administrador";
        }
    }

    if($erro !="")
        header("Location: formLogin.php?erro=$erro",true,301);
    else
        header("Location: protegida.php",true,301);

?>

