<html>
    <head>
        <meta charset="UTF-8">
        <title>Fifinha</title>
        <link rel="stylesheet" type="text/css" href="\Fifinha\css\PlanoCss.css" />
        <?php
     
            include 'conexao.php';
            $algo = $_REQUEST['plano'];
            $sql = "SELECT * FROM planos WHERE idPlano = '$algo'";
            $result = mysql_query($sql);
            $dadosPlano = mysql_fetch_row($result);
           
        ?>
    </head>
    <body background="\Fifinha\imagens\plano.jpg">
        <form id="plano" action="\Fifinha\update\updatePlano.php" method="post">
        <input type="hidden" name="idPlano" value="<?php echo $dadosPlano[0]; ?>" />
        <label>Nome</label>
        <input type="text" name="nome" value="<?php echo $dadosPlano[1]; ?>"/>
	<label>Valor</label>
        <input type="text" name="valor" value="<?php echo $dadosPlano[2]; ?>"/>
        <button type="submit" name="enviar">Enviar</button>
        </form>
    </body>
</html>
