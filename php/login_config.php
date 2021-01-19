<?php
# ---------------------------------------------------------------- #
# Script:        login_config.php
# Description:   apresenta as configuracoes de conexao com a base de dados
# Written by	 vanderson.lima
# Date:			 30.12.2020
#            	 Grupo Vicoa Brasil
# ---------------------------------------------------------------- #
define('HOST', 'XX.XXX.XX.XXX');
define('USUARIO', 'user');
define('SENHA', 'pass');
define('DB', 'DB');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');