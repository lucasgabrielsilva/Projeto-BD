<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php
     
            include 'conexao.php';
            $algo = $_REQUEST['estadio'];
            $sql = "SELECT * FROM estadio WHERE idEstadio = '$algo'";
            $result = mysql_query($sql);
            $dadosEstadio = mysql_fetch_row($result);
            
            $sql = "SELECT * FROM endereco WHERE idEndereco = '$dadosEstadio[3]'";
            $result = mysql_query($sql);
            $dadosEndereco = mysql_fetch_row($result);
           
        ?>
    </head>
    <body background="\Fifinha\imagens\estadio.jpg">
        <form action="\Fifinha\update\updateEstadio.php" method="post">
            <div id="titulo">
                <label> Editar Estadio </label>
            </div>	
	<div id="estadio">
            <input type="hidden" name="idEstadio" value="<?php echo $dadosEstadio[0]; ?>" />
            <label>Nome</label>
            <input type="text" name="nome" value="<?php echo $dadosEstadio[1]; ?>"/>
            <label>Capacidade</label>
            <input type="text" name="capacidade" value="<?php echo $dadosEstadio[2]; ?>"/>
            <input type="hidden" name="idEndereco" value="<?php echo $dadosEndereco[0]; ?>"/>
            <label>CEP</label>
            <input type="text" name="cep" value="<?php echo $dadosEndereco[1]; ?>"/>
            <label>Numero</label>
            <input type="text" name="numero" value="<?php echo $dadosEndereco[2]; ?>"/>
            <label>Pais</label>
            <input type="text" name="pais" value="<?php echo $dadosEndereco[3]; ?>"/>
            <button type="submit" name="enviar">Enviar</button>
        </div>
        </form>
    </body>
</html>
