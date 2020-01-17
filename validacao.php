<meta charset="UTF-8">

<?php
$login_user = $_POST['login'];
$senha_user = $_POST['senha'];

if ($login_user == "Jade" && $senha_user == "12345"){
    header('location: produtos.php');
} else {
    header('location: cadastro.php');
}
?>