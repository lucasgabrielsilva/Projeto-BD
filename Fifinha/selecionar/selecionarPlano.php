<html>
	<head>
            <title> FIFINHA </title>
	</head>
        <?php
            include 'conexao.php';
            $opcao = $_REQUEST['submit'];   
        ?>
	<body>
            <?php
            if($opcao == '1'){?>
                <form action="/Fifinha/editar/editarPlano.php" method="post">
                            <div id="titulo">
                                    <label> Planos Socio Torcedor </label>
                            </div>	
                            <div id="opcao">
                                    <label>Selecione o Plano: </label>
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
                                    <button type="submit" name="opcao" value="1">Alterar</button>
                    </form>
            <?php }
            else{
                ?>
            <form action="/Fifinha/excluir/excluirPlano.php" method="post">
                            <div id="titulo">
                                    <label> Planos Socio Torcedor </label>
                            </div>	
                            <div id="opcao">
                                    <label>Selecione o Plano: </label>
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
                                    <button type="submit" name="opcao" value="2">Excluir</button>
            </form>
            <?php } ?>
	</body>
</html>
