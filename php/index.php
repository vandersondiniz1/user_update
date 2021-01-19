<?php
# ---------------------------------------------------------------- #
# Script:        index.php
# Description:   pagina inicial
# Written by	 vanderson.lima/antonio.silva
# Date:			 30.12.2020
#            	 Grupo Vicoa Brasil
# ---------------------------------------------------------------- #

#INICIA A SESSAO
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>GVB - Login</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>

<?php
				if(isset($_SESSION['nao_autenticado'])):
				echo "<script>window.alert('Dados Incorretos');</script>";
			?>
			<?php
				endif;
				unset($_SESSION['nao_autenticado']);
			?>

				<div id="page-login" >
					<form action="login.php" method="post">
					<img src="../images/logo_vicoa.png" alt="logo">
					<div class="field">
						<label htmlFor="usuario"> Usuário </label>
						<input name="usuario" type="text" placeholder="Usuário" required="required">
					</div>
					<div class="field">
						<label htmlFor="senha"> Senha </label>
						<input name="senha" type="password" placeholder="Senha" required="required">					
					</div>
					<div class="button-login">
						<button type="submit"  value="Login">
							<span> <i class="fa fa-sign-in" aria-hidden="true"></i> </span>
							 <strong>Acessar</strong>
							</button>
					</div>
				</form>
				</div>
 
</body>
</html>