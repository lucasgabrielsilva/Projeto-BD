<html>
	<head>
            <title> FIFINHA </TITLE>
            <link rel="stylesheet" type="text/css" href="/Fifinha/CSS/SocioCss.css" />
	</head>
        <?php
            include 'conexao.php';
            $opcao = $_REQUEST['submit'];   
        ?>
	<body>
            <?php
            if($opcao == '1'){?>
                <form action="/Fifinha/editar/editarSocio.php" method="post">
                            <div id="titulo">
                                    <label> Socio </label>
                            </div>	
                            <div id="opcao">
                                    <label>Selecione o Socio: </label>
                                    <select name="socio">
                                    <option> </option>
                                    <?php
                                        $sql = 'SELECT * FROM socios';
                                        $result = mysql_query($sql);
                                        while($dados = mysql_fetch_assoc($result)){ ?>
                                        <option value ="<?php echo $dados ['idSocio']; ?>"><?php echo $dados ['nomeSocio']; ?>
                                        </option> <?php
                                        }
                                    ?>
                                    </select>
                                    <button type="submit" name="opcao" value="1">Alterar</button>
                    </form>
            <?php }
            else{
                ?>
            <form action="/Fifinha/excluir/excluirSocio.php" method="post">
                            <div id="titulo">
                                    <label> Socio </label>
                            </div>	
                            <div id="opcao">
                                    <label>Selecione o Socio: </label>
                                    <select name="socio">
                                    <option> </option>
                                    <?php
                                        $sql = 'SELECT * FROM socios';
                                        $result = mysql_query($sql);
                                        while($dados = mysql_fetch_assoc($result)){ ?>
                                        <option value ="<?php echo $dados ['idSocio']; ?>"><?php echo $dados ['nomeSocio']; ?>
                                        </option> <?php
                                        }
                                    ?>
                                    </select>
                                    <button type="submit" name="opcao" value="2">Excluir</button>
            </form>
            <?php } ?>
	</body>
</html>
