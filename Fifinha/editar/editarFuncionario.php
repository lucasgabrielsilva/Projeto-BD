<html>
	<head>
		<title> FIFINHA </TITLE>
		<link rel="stylesheet" type="text/css" href="\Fifinha\css\FuncionariosCss.css" />
                <?php

                    include 'conexao.php';
                    $algo = $_REQUEST['funcionario'];
                    $sql = "SELECT * FROM funcionarios WHERE idFuncionario = '$algo'";
                    $result = mysql_query($sql);
                    $dadosFuncionario = mysql_fetch_row($result);

                    $sql = "SELECT * FROM endereco WHERE idEndereco = '$dadosFuncionario[5]'";
                    $result = mysql_query($sql);
                    $dadosEndereco = mysql_fetch_row($result);
           
        ?>
	</head>
	<body background="\Fifinha\imagens\func1.jpg">
		<form action="\Fifinha\update\updateFuncionario.php" method="post">
			<div id="titulo">
				<label> Editar Funcionario </label>
			</div>	
			<div id="jogadores">
                                <input type="hidden" name="idFuncionario" value="<?php echo $dadosFuncionario[0]; ?>" />
				<label>Nome</label>
                		<input type="text" name="nome" value="<?php echo $dadosFuncionario[1]; ?>"/>
				<label>CPF</label>
                		<input type="text" name="cpf" value="<?php echo $dadosFuncionario[2]; ?>"/>
                		<label>Cargo</label>
                		<input type="text" name="cargo" value="<?php echo $dadosFuncionario[3]; ?>"/>
                                <input type="hidden" name="idEndereco" value="<?php echo $dadosEndereco[0]; ?>"/>
                                <label>CEP</label>
                                <input type="text" name="cep" value="<?php echo $dadosEndereco[1]; ?>"/>
                                <label>Numero</label>
                                <input type="text" name="numero" value="<?php echo $dadosEndereco[2]; ?>"/>
                                <label>Pais</label>
                                <input type="text" name="pais" value="<?php echo $dadosEndereco[3]; ?>"/>
				<button type="submit" name="submit">Enviar</button>
            		</div>
		</form>
	</body>
</html>
