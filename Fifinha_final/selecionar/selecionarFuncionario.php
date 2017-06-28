<html>
	<head>
            <title> FIFINHA </TITLE>
            <link rel="stylesheet" type="text/css" href="/Fifinha/CSS/FuncionarioCss.css" />
	</head>
        <?php
            include 'conexao.php';
            $opcao = $_REQUEST['submit'];   
        ?>
	<body>
            <?php
            if($opcao == '1'){?>
                <form action="/Fifinha/editar/editarFuncionario.php" method="post">
                            <div id="titulo">
                                    <label> Funcionario </label>
                            </div>	
                            <div id="opcao">
                                    <label>Selecione o Funcionario: </label>
                                    <select name="funcionario">
                                    <option> </option>
                                    <?php
                                        $sql = 'SELECT * FROM funcionarios';
                                        $result = mysql_query($sql);
                                        while($dados = mysql_fetch_assoc($result)){ ?>
                                        <option value ="<?php echo $dados ['idFuncionario']; ?>"><?php echo $dados ['nomeFuncionario']; ?>
                                        </option> <?php
                                        }
                                    ?>
                                    </select>
                                    <button type="submit" name="opcao" value="1">Alterar</button>
                    </form>
            <?php }
            else{
                ?>
            <form action="/Fifinha/excluir/excluirFuncionario.php" method="post">
                            <div id="titulo">
                                    <label> Funcionario </label>
                            </div>	
                            <div id="opcao">
                                    <label>Selecione o Funcionario: </label>
                                    <select name="funcionario">
                                    <option> </option>
                                    <?php
                                        $sql = 'SELECT * FROM funcionarios';
                                        $result = mysql_query($sql);
                                        while($dados = mysql_fetch_assoc($result)){ ?>
                                        <option value ="<?php echo $dados ['idFuncionario']; ?>"><?php echo $dados ['nomeFuncionario']; ?>
                                        </option> <?php
                                        }
                                    ?>
                                    </select>
                                    <button type="submit" name="opcao" value="2">Excluir</button>
            </form>
            <?php } ?>
	</body>
</html>
