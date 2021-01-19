<?php
# ---------------------------------------------------------------- #
# Script:        update.php
# Description:   responsavel por atualizar registros na base de dados
# Written by	 vanderson.lima
# Date:			 30.12.2020
#            	 Grupo Vicoa Brasil
# ---------------------------------------------------------------- #

#SO ENTRA NESTA PAGINA, UPDATE.PHP, SE ESTIVER LOGADO
include('verifica_login.php');

#RECUPERA AS INFORMACOES DE CONEXAO
require_once "config.php";

#PEGA O NOME DO USUARIO QUE ESTA CONECTADO
$login_crm = $_SESSION['usuario'];

#PEGA OS PARAMETROS DO FORMULARIO HTML, VIA POST
$estado_civil=$_POST["estado_civil"];
$telefone1=$_POST["telefone1"];
$telefone2=$_POST["telefone2"];
$logradouro=$_POST["logradouro"];
$email=$_POST["email"];
$escolaridade=$_POST["escolaridade"];

#CRIA UMA STRING DE CONEXAO

$sql = "UPDATE tableName SET 
		telefone1='$telefone1',
		telefone2='$telefone2',
		email='$email',
		logradouro='$logradouro',
		escolaridade='$escolaridade',
		estado_civil='$estado_civil'
		WHERE login='$login_crm'";

#EXECUTA A STRING DE CONEXAO
$result = mysqli_query($conn, $sql);

#SE CONSEGUIR EXECUTAR A CONSULTA, SUCESSO, DO CONTRARIO, ERRO
if ($conn->query($sql) === TRUE) {
	echo "<script>window.alert('Dados Atualizados com Sucesso. REDIRECIONANDO...');</script>";
	header("Refresh:1;url=read.php");
} else {
  echo "Error updating record: " . $conn->error;
}

//FECHA A CONEXAO
$conn->close();
?>
