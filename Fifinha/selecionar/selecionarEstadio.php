<html>
	<head>
		<title> FIFINHA </TITLE>
		<link rel="stylesheet" type="text/css" href="/Fifinha/CSS/EstadioCss.css" />
	</head>
        <?php
            include 'conexao.php';
            $opcao = $_REQUEST['submit'];   
        ?>
	<body>
            <?php
            if($opcao == '1'){?>
                <form action="\Fifinha\editar\editarEstadio.php" method="post">
                            <div id="titulo">
                                    <label> Estadios </label>
                            </div>	
                            <div id="opcao">
                                    <label>Selecione o estadio: </label>
                                    <select name="estadio">
                                    <option> </option>
                                    <?php
                                        $sql = 'SELECT * FROM estadio';
                                        $result = mysql_query($sql);
                                        while($dados = mysql_fetch_assoc($result)){ ?>
                                        <option value ="<?php echo $dados ['idEstadio']; ?>"><?php echo $dados ['nomeEstadio']; ?>
                                        </option> <?php
                                        }
                                    ?>
                                    </select>
                                    <button type="submit" name="opcao" value="1">Alterar</button>
                    </form>
            <?php }
            else{
                ?>
            <form action="/Fifinha/EXCLUIR/excluirEstadio.php" method="post">
                            <div id="titulo">
                                    <label> Estadios </label>
                            </div>	
                            <div id="opcao">
                                    <label>Selecione o estadio: </label>
                                    <select name="estadio">
                                    <option> </option>
                                    <?php
                                        $sql = 'SELECT * FROM estadio';
                                        $result = mysql_query($sql);
                                        while($dados = mysql_fetch_assoc($result)){ ?>
                                        <option value ="<?php echo $dados ['idEstadio']; ?>"><?php echo $dados ['nomeEstadio']; ?>
                                        </option> <?php
                                        }
                                    ?>
                                    </select>
                                    <button type="submit" name="opcao" value="2">Excluir</button>
            </form>
            <?php } ?>
	</body>
</html>
