CREATE SCHEMA IF NOT EXISTS `fifinha`;
USE `fifinha`;

CREATE TABLE IF NOT EXISTS `Endereco`(
  `idEndereco` VARCHAR(50) NOT NULL,
  `cepEndereco` VARCHAR(45) NOT NULL,
  `numeroEndereco` VARCHAR(45) NOT NULL,
  `paisEndereco` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idEndereco`));

CREATE TABLE IF NOT EXISTS `Estadio` (
  `idEstadio` INT NOT NULL,
  `nomeEstadio` VARCHAR(45) NOT NULL,
  `capacidadeEstadio` INT NOT NULL,
  `Endereco_idEndereco` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idEstadio`),
    FOREIGN KEY (`Endereco_idEndereco`)
    REFERENCES `fifinha`.`Endereco` (`idEndereco`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


CREATE TABLE IF NOT EXISTS `CT` (
  `idCT` INT NOT NULL,
  `nomeCt` VARCHAR(45) NOT NULL,
  `Endereco_idEndereco` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idCT`),
    FOREIGN KEY (`Endereco_idEndereco`)
    REFERENCES `fifinha`.`Endereco` (`idEndereco`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


CREATE TABLE IF NOT EXISTS `Clubes` (
  `idClube` INT NOT NULL,
  `nomeClube` VARCHAR(45) NOT NULL,
  `Estadio_idEstadio` INT NOT NULL,
  `CT_idCT` INT NOT NULL,
  `Endereco_idEndereco` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idClube`),
  UNIQUE (`Estadio_idEstadio`),
    FOREIGN KEY (`Estadio_idEstadio`)
    REFERENCES `fifinha`.`Estadio` (`idEstadio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    UNIQUE (`CT_idCT`),
    FOREIGN KEY (`CT_idCT`)
    REFERENCES `fifinha`.`CT` (`idCT`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    UNIQUE (`Endereco_idEndereco`),
    FOREIGN KEY (`Endereco_idEndereco`)
    REFERENCES `fifinha`.`Endereco` (`idEndereco`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


CREATE TABLE IF NOT EXISTS `Planos` (
  `idPlano` INT NOT NULL,
  `nomePlano` VARCHAR(45) NOT NULL,
  `valorPlano` FLOAT NOT NULL,
  PRIMARY KEY (`idPlano`));


CREATE TABLE IF NOT EXISTS `Socios` (
  `idSocio` INT NOT NULL,
  `nomeSocio` VARCHAR(45) NOT NULL,
  `CPFSocio` VARCHAR(45) NOT NULL,
  `emailSocio` VARCHAR(45) NOT NULL,
  `Endereco_idEndereco` VARCHAR(50) NOT NULL,
  `Clube_idClube` INT NOT NULL,
  `Plano_idPlano` INT NOT NULL,
  PRIMARY KEY (`idSocio`),
  UNIQUE (`CPFSocio`),
    FOREIGN KEY (`Endereco_idEndereco`)
    REFERENCES `fifinha`.`Endereco` (`idEndereco`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`Clube_idClube`)
    REFERENCES `fifinha`.`Clubes` (`idClube`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`Plano_idPlano`)
    REFERENCES `fifinha`.`Planos` (`idPlano`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


CREATE TABLE IF NOT EXISTS `Jogadores` (
  `idJogador` INT NOT NULL,
  `nomeJogador` VARCHAR(45) NOT NULL,
  `alturaJogador` VARCHAR(45) NOT NULL,
  `pesoJogador` VARCHAR(45) NOT NULL,
  `cpfJogador` VARCHAR(45) NOT NULL,
  `salarioJogador` FLOAT NOT NULL,
  `posicaoJogador` VARCHAR(45) NOT NULL,
  `Clube_idClube` INT NOT NULL,
  `Endereco_idEndereco` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idJogador`),
  UNIQUE (`cpfJogador`),
    FOREIGN KEY (`Clube_idClube`)
    REFERENCES `fifinha`.`Clubes` (`idClube`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`Endereco_idEndereco`)
    REFERENCES `fifinha`.`Endereco` (`idEndereco`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


CREATE TABLE IF NOT EXISTS `Funcionarios` (
  `idFuncionario` INT NOT NULL,
  `nomeFuncionario` VARCHAR(45) NOT NULL,
  `CargoFuncionario` VARCHAR(45) NOT NULL,
  `SalarioFuncionario` FLOAT NOT NULL,
  `cpfFuncionario` VARCHAR(45) NOT NULL,
  `Endereco_idEndereco` VARCHAR(50) NOT NULL,
  `Clube_idClube` INT NOT NULL,
  PRIMARY KEY (`idFuncionario`),
  UNIQUE (`cpfFuncionario`),
    FOREIGN KEY (`Endereco_idEndereco`)
    REFERENCES `fifinha`.`Endereco` (`idEndereco`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (`Clube_idClube`)
    REFERENCES `fifinha`.`Clubes` (`idClube`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
    
    INSERT INTO `fifinha`.`endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('1', '87302090', '1270', 'Brasil');

INSERT INTO `fifinha`.`endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('2', '90834980', '78', 'Brasil');

INSERT INTO `fifinha`.`endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('3', '78904216', '56', 'Brasil');

INSERT INTO `fifinha`.`endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('4', '87895572', '5780', 'Brasil');

INSERT INTO `fifinha`.`endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('5', '56784299', '259', 'Brasil');

INSERT INTO `fifinha`.`endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('6', '10568922', '689', 'Brasil');

INSERT INTO `fifinha`.`endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('7', '45789022', '345', 'Brasil');

INSERT INTO `fifinha`.`endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('8', '23478654', '120', 'Brasil');

INSERT INTO `fifinha`.`endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('9', '12639880', '2485', 'Brasil');

INSERT INTO `fifinha`.`endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('10', '45899521', '750', 'Brasil');

INSERT INTO `fifinha`.`endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('11', '45878451', '650', 'Brasil');

INSERT INTO `fifinha`.`endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('12', '12589022', '1650', 'Brasil');

INSERT INTO `fifinha`.`endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('13', '45878451', '3870', 'Brasil');

INSERT INTO `fifinha`.`endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('14', '39895512', '2465', 'Brasil');

INSERT INTO `fifinha`.`endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('15', '55863471', '526', 'Brasil');

INSERT INTO `fifinha`.`endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('16', '22879641', '860', 'Brasil');

INSERT INTO `fifinha`.`endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('17', '14678290', '1260', 'Brasil');

INSERT INTO `fifinha`.`endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('18', '63574498', '4563', 'Brasil');



INSERT INTO `fifinha`.`planos` (`idPlano`, `nomePlano`, `valorPlano`) VALUES ('1', 'Basico', '25.00');

INSERT INTO `fifinha`.`planos` (`idPlano`, `nomePlano`, `valorPlano`) VALUES ('2', 'Comun', '35.00');

INSERT INTO `fifinha`.`planos` (`idPlano`, `nomePlano`, `valorPlano`) VALUES ('3', 'Master', '50.00');

INSERT INTO `fifinha`.`planos` (`idPlano`, `nomePlano`, `valorPlano`) VALUES ('4', 'Vip', '80.00');

INSERT INTO `fifinha`.`planos` (`idPlano`, `nomePlano`, `valorPlano`) VALUES ('5', 'Familia', '140.00');


INSERT INTO `fifinha`.`ct` (`idCT`, `nomeCt`, `Endereco_idEndereco`) VALUES ('1', 'Joaquim Grava', '1');

INSERT INTO `fifinha`.`ct` (`idCT`, `nomeCt`, `Endereco_idEndereco`) VALUES ('2', 'CT CAT', '2');


INSERT INTO `fifinha`.`estadio` (`idEstadio`, `nomeEstadio`, `capacidadeEstadio`, `Endereco_idEndereco`) VALUES ('1', 'Arena Corinthians', '45.200', '3');

INSERT INTO `fifinha`.`estadio` (`idEstadio`, `nomeEstadio`, `capacidadeEstadio`, `Endereco_idEndereco`) VALUES ('2', 'Arena da Baixada', '40.000', '4');


INSERT INTO `fifinha`.`clubes` (`idClube`, `nomeClube`, `Estadio_idEstadio`, `CT_idCT`, `Endereco_idEndereco`) VALUES ('1', 'Corinthians', '1', '1', '5');

INSERT INTO `fifinha`.`clubes` (`idClube`, `nomeClube`, `Estadio_idEstadio`, `CT_idCT`, `Endereco_idEndereco`) VALUES ('2', 'Atl Paranaense', '2', '2', '6');


INSERT INTO `fifinha`.`funcionarios` (`idFuncionario`, `nomeFuncionario`, `CargoFuncionario`, `SalarioFuncionario`, `cpfFuncionario`, `Endereco_idEndereco`, `Clube_idClube`) VALUES ('1', 'João', 'Segurança', '1200.00', '784.528.633-74', '7', '1');

INSERT INTO `fifinha`.`funcionarios` (`idFuncionario`, `nomeFuncionario`, `CargoFuncionario`, `SalarioFuncionario`, `cpfFuncionario`, `Endereco_idEndereco`, `Clube_idClube`) VALUES ('2', 'Joaquim', 'Roupeiro', '1000.00', '562.417.687-55', '8', '1');

INSERT INTO `fifinha`.`funcionarios` (`idFuncionario`, `nomeFuncionario`, `CargoFuncionario`, `SalarioFuncionario`, `cpfFuncionario`, `Endereco_idEndereco`, `Clube_idClube`) VALUES ('3', 'kleber', 'Medico', '3500.00', '163.256.741-96', '9', '2');

INSERT INTO `fifinha`.`funcionarios` (`idFuncionario`, `nomeFuncionario`, `CargoFuncionario`, `SalarioFuncionario`, `cpfFuncionario`, `Endereco_idEndereco`, `Clube_idClube`) VALUES ('4', 'Matheus', 'Motorista', '2000.00', '789.452.698-10', '10', '2');


INSERT INTO `fifinha`.`jogadores` (`idJogador`, `nomeJogador`, `alturaJogador`, `pesoJogador`, `cpfJogador`, `salarioJogador`, `posicaoJogador`, `Clube_idClube`, `Endereco_idEndereco`) VALUES ('1', 'Ronaldo', '1.88', '100', '789.568.456-12', '350000.00', 'Atacante', '1', '11');

INSERT INTO `fifinha`.`jogadores` (`idJogador`, `nomeJogador`, `alturaJogador`, `pesoJogador`, `cpfJogador`, `salarioJogador`, `posicaoJogador`, `Clube_idClube`, `Endereco_idEndereco`) VALUES ('2', 'Paulo', '1.85', '88', '658.258.4578-16', '275000.00', 'Volante', '1', '12');

INSERT INTO `fifinha`.`jogadores` (`idJogador`, `nomeJogador`, `alturaJogador`, `pesoJogador`, `cpfJogador`, `salarioJogador`, `posicaoJogador`, `Clube_idClube`, `Endereco_idEndereco`) VALUES ('3', 'Walter', '1.90', '105', '756.589.452-42', '200000.00', 'Atacante', '2', '13');

INSERT INTO `fifinha`.`jogadores` (`idJogador`, `nomeJogador`, `alturaJogador`, `pesoJogador`, `cpfJogador`, `salarioJogador`, `posicaoJogador`, `Clube_idClube`, `Endereco_idEndereco`) VALUES ('4', 'Cleberson', '1.75', '78', '597.256.968-30', '250000.00', 'Meia', '2', '14');

INSERT INTO `fifinha`.`socios` (`idSocio`, `nomeSocio`, `CPFSocio`, `emailSocio`, `Endereco_idEndereco`, `Clube_idClube`, `Plano_idPlano`) VALUES ('1', 'Ana', '458.125.233-78', 'ana@gmail.com', '15', '1', '1');

INSERT INTO `fifinha`.`socios` (`idSocio`, `nomeSocio`, `CPFSocio`, `emailSocio`, `Endereco_idEndereco`, `Clube_idClube`, `Plano_idPlano`) VALUES ('2', 'Bruna', '455.789.361-45', 'bruna@gmail.com', '16', '1', '2');

INSERT INTO `fifinha`.`socios` (`idSocio`, `nomeSocio`, `CPFSocio`, `emailSocio`, `Endereco_idEndereco`, `Clube_idClube`, `Plano_idPlano`) VALUES ('3', 'Carlos', '233.587.693-85', 'carlos@gmail.com', '17', '2', '3');

INSERT INTO `fifinha`.`socios` (`idSocio`, `nomeSocio`, `CPFSocio`, `emailSocio`, `Endereco_idEndereco`, `Clube_idClube`, `Plano_idPlano`) VALUES ('4', 'Daniel', '589.125.463-22', 'daniel@gmail.com', '18', '2', '4');

