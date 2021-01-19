<?php
# ---------------------------------------------------------------- #
# Script:        read.php
# Description:   responsavel por fazer um select na tabela table_name
# Written by	 vanderson.lima/antonio.silva
# Date:			 30.12.2020
#            	 Grupo Vicoa Brasil
# ---------------------------------------------------------------- #

#VERIFICA SE O USUARIO ESTA LOGADO
include('verifica_login.php');

#IMPORTA O ARQUIVO DE CONFIGURACAO
require_once "config.php";

#PEGAR O PARAMETRO DO FORMULARIO PARA FAZER A COMPARACAO  
#$cpf = $_POST['cpf'];

#CRIA A STRING DE CONEXAO
#$sql = "SELECT * FROM table_name WHERE cpf = '$usuario_logado'";

#PEGA O NOME DO USUARIO QUE ESTA CONECTADO
$login_crm = $_SESSION['usuario'];

#CRIA A STRING DE CONEXAO
$sql = "SELECT * FROM table_name WHERE login = '$login_crm'";

#EXECUTA A STRING DE CONEXAO
$result = mysqli_query($conn, $sql);

#SE O NUMERO DE LINHAS FOR MAIOR QUE ZERO...PERCORRE
if (mysqli_num_rows($result) > 0) {

  #ENQUANTO TIVER REGISTRO, VAI PEGANDO E IMPRIMINDO
  while($row = mysqli_fetch_assoc($result)) 
  { 
	$nome = $row["nome"];
	$telefone1 = $row["telefone1"];
	$endereço = $row["logradouro"];
	$email = $row["email"];
	$estado_civil = $row["estado_civil"];
	$escolaridade = $row["escolaridade"];
  }
} else {
	
	#EMITE UM ALERT 
	echo "<script>window.alert('CPF NÃO ENCONTRADO. REDIRECIONANDO...');</script>";
	
	#REDIRECIONA PARA A PAGINA CONSULTAR_DADOS
	header("Refresh:1;url=consultar_dados.php");
}
#FECHA A CONEXAO
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Consultar dados</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/read.css">
</head>
<body>

	<form action="">
<table>
  <tr>
    <th>Campo</th>
    <th>Valor</th>
  </tr>
  <tr>
    <td>Nome</td>
    <td> <?php echo  $nome;  ?>  </td>
	</tr>
	<tr>
    <td>Telefone</td>
    <td> <?php echo  $telefone1;  ?>  </td>
	</tr>
	<tr>
    <td>Endereço</td>
    <td> <?php echo  $endereço;  ?>  </td>
	</tr>
	<tr>
    <td>Email</td>
    <td> <?php echo  $email;  ?>  </td>
	</tr>
	<tr>
    <td>Estado Civil</td>
    <td> <?php echo  $estado_civil;  ?>  </td>
	</tr>
	<tr>
    <td>Escolaridade</td>
    <td> <?php echo  $escolaridade;  ?>  </td>
  </tr>
</table>


<div class="field-group">
	<div class="field">
	<a href='painel.php'>
		<span> <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> </span>
		<strong>
		Voltar
		</strong>
	</a>
	</div>

	<div class="field">
	<a href='atualizar_cadastro.php'>
	<span> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </span>
	<strong>	
	Corrigir
	</strong>
	</a>
	</div>
</div>
</form> 
</body>
</html>