<html>
	<head>
		<title> FIFINHA </TITLE>
		<link rel="stylesheet" type="text/css" href="\Fifinha\css\SocioCss.css" />
                <?php

                    include 'conexao.php';
                    $algo = $_REQUEST['socio'];
                    $sql = "SELECT * FROM socios WHERE idSocio = '$algo'";
                    $result = mysql_query($sql);
                    $dadosSocio = mysql_fetch_row($result);

                    $sql = "SELECT * FROM endereco WHERE idEndereco = '$dadosSocio[4]'";
                    $result = mysql_query($sql);
                    $dadosEndereco = mysql_fetch_row($result);
           
        ?>
	</head>
	<body background="\Fifinha\imagens\socio.jpg">
		<form action="\Fifinha\update\updateSocio.php" method="post">
			<div id="titulo">
				<label> Editar Socio </label>
			</div>	
			<div id="socio">
                                <input type="hidden" name="idSocio" value="<?php echo $dadosSocio[0]; ?>" />
				<label>Nome</label>
                		<input type="text" name="nome" value="<?php echo $dadosSocio[1]; ?>"/>
				<label>CPF</label>
                		<input type="text" name="cpf" value="<?php echo $dadosSocio[2]; ?>"/>
                		<label>E-mail</label>
                		<input type="text" name="email" value="<?php echo $dadosSocio[3]; ?>"/>
                                <input type="hidden" name="idEndereco" value="<?php echo $dadosEndereco[0]; ?>"/>
                                <label>CEP</label>
                                <input type="text" name="cep" value="<?php echo $dadosEndereco[1]; ?>"/>
                                <label>Numero</label>
                                <input type="text" name="numero" value="<?php echo $dadosEndereco[2]; ?>"/>
                                <label>Pais</label>
                                <input type="text" name="pais" value="<?php echo $dadosEndereco[3]; ?>"/>
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
