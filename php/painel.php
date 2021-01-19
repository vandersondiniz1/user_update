<?php
# ---------------------------------------------------------------- #
# Script:        painel.php
# Description:   apresenta opcoes de consulta, alteracao de dados[...]
# Adapted by	 vanderson.lima/antonio.silva
# Date:			 30.12.2020
#            	 Grupo Vicoa Brasil
# ---------------------------------------------------------------- #

#VERIFICA SE O USUARIO ESTA LOGADO
include('verifica_login.php');
?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GVB - Painel do Usuário</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../css/dashboard.css">
</head>

<body>  
    <div id="page-home">
    <form >
        <div class="content">
            <header>
                <img src="../images/logo.png" alt="logo" width="350">
            </header>
        
            <main>
                <!-- <p>Bem vindo(a)! <?php echo $_SESSION['usuario'];?></p> -->
                <h1>Selecione</h1>
                <a href="read.php">
                    <span> <i class="fa fa-arrow-circle-o-right" aria-hidden="true"> </i> </span>
                    <strong>
                     Consultar dados
                    </strong>
                </a>

                <a href="logout.php">
                    <span> <i class="fa fa-sign-out" aria-hidden="true"></i> </span>
                    <strong>
                    Sair
                    </strong>
                </a>
                
            </main>
            </form>
        </div>
    </div>


</body>

</html>
