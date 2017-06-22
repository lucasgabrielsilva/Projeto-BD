CREATE SCHEMA IF NOT EXISTS `fifinha`;
USE `fifinha`;

CREATE TABLE IF NOT EXISTS `Endereco`(
  `idEndereco` VARCHAR(50) NOT NULL,
  `cepEndereco` VARCHAR(45) NOT NULL,
  `numeroEndereco` VARCHAR(45) NOT NULL,
  `paisEndereco` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idEndereco`));
  
  
CREATE TABLE IF NOT EXISTS `Clubes` (
  `idClube` INT NOT NULL,
  `nomeClube` VARCHAR(45) NOT NULL,
  `Endereco_idEndereco` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idClube`),
  UNIQUE (`Endereco_idEndereco`),
  FOREIGN KEY (`Endereco_idEndereco`) REFERENCES `Endereco` (`idEndereco`));
  
  
CREATE TABLE IF NOT EXISTS `CT` (
  `idCT` INT NOT NULL,
  `nomeCt` VARCHAR(45) NOT NULL,
  `Endereco_idEndereco` VARCHAR(50) NOT NULL,
  `Clube_idClube` INT NOT NULL,
  PRIMARY KEY (`idCT`),
  UNIQUE (`Clube_idClube`),
  UNIQUE (`Endereco_idEndereco`),
  FOREIGN KEY (`Endereco_idEndereco`) REFERENCES `Endereco` (`idEndereco`),
  FOREIGN KEY (`Clube_idClube`)REFERENCES `Clubes` (`idClube`));
  
  
CREATE TABLE IF NOT EXISTS `Estadio` (
  `idEstadio` INT NOT NULL,
  `nomeEstadio` VARCHAR(45) NOT NULL,
  `capacidadeEstadio` INT NOT NULL,
  `Endereco_idEndereco` VARCHAR(50) NOT NULL,
  `Clube_idClube` INT NOT NULL,
  PRIMARY KEY (`idEstadio`),
  UNIQUE (`Clube_idClube`),
  UNIQUE (`Endereco_idEndereco`),
  FOREIGN KEY (`Endereco_idEndereco`)REFERENCES `Endereco` (`idEndereco`),
  FOREIGN KEY (`Clube_idClube`) REFERENCES `Clubes` (`idClube`));
  
CREATE TABLE IF NOT EXISTS `Planos` (
  `idPlano` INT NOT NULL,
  `nomePlano` VARCHAR(45) NOT NULL,
  `valorPlano` FLOAT NOT NULL,
  PRIMARY KEY (`idPlano`),
  UNIQUE (`nomePlano`));
  
  
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
  FOREIGN KEY (`Endereco_idEndereco`) REFERENCES `Endereco` (`idEndereco`),
  FOREIGN KEY (`Clube_idClube`) REFERENCES `Clubes` (`idClube`),
  FOREIGN KEY (`Plano_idPlano`) REFERENCES `Planos` (`idPlano`));
  
  
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
  FOREIGN KEY (`Clube_idClube`) REFERENCES `Clubes` (`idClube`),
  FOREIGN KEY (`Endereco_idEndereco`) REFERENCES `Endereco` (`idEndereco`));
  
  
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
  FOREIGN KEY (`Endereco_idEndereco`) REFERENCES `Endereco` (`idEndereco`),
  FOREIGN KEY (`Clube_idClube`) REFERENCES `Clubes` (`idClube`));
  

INSERT INTO `endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('10', '87302090', '1270', 'Brasil');
INSERT INTO `endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('11', '90834980', '78', 'Brasil');
INSERT INTO `endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('12', '78904216', '56', 'Brasil');
INSERT INTO `endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('13', '87895572', '5780', 'Brasil');
INSERT INTO `endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('14', '56784299', '259', 'Brasil');
INSERT INTO `endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('15', '10568922', '689', 'Brasil');
INSERT INTO `endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('16', '45789022', '345', 'Brasil');
INSERT INTO `endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('17', '23478654', '120', 'Brasil');
INSERT INTO `endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('18', '12639880', '2485', 'Brasil');
INSERT INTO `endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('19', '45899521', '750', 'Brasil');
INSERT INTO `endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('20', '45878451', '650', 'Brasil');
INSERT INTO `endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('21', '12589022', '1650', 'Brasil');
INSERT INTO `endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('22', '45878451', '3870', 'Brasil');
INSERT INTO `endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('23', '39895512', '2465', 'Brasil');
INSERT INTO `endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('24', '55863471', '526', 'Brasil');
INSERT INTO `endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('25', '22879641', '860', 'Brasil');
INSERT INTO `endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('26', '14678290', '1260', 'Brasil');
INSERT INTO `endereco` (`idEndereco`, `cepEndereco`, `numeroEndereco`, `paisEndereco`) VALUES ('27', '63574498', '4563', 'Brasil');

INSERT INTO `planos` (`idPlano`, `nomePlano`, `valorPlano`) VALUES ('10', 'Basico', '25.00');
INSERT INTO `planos` (`idPlano`, `nomePlano`, `valorPlano`) VALUES ('11', 'Comun', '35.00');
INSERT INTO `planos` (`idPlano`, `nomePlano`, `valorPlano`) VALUES ('12', 'Master', '50.00');
INSERT INTO `planos` (`idPlano`, `nomePlano`, `valorPlano`) VALUES ('13', 'Vip', '80.00');
INSERT INTO `planos` (`idPlano`, `nomePlano`, `valorPlano`) VALUES ('14', 'Familia', '140.00');

INSERT INTO `clubes` (`idClube`, `nomeClube`, `Endereco_idEndereco`) VALUES ('10', 'Corinthians', '10');
INSERT INTO `clubes` (`idClube`, `nomeClube`, `Endereco_idEndereco`) VALUES ('11', 'Atl Paranaense', '11');

INSERT INTO `ct` (`idCT`, `nomeCt`, `Endereco_idEndereco`, `Clube_idClube`) VALUES ('10', 'Joaquim Grava', '12', '10');
INSERT INTO `ct` (`idCT`, `nomeCt`, `Endereco_idEndereco`, `Clube_idClube`) VALUES ('11', 'CT CAT', '13', '11');
INSERT INTO `estadio` (`idEstadio`, `nomeEstadio`, `capacidadeEstadio`, `Endereco_idEndereco`, `Clube_idClube`) VALUES ('10', 'Arena Corinthians', '45.200', '14', '10');
INSERT INTO `estadio` (`idEstadio`, `nomeEstadio`, `capacidadeEstadio`, `Endereco_idEndereco`, `Clube_idClube`) VALUES ('11', 'Arena da Baixada', '40.000', '15', '11');

INSERT INTO `socios` (`idSocio`, `nomeSocio`, `CPFSocio`, `emailSocio`, `Endereco_idEndereco`, `Clube_idClube`, `Plano_idPlano`) VALUES ('10', 'Ana', '458.125.233-78', 'ana@gmail.com', '16', '10', '10');
INSERT INTO `socios` (`idSocio`, `nomeSocio`, `CPFSocio`, `emailSocio`, `Endereco_idEndereco`, `Clube_idClube`, `Plano_idPlano`) VALUES ('11', 'Bruna', '455.789.361-45', 'bruna@gmail.com', '17', '10', '11');
INSERT INTO `socios` (`idSocio`, `nomeSocio`, `CPFSocio`, `emailSocio`, `Endereco_idEndereco`, `Clube_idClube`, `Plano_idPlano`) VALUES ('12', 'Carlos', '233.587.693-85', 'carlos@gmail.com', '18', '11', '12');
INSERT INTO `socios` (`idSocio`, `nomeSocio`, `CPFSocio`, `emailSocio`, `Endereco_idEndereco`, `Clube_idClube`, `Plano_idPlano`) VALUES ('13', 'Daniel', '589.125.463-22', 'daniel@gmail.com', '19', '11', '13');

INSERT INTO `funcionarios` (`idFuncionario`, `nomeFuncionario`, `CargoFuncionario`, `SalarioFuncionario`, `cpfFuncionario`, `Endereco_idEndereco`, `Clube_idClube`) VALUES ('10', 'João', 'Segurança', '1200.00', '784.528.633-74', '20', '10');
INSERT INTO `funcionarios` (`idFuncionario`, `nomeFuncionario`, `CargoFuncionario`, `SalarioFuncionario`, `cpfFuncionario`, `Endereco_idEndereco`, `Clube_idClube`) VALUES ('11', 'Joaquim', 'Roupeiro', '1000.00', '562.417.687-55', '21', '10');
INSERT INTO `funcionarios` (`idFuncionario`, `nomeFuncionario`, `CargoFuncionario`, `SalarioFuncionario`, `cpfFuncionario`, `Endereco_idEndereco`, `Clube_idClube`) VALUES ('12', 'kleber', 'Medico', '3500.00', '163.256.741-96', '22', '11');
INSERT INTO `funcionarios` (`idFuncionario`, `nomeFuncionario`, `CargoFuncionario`, `SalarioFuncionario`, `cpfFuncionario`, `Endereco_idEndereco`, `Clube_idClube`) VALUES ('13', 'Matheus', 'Motorista', '2000.00', '789.452.698-10', '23', '11');

INSERT INTO `jogadores` (`idJogador`, `nomeJogador`, `alturaJogador`, `pesoJogador`, `cpfJogador`, `salarioJogador`, `posicaoJogador`, `Clube_idClube`, `Endereco_idEndereco`) VALUES ('10', 'Ronaldo', '1.88', '100', '789.568.456-12', '350000.00', 'Atacante', '10', '24');
INSERT INTO `jogadores` (`idJogador`, `nomeJogador`, `alturaJogador`, `pesoJogador`, `cpfJogador`, `salarioJogador`, `posicaoJogador`, `Clube_idClube`, `Endereco_idEndereco`) VALUES ('11', 'Paulo', '1.85', '88', '658.258.4578-16', '275000.00', 'Volante', '10', '25');
INSERT INTO `jogadores` (`idJogador`, `nomeJogador`, `alturaJogador`, `pesoJogador`, `cpfJogador`, `salarioJogador`, `posicaoJogador`, `Clube_idClube`, `Endereco_idEndereco`) VALUES ('12', 'Walter', '1.90', '105', '756.589.452-42', '200000.00', 'Atacante', '11', '26');
INSERT INTO `jogadores` (`idJogador`, `nomeJogador`, `alturaJogador`, `pesoJogador`, `cpfJogador`, `salarioJogador`, `posicaoJogador`, `Clube_idClube`, `Endereco_idEndereco`) VALUES ('13', 'Cleberson', '1.75', '78', '597.256.968-30', '250000.00', 'Meia', '11', '27');



