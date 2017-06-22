<html>
    <head>
        <meta charset="UTF-8">
        <title>Fifinha</title>
        <link rel="stylesheet" type="text/css" href="\Fifinha\css\CTCss.css" />
        <?php
     
            include 'conexao.php';
            $algo = $_REQUEST['ct'];
            $sql = "SELECT * FROM ct WHERE idCT = '$algo'";
            $result = mysql_query($sql);
            $dadosCT = mysql_fetch_row($result);
            
            $sql = "SELECT * FROM endereco WHERE idEndereco = '$dadosCT[2]'";
            $result = mysql_query($sql);
            $dadosEndereco = mysql_fetch_row($result);
           
        ?>
    </head>
    <body background="\Fifinha\imagens\ct.jpg">
        <form id="ct" action="\Fifinha\update\updateCT.php" method="post">
        <input type="hidden" name="idCT" value="<?php echo $dadosCT[0]; ?>" />
        <label>Nome</label>
        <input type="text" name="nome" value="<?php echo $dadosCT[1]; ?>"/>
        <input type="hidden" name="idEndereco" value="<?php echo $dadosEndereco[0]; ?>"/>
        <label>CEP</label>
        <input type="text" name="cep" value="<?php echo $dadosEndereco[1]; ?>"/>
	<label>Numero</label>
        <input type="text" name="numero" value="<?php echo $dadosEndereco[2]; ?>"/>
	<label>Pais</label>
        <input type="text" name="pais" value="<?php echo $dadosEndereco[3]; ?>"/>
        <button type="submit" name="enviar">Enviar</button>
        </form>
    </body>
</html>
