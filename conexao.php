<?php
$host    = "localhost";
$user    = "root";
$pass    = "";
$banco   = "bdcar";
$conexao = mysqli_connect($host,$user,$pass) or die(mysqli_error($conexao));
mysqli_select_db($conexao, $banco);
?>