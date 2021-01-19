<?php
# ---------------------------------------------------------------- #
# Script:        config.php
# Description:   configuracoes do banco de dados
# Written by	 vanderson.lima
# Date:			 30.12.2020
#            	 Grupo Vicoa Brasil
# ---------------------------------------------------------------- #
$servername = "XX.XXX.XX.XXX";
$username = "user";
$password = "pass";
$dbname = "DB";

#CRIA A STRING DE CONEXAO
$conn = mysqli_connect($servername, $username, $password, $dbname);
 
#VERIFICA SE A CONEXAO DEU CERTO
if($conn === false){
    die("ERROR: Conection Refused. " . mysqli_connect_error());
}
?>
