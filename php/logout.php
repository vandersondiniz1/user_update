<?php
# ---------------------------------------------------------------- #
# Script:        painel.php
# Description:   apresenta opcoes de consulta, alteracao de dados[...]
# Adapted by	 vanderson.lima
# Date:			 30.12.2020
#            	 Grupo Vicoa Brasil
# ---------------------------------------------------------------- #

#INICIA A SESSAO
session_start();

#ENCERRA A SESSAO
session_destroy();

#REDIRECIONA PARA A PAGINA INICIAL
header('Location: index.php');
exit();