<?php
   # ---------------------------------------------------------------- #
   # Script:        atualizar_cadastro.php
   # Description:   atualiza os dados do usuario no banco de dado
   # Written by	 	vanderson.lima/antonio.silva
   # Date:			30.12.2020
   #            	Grupo Vicoa Brasil
   # ---------------------------------------------------------------- #
   
   #VERIFICA SE O USUARIO ESTA LOGADO
   include('verifica_login.php');
   
   #IMPORTA O ARQUIVO DE CONFIGURACAO
   require_once "config.php";
   
   #PEGA O NOME DO USUARIO QUE ESTA CONECTADO
   $login_crm = $_SESSION['usuario'];
   
   #CRIA A STRING DE CONEXAO
   $sql = "SELECT * FROM table_name WHERE login_crm = '$login_crm'";
   
   #EXECUTA A STRING DE CONEXAO
   $result = mysqli_query($conn, $sql);
   
   #SE O NUMERO DE LINHAS FOR MAIOR QUE ZERO...PERCORRE
   if (mysqli_num_rows($result) > 0) {
   
     #ARMAZENANDO OS DADOS EM VARIAVEIS PARA TRAZE-LOS COMO "VALUE" AOS INPUTS	
     while($row = mysqli_fetch_assoc($result)) 
     {  
   	$id = $row["id"];
   	$nome = $row["nome"];
   	$supervisor = $row["supervisor"];
   	$campanha = $row["campanha"];
   	$nacionalidade = $row["nacionalidade"];
   	$sexo = $row["sexo"];
   	$telefone1 = $row["telefone1"];
   	$telefone2 = $row["telefone2"];
   	$email = $row["email"];
   	$escolaridade = $row["escolaridade"];
   	$logradouro = $row["logradouro"];
   	$nascimento = $row["nascimento"];
   	$naturalidade = $row["naturalidade"];
   	$estado_civil = $row["estado_civil"];
   	$raca = $row["raca"];
   	$nome_mae = $row["nome_mae"];
   	$nome_pai = $row["nome_pai"];
   	$residente_exterior = $row["residente_exterior"];
   	$pais_exterior = $row["pais_exterior"];
     }
   } 
   #FECHA A CONEXAO
   mysqli_close($conn);
   ?>
<html>
   <head>
      <meta charset="utf-8">
      <title>GVB - Atualizar Dados Cadastrais</title>
	   <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="../css/atualizar_cadastro.css">   
	  <script type="text/javascript" src="../js/valida.js"></script>	
   </head>
   <body>	
	 
      <div id="page-create-point" align="center">
         <form name="atualizar_cadastro" method="post" action="update.php">
            <h1>Atualização do cadastro</h1>
            <!-- DADOS PESSOAIS-->
            <!-- <fieldset>
               <legend>
                  <h2>Dados Pessoais</h2>
               </legend>
               </fieldset> -->
               <div class="field-group">
                  <div class="field">
                  <label for="nome">Celular</label>
                  <input type="text" name="telefone1" title='Apenas Números' maxlength="11" placeholder="Formato:XX988888888" id="telefone1" value="<?php echo $telefone1;?>"  />
                  </div>

                  <div class="field">
                  <label for="rg">Logradouro</label>
                  <input type="text" name="logradouro" maxlength="100" id="logradouro" value="<?php echo $logradouro;?>" required /> 

                  </div>
               </div>

               <div class="field-group">
                  <div class="field">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" value="<?php echo $email;?>" required />
                  </div>

                  <div class="field">
                  <label for="estado_civil">Estado Civil</label>
                  <select name="estado_civil" id="estado_civil" value="<?php echo $estado_civil;?>" placeholder="Selecione" required>
                           <option selected value="" disabled> Selecione </option>
                           <option value="Solteiro">Solteiro</option>
                           <option value="Casado">Casado</option>
                           <option value="Divorciado">Divorciado</option>
                           <option value="Separado">Separado</option>
                           <option value="Viuvo">Viúvo</option>
                        </select>
                  </div>
               </div>

               <div class="field-group">
                  <div class="field">
                  <label for="escolaridade">Escolaridade</label>
                  <select name="escolaridade" id="escolaridade" value="<?php echo $escolaridade;?>" required >
                           <option selected value="" disabled> Selecione </option>
                           <option value="Analfabeto">Analfabeto</option>
                           <option value="Até o 5° ano incompleto do Ensino Fundamental"> Até o 5° ano incompleto do Ensino Fundamental </option>
                           <option value="5° ano completo do Ensino Fundamental"> 5° ano completo do Ensino Fundamental </option>
                           <option value="6° ao 9° ano do Ensino Fundamental incompleto">6° ao 9° ano do Ensino Fundamental incompleto </option>
                           <option value="Ensino Fundamental completo"> Ensino Fundamental completo </option>
                           <option value="Ensino Médio incompleto"> Ensino Médio incompleto </option>
                           <option value="Ensino Médio completo">Ensino Médio completo</option>
                           <option value="Educação Superior incompleta">Educação Superior incompleta</option>
                           <option value="Educação Superior completa">Educação Superior completa</option>
                           <option value="Pós Graduação completa">Pós Graduação completa</option>
                           <option value="Mestrado completo">Mestrado completo</option>
                           <option value="Doutorado completo">Doutorado completo</option>
                        </select>
                  </div>
               </div>
               <div class="field-group">
                  <div class="field">
                  <!-- <button type="submit" value="SALVAR ALTERAÇÕES"> Atualizar </button> -->
                  </div>
                  <div class="field">
                  <button type="submit" value="SALVAR ALTERAÇÕES" onclick="return validar()"> Atualizar </button>
                  </div>
               </div>
			</form>
		 
      </div>
   </body>
</html>