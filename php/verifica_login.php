<?php
# ---------------------------------------------------------------- #
# Script:        verifica_login.php
# Description:   inicia uma sessao de login 
# Adapted by	 vanderson.lima
# Date:			 30.12.2020
#            	 Grupo Vicoa Brasil
# ---------------------------------------------------------------- #

#INICIA A SESSAO
session_start();
if(!$_SESSION['usuario']) {
	header('Location: index.php');
	exit();
}