<?php
# ---------------------------------------------------------------- #
# Script:        login.php
# Description:   realiza o login 
# Written by	 vanderson.lima
# Date:			 30.12.2020
#            	 Grupo Vicoa Brasil
# ---------------------------------------------------------------- #

#INICIA A SESSAO
session_start();

#IMPORTA O ARQUIVO DE CONFIGURACAO DO BANCO DE DADOS
include('login_config.php');

#SE OS CAMPOS FOREM VAZIOS, REDIRECIONA PARA A PAGINA INICIAL
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

#PEGA OS CAMPOS DE FORMULARIO VIA POST HTML
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

#CRIA UMA CONSULTA SQL
$query = "select nome from table_name where login_crm = '{$usuario}' and senha_crm = '{$senha}'";

#EXECUTA A CONSULTA
$result = mysqli_query($conexao, $query);

#PEGA O NUMERO DE LINHAS DA EXECUCAO ACIMA
$row = mysqli_num_rows($result);

#SE O USUARIO FOR LOCALIZADO, REDIRECIONA PARA O PAINEL DE OPCOES
if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}