<html>
	<head>
		<title> FIFINHA </TITLE>
		<link rel="stylesheet" type="text/css" href="\Fifinha\css\FuncionariosCss.css" />
                <?php
                     include 'conexao.php';
                ?>
	</head>
	<body background="\Fifinha\imagens\func1.jpg">
		<form action="\Fifinha\insert\insertFuncionario.php" method="post">
			<div id="titulo">
				<label> Cadastrar Funcionarios </label>
			</div>	
			<div id="funcionarios">
				<label>Nome</label>
                		<input type="text" name="nome"/>
				<label>CPF</label>
                		<input type="text" name="cpf"/>
				<label>Cargo</label>
                		<input type="text" name="cargo"/>
                		<label>Salario</label>
                		<input type="text" name="salario"/>
				<label>CEP</label>
                		<input type="text" name="cep"/>
				<label>Numero</label>
                		<input type="text" name="numero"/>
				<label>Pais</label>
                		<input type="text" name="pais"/>
                                <label>Clube</label>
                                <select name="clube">
                                   <option> </option>
                                    <?php
                                        $sql = 'SELECT * FROM clubes';
                                        $result = mysql_query($sql);
                                        while($dados = mysql_fetch_assoc($result)){ ?>
                                        <option value ="<?php echo $dados ['idClube']; ?>"><?php echo $dados ['nomeClube']; ?>
                                        </option> <?php
                                        }
                                    ?>
                                    </select>
                                <button type="submit" name="submit">Enviar</button>
            		</div>
		</form>
	</body>
</html>
