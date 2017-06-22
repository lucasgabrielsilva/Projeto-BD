<html>
	<head>
            <title> FIFINHA </TITLE>
            <link rel="stylesheet" type="text/css" href="/Fifinha/CSS/JogadoresCss.css" />
	</head>
        <?php
            include 'conexao.php';
            $opcao = $_REQUEST['submit'];   
        ?>
	<body>
            <?php
            if($opcao == '1'){?>
                <form action="/Fifinha/editar/editarJogador.php" method="post">
                            <div id="titulo">
                                    <label> Jogador </label>
                            </div>	
                            <div id="opcao">
                                    <label>Selecione o Jogador: </label>
                                    <select name="jogador">
                                    <option> </option>
                                    <?php
                                        $sql = 'SELECT * FROM jogadores';
                                        $result = mysql_query($sql);
                                        while($dados = mysql_fetch_assoc($result)){ ?>
                                        <option value ="<?php echo $dados ['idJogador']; ?>"><?php echo $dados ['nomeJogador']; ?>
                                        </option> <?php
                                        }
                                    ?>
                                    </select>
                                    <button type="submit" name="opcao" value="1">Alterar</button>
                    </form>
            <?php }
            else{
                ?>
            <form action="/Fifinha/excluir/excluirJogador.php" method="post">
                            <div id="titulo">
                                    <label> Jogador </label>
                            </div>	
                            <div id="opcao">
                                    <label>Selecione o Jogador: </label>
                                    <select name="jogador">
                                    <option> </option>
                                    <?php
                                        $sql = 'SELECT * FROM jogadores';
                                        $result = mysql_query($sql);
                                        while($dados = mysql_fetch_assoc($result)){ ?>
                                        <option value ="<?php echo $dados ['idJogador']; ?>"><?php echo $dados ['nomeJogador']; ?>
                                        </option> <?php
                                        }
                                    ?>
                                    </select>
                                    <button type="submit" name="opcao" value="2">Excluir</button>
            </form>
            <?php } ?>
	</body>
</html>
