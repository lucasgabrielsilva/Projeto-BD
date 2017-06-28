<html>
	<head>
            <title> FIFINHA </TITLE>
            <link rel="stylesheet" type="text/css" href="/Fifinha/CSS/clubeCss.css" />
	</head>
        <?php
            include 'conexao.php';
            $opcao = $_REQUEST['submit'];   
        ?>
	<body>
            <?php
            if($opcao == '1'){?>
                <form action="/Fifinha/editar/editarClube.php" method="post">
                            <div id="titulo">
                                    <label> Clube </label>
                            </div>	
                            <div id="opcao">
                                    <label>Selecione o Clube: </label>
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
                                    <button type="submit" name="opcao" value="1">Alterar</button>
                    </form>
            <?php }
            else{
                ?>
            <form action="/Fifinha/excluir/excluirClube.php" method="post">
                            <div id="titulo">
                                    <label> Clube </label>
                            </div>	
                            <div id="opcao">
                                    <label>Selecione o Clube: </label>
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
                                    <button type="submit" name="opcao" value="2">Excluir</button>
            </form>
            <?php } ?>
	</body>
</html>
