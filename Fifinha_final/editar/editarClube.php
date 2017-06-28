<html>
	<head>
		<title> FIFINHA </TITLE>
		<link rel="stylesheet" type="text/css" href="\Fifinha\css\clubeCss.css" />
                <?php

                    include 'conexao.php';
                    $algo = $_REQUEST['clube'];
                    $sql = "SELECT * FROM clubes WHERE idClube = '$algo'";
                    $result = mysql_query($sql);
                    $dadosClube = mysql_fetch_row($result);

                    $sql = "SELECT * FROM endereco WHERE idEndereco = '$dadosClube[2]'";
                    $result = mysql_query($sql);
                    $dadosEndereco = mysql_fetch_row($result);
           
        ?>
	</head>
	<body>
		<form action="\Fifinha\update\updateClube.php" method="post">
			<div id="titulo">
				<label> Editar Clube </label>
			</div>	
			<div id="jogadores">
                                <input type="hidden" name="idClube" value="<?php echo $dadosClube[0]; ?>" />
				<label>Nome</label>
                		<input type="text" name="nome" value="<?php echo $dadosClube[1]; ?>"/>
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
