<html>
	<head>
		<title> FIFINHA </TITLE>
		<link rel="stylesheet" type="text/css" href="\Fifinha\css\estadioCss.css" />
                <?php
                     include 'conexao.php';
                ?>
	</head>
	<body background="\Fifinha\imagens\estadio.jpg">
		<form action="\Fifinha\insert\insertEstadio.php" method="post">
			<div id="titulo">
				<label> Cadastrar Estadio </label>
			</div>	
			<div id="estadio">
				<label>Nome</label>
                		<input type="text" name="nome"/>
				<label>Capacidade</label>
                		<input type="text" name="capacidade"/>
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
				<button type="submit" name="enviar">Enviar</button>
            		</div>
		</form>
	</body>
</html>
