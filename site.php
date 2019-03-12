<!DOCTYPE html PUBLIC
    "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    session_start();
    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('location:index.php');
    }
    $logado = $_SESSION['login'];
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<table width="800" height="748" border="1">
    <tr>
        <td height="90" colspan="2" bgcolor="#CCCCCC">SISTEM WEB TESTE
            <?php
            echo" Bem vindo $logado";
            ?>
        </td>
    </tr>
</table>
</body>
</html>