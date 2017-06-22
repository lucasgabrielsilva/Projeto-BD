<html>
	<head>
		<title> FIFINHA </TITLE>
		<link rel="stylesheet" type="text/css" href="\Fifinha\css\JogadoresCss.css" />
                <?php

                    include 'conexao.php';
                    $algo = $_REQUEST['jogador'];
                    $sql = "SELECT * FROM jogadores WHERE idJogador = '$algo'";
                    $result = mysql_query($sql);
                    $dadosJogador = mysql_fetch_row($result);

                    $sql = "SELECT * FROM endereco WHERE idEndereco = '$dadosJogador[8]'";
                    $result = mysql_query($sql);
                    $dadosEndereco = mysql_fetch_row($result);
           
        ?>
	</head>
	<body background="\Fifinha\imagens\didico.jpg">
		<form action="\Fifinha\update\updateJogador.php" method="post">
			<div id="titulo">
				<label> Editar Jogadores </label>
			</div>	
			<div id="jogadores">
                                <input type="hidden" name="idJogador" value="<?php echo $dadosJogador[0]; ?>" />
				<label>Nome</label>
                		<input type="text" name="nome" value="<?php echo $dadosJogador[1]; ?>"/>
				<label>CPF</label>
                		<input type="text" name="cpf" value="<?php echo $dadosJogador[4]; ?>"/>
                		<label>Peso</label>
                		<input type="text" name="peso" value="<?php echo $dadosJogador[3]; ?>"/>
				<label>Altura</label>
                		<input type="text" name="altura" value="<?php echo $dadosJogador[2]; ?>"/>
				<label>Posicao</label>
                		<input type="text" name="posicao" value="<?php echo $dadosJogador[6]; ?>"/>
				<label>Salario</label>
                		<input type="text" name="salario" value="<?php echo $dadosJogador[5]; ?>"/>
                                <input type="hidden" name="idEndereco" value="<?php echo $dadosEndereco[0]; ?>"/>
                                <label>CEP</label>
                                <input type="text" name="cep" value="<?php echo $dadosEndereco[1]; ?>"/>
                                <label>Numero</label>
                                <input type="text" name="numero" value="<?php echo $dadosEndereco[2]; ?>"/>
                                <label>Pais</label>
                                <input type="text" name="pais" value="<?php echo $dadosEndereco[3]; ?>"/>
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
