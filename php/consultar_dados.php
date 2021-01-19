<?php
# ---------------------------------------------------------------- #
# Script:        consultar_dados.php
# Description:   consulta dados do usuario via cpf
# Written by	 vanderson.lima
# Date:			 30.12.2020
#            	 Grupo Vicoa Brasil
# ---------------------------------------------------------------- #

#SO VAI PARA A PAGINA DE CONSULTA SE O USUARIO ESTIVER LOGADO
include('verifica_login.php');
?>

<html>
<head>
    <meta charset="utf-8">
	 <title>GVB - Consultar Dados</title>
	<link rel="stylesheet" href="../css/style_all.css">
<body>
	<nav class="menu">
      <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Cadastro</a>
              <ul>
                  <li><a href="consultar_dados.php">Consultar Dados</a></li>
				  <li><a href="atualizar_cadastro.php">Atualizar Dados</a></li>
              </ul>
          </li>
          <li><a href="logout.php">Logout</a></li>
      </ul>
	  <span>Usuario Logado</span>
	</nav>
	<span><?php echo $_SESSION['usuario'];?></span><br>

<form action="read.php" method="post">
 <!--<p>CPF: <input type="text" name="cpf" placeholder="apenas números"  /></p> -->
 <!--pattern="[0-9]{13}" maxlength="11" minlength="8"-->
 <p><input type="submit" value="Consultar Dados" /></p>
</form>

</body>
</html>
