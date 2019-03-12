<?php

session_start();
$login = $_POST['login'];
$senha = $_POST['senha'];

$con = mysql_connect("127.0.0.1", "root", "root") or die
("Sem conexão com o servidor");
$select = mysql_select_db("server") or die("Sem acesso ao DB");

// A variavel $result pega as varias $login e $senha, faz uma
//pesquisa na tabela de usuarios
$result = mysql_query("SELECT * FROM `USUARIO` 
WHERE `LOGIN` = '$login' AND `SENHA`= '$senha'");

if(mysql_num_rows ($result) > 0 )
{
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header('location:site.php');
}
else{
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    header('location:index.php');

}
?>