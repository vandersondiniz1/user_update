/*
# ---------------------------------------------------------------- #
# Script:        valida.js
# Description:   faz a validacao dos campos do formulario html
# Written by	 vanderson.lima
# Date:			 07.01.2020
#            	 Grupo Vicoa Brasil
# ---------------------------------------------------------------- #
*/
	function validar() {
		if(document.getElementById("telefone1").value == ""){
			alert('O Campo Telefone não Pode Ficar Vazio');
			document.getElementById("telefone1").focus();
		return false
		}
		
		var telefone = document.getElementById("telefone1").value;
		exp = /\d{2}[9]\d{4}\d{4}/;
		
		if(!exp.test(telefone)){
                alert('Numero de Telefone Inválido!');
				document.getElementById("telefone1").focus();
				return false;
		}
		
		var email = document.getElementById("email").value
		
		if(email == "" || email.indexOf('@') == -1 ){
			alert('Preencha o Campo E-mail.');
			document.getElementById("telefone1").focus();
        return false;
        }
		
	}		