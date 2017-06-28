<html>
	<head>
            <title> FIFINHA </TITLE>
            <link rel="stylesheet" type="text/css" href="/Fifinha/CSS/CTCss.css" />
	</head>
        <?php
            include 'conexao.php';
            $opcao = $_REQUEST['submit'];   
        ?>
	<body>
            <?php
            if($opcao == '1'){?>
                <form action="/Fifinha/editar/editarCT.php" method="post">
                            <div id="titulo">
                                    <label> CT </label>
                            </div>	
                            <div id="opcao">
                                    <label>Selecione o CT: </label>
                                    <select name="ct">
                                    <option> </option>
                                    <?php
                                        $sql = 'SELECT * FROM ct';
                                        $result = mysql_query($sql);
                                        while($dados = mysql_fetch_assoc($result)){ ?>
                                        <option value ="<?php echo $dados ['idCT']; ?>"><?php echo $dados ['nomeCt']; ?>
                                        </option> <?php
                                        }
                                    ?>
                                    </select>
                                    <button type="submit" name="opcao" value="1">Alterar</button>
                    </form>
            <?php }
            else{
                ?>
            <form action="/Fifinha/excluir/excluirCT.php" method="post">
                            <div id="titulo">
                                    <label> CT </label>
                            </div>	
                            <div id="opcao">
                                    <label>Selecione o CT: </label>
                                    <select name="ct">
                                    <option> </option>
                                    <?php
                                        $sql = 'SELECT * FROM ct';
                                        $result = mysql_query($sql);
                                        while($dados = mysql_fetch_assoc($result)){ ?>
                                        <option value ="<?php echo $dados ['idCT']; ?>"><?php echo $dados ['nomeCt']; ?>
                                        </option> <?php
                                        }
                                    ?>
                                    </select>
                                    <button type="submit" name="opcao" value="2">Excluir</button>
            </form>
            <?php } ?>
	</body>
</html>
