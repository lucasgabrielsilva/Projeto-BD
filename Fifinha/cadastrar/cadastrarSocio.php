<html>
	<head>
		<title> FIFINHA </TITLE>
		<link rel="stylesheet" type="text/css" href="\Fifinha\css\SocioCss.css" />
                <?php
                     include 'conexao.php';
                ?>
	</head>
	<body background="\Fifinha\imagens\socio.jpg">
		<form action="\Fifinha\insert\insertSocio.php" method="post">
			<div id="titulo">
				<label> Cadastrar Socio </label>
			</div>	
			<div id="socio">
				<label>Nome</label>
                		<input type="text" name="nome"/>
				<label>CPF</label>
                		<input type="text" name="cpf"/>
                		<label>E-mail</label>
                		<input type="text" name="email"/>
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
                                <label>Plano</label>
                                <select name="plano">
                                   <option> </option>
                                    <?php
                                        $sql = 'SELECT * FROM planos';
                                        $result = mysql_query($sql);
                                        while($dados = mysql_fetch_assoc($result)){ ?>
                                        <option value ="<?php echo $dados ['idPlano']; ?>"><?php echo $dados ['nomePlano']; ?>
                                        </option> <?php
                                        }
                                    ?>
                                    </select>
				<button type="submit" name="submit">Enviar</button>
            		</div>
		</form>
	</body>
</html>
