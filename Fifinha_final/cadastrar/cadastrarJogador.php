<html>
	<head>
		<title> FIFINHA </TITLE>
		<link rel="stylesheet" type="text/css" href="\Fifinha\css\JogadoresCss.css" />
                
                <?php
                     include 'conexao.php';
                ?>
	</head>
	<body background="\Fifinha\imagens\didico.jpg">
		<form action="\Fifinha\insert\insertJogador.php" method="post">
			<div id="titulo">
				<label> Cadastrar Jogadores </label>
			</div>	
			<div id="jogadores">
				<label>Nome</label>
                		<input type="text" name="nome"/>
				<label>CPF</label>
                		<input type="text" name="cpf"/>
                		<label>Peso</label>
                		<input type="text" name="peso"/>
				<label>Altura</label>
                		<input type="text" name="altura"/>
				<label>Posicao</label>
                		<input type="text" name="posicao"/>
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
