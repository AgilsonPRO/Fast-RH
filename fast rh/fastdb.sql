
#
# Criação da Tabela : avaliador
#

CREATE TABLE `avaliador` (
  `nome` text NOT NULL,
  `cpf` text NOT NULL,
  `email` text NOT NULL,
  `telefone` text NOT NULL,
  `login` text NOT NULL,
  `senha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;

#
# Dados a serem incluídos na tabela
#

INSERT INTO avaliador VALUES ( 'QWdpbHNvbiBBbHZlcyBkYSBTaWx2YSBKdW5pb3I=', 'MDQzOTIxODIxNzc=', 'YWdpbHNvbl94eHRAaG90bWFpbC5jb20uYnI=', 'NjEzNjEzNDU2Nw==', 'QEFnaWxzb24=', 'MjE0NA==',);
INSERT INTO avaliador VALUES ( 'QWxkaWxlbmUgQWx2ZXMgUGVkcm9zYQ==', 'MDM0NzU4NDkzOTQ=', 'YWxkaWxlbmVfYWx2ZXN0QGhvdG1haWwuY29t', 'NjEzNjEzNDU2Nw==', 'QEFsZGlsZW5l', 'MjEzMg==',);

#
# Criação da Tabela : usuario
#

CREATE TABLE `usuario` (
  `nome` text NOT NULL,
  `cpf` text NOT NULL,
  `sexo` text NOT NULL,
  `Ecivil` text NOT NULL,
  `datanascimento` text NOT NULL,
  `telefone` text NOT NULL,
  `recado` text NOT NULL,
  `email` text NOT NULL,
  `endereco` text NOT NULL,
  `Dishorario` text NOT NULL,
  `Areapre` text NOT NULL,
  `filhos` text NOT NULL,
  `Escolaridade` text NOT NULL,
  `UF` text NOT NULL,
  `Comentario` text NOT NULL,
  `totalport` int(11) NOT NULL,
  `totalmat` int(11) NOT NULL,
  `totalrac` int(11) NOT NULL,
  `status` text NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;

#
# Dados a serem incluídos na tabela
#

INSERT INTO usuario VALUES ( 'Fabiana Santana Alves', 'OTk5ODU2NDIzNQ==', 'RmVtaW5pbm8=', 'Q2FzYWRvKGEp', 'MjkwODE5OTM=', 'NjEzNjEzNDU2Nw==', 'NjE5MTU3OTUyOA==', 'ZmFiaWFuYUBnbWFpbC5jb20=', 'UXVhZHJhIDY5IGNvbmp1bnRvIEEgbG90ZSAwNSBTZXRvciAwOQ==', 'Tm9pdGU=', 'T3BlcmFkb3IgZGUgY2FpeGE=', 'TmVuaHVt', 'TelkaW8gSW5jb21wbGV0bw==', 'R29p4XM=', 'U0VKQSBPIFBSSU1FSVJPIEEgQ09NRU5UQVI=', '0', '0', '0', 'Tk9WTw==', '2016-02-26',);
INSERT INTO usuario VALUES ( 'Agilson Alves da Silva Junior', 'MDQzOTIxODIxNzc=', 'TWFzY3VsaW5v', 'Q2FzYWRvKGEp', 'MjkwODE5OTM=', 'NjEzNjEzNDU2Nw==', 'OTE1Nzk1Mjg=', 'YWdpbHNvbl94eHRAaG90bWFpbC5jb20=', 'UXVhZHJhIDY5IGNvbmp1bnRvIEEgbG90ZSAwNSBTZXRvciAwOQ==', 'TWFuaOM=', 'U2VndXJhbudh', 'TmVuaHVt', 'U3VwZXJpb3IgQ29tcGxldG8=', 'UmlvIEdyYW5kZSBkbyBTdWw=', 'U0VKQSBPIFBSSU1FSVJPIEEgQ09NRU5UQVI=', '5', '10', '10', 'QXZhbGlhZG8=', '2016-02-26',);
INSERT INTO usuario VALUES ( 'José  de Aragão  junior', 'MjM0NTY3OTIzNTg=', 'TWFzY3VsaW5v', 'U29sdGVpcm8oYSk=', 'MDQxMTE5OTI=', 'NjEzNjEzNDU2Nw==', 'NjEzNjE4OTQ1Ng==', 'am9z6XRAaG90bWFpbC5jb20=', 'UXVhZHJhIDY5IGNvbmp1bnRvIEEgbG90ZSAwNSBTZXRvciAwOQ==', 'Tm9pdGU=', 'UHJvdmFkb3Jlcw==', 'TWFpcyBxdWUgNg==', 'U3VwZXJpb3IgQ29tcGxldG8=', 'UGlhde0=', 'U0VKQSBPIFBSSU1FSVJPIEEgQ09NRU5UQVI=', '5', '10', '0', 'RW0gQW5kYW1lbnRv', '2016-03-01',);
INSERT INTO usuario VALUES ( 'Marlene Figueira Guedes', 'MjM4NDcyNjEzODQ=', 'RmVtaW5pbm8=', 'Q2FzYWRvKGEp', 'MjIxMTE4ODk=', 'NjE5MzY3NTg5Mw==', 'OTE1Nzk1Mjg=', 'TWFybGVuZUBob3RtYWlsLmNvbQ==', 'cXVhbmRyYSBzZW0gbm9tZSBydWEgMyBsb3RlIHF1YXRybw==', 'SW50ZXJtZWRpYXJpbw==', 'RXNjcml0b3Jpbw==', 'NQ==', 'U3VwZXJpb3IgQ3Vyc2FuZG8=', 'UGFyYW7h', 'U0VKQSBPIFBSSU1FSVJPIEEgQ09NRU5UQVI=', '5', '5', '10', 'Tk9WTw==', '2016-03-16',);
INSERT INTO usuario VALUES ( 'Yago Afonso Solano', 'ODI4MjgyODQ4Mjg=', 'TWFzY3VsaW5v', 'RGl2b3JjaWFkbyhhKQ==', 'MjIxMTE4ODI=', 'NjE5MzY3NTg5Mw==', 'OTE1Nzk1Mjg=', 'WWFnb0Bob3RtYWlsLmNvbQ==', 'cXVhbmRyYSBzZW0gbm9tZSBydWEgMyBsb3RlIHF1YXRybw==', 'TWFuaOM=', 'T3BlcmFkb3IgZGUgY2FpeGE=', 'TmVuaHVt', 'UPNzLUdyYWR1YefjbyBJbmNvbXBsZXRv', 'U+NvIFBhdWxv', 'U0VKQSBPIFBSSU1FSVJPIEEgQ09NRU5UQVI=', '5', '5', '10', 'Tk9WTw==', '2016-03-16',);
INSERT INTO usuario VALUES ( 'Wesley Marconi de Trindade', 'MjczODQ4MTcyODg=', 'TWFzY3VsaW5v', 'U29sdGVpcm8oYSk=', 'MjIxMTE5OTM=', 'NjE5MzY3NTg5Mw==', 'OTE1Nzk1Mjg=', 'd2VzbGV5QGhvdG1haWwuY29t', 'cXVhbmRyYSBzZW0gbm9tZSBydWEgMyBsb3RlIHF1YXRybw==', 'TWFuaOM=', 'T3BlcmFkb3IgZGUgY2FpeGE=', 'TmVuaHVt', 'TelkaW8gQ3Vyc2FuZG8=', 'VG9jYW50aW5z', 'U0VKQSBPIFBSSU1FSVJPIEEgQ09NRU5UQVI=', '5', '5', '10', 'QXJxdWl2YWRv', '2016-03-16',);
INSERT INTO usuario VALUES ( 'Viviane Almenda Albuquerque', 'MjkzODE3MTM4Mzk=', 'RmVtaW5pbm8=', 'Q2FzYWRvKGEp', 'MjIxMTE5OTM=', 'NjE5MzY3NTg5Mw==', 'OTE1Nzk1Mjg=', 'Vml2aWFuZUBob3RtYWlsLmNvbQ==', 'cXVhbmRyYSBzZW0gbm9tZSBydWEgMyBsb3RlIHF1YXRybw==', 'Tm9pdGU=', 'RXNjcml0b3Jpbw==', 'MQ==', 'RnVuZGFtZW50YWwgQ3Vyc2FuZG8=', 'U2FudGEgQ2F0YXJpbmE=', 'U0VKQSBPIFBSSU1FSVJPIEEgQ09NRU5UQVI=', '5', '5', '10', 'Q29udHJhdGFkbw==', '2016-03-16',);
INSERT INTO usuario VALUES ( 'Gleyciane Alves Cunha', 'MjgyNzczNzM3Mjc=', 'RmVtaW5pbm8=', 'U29sdGVpcm8oYSk=', 'MjIxMTIwMTI=', 'NjE5MzY3NTg5Mw==', 'OTE1Nzk1Mjg=', 'R2xleWNpYW5lQGhvdG1haWwuY29t', 'cXVhbmRyYSBzZW0gbm9tZSBydWEgMyBsb3RlIHF1YXRybw==', 'SW50ZXJtZWRpYXJpbw==', 'Q3JlZGlhcmlv', 'TmVuaHVt', 'U3VwZXJpb3IgQ29tcGxldG8=', 'TWF0byBHcm9zc28gZG8gU3Vs', 'U0VKQSBPIFBSSU1FSVJPIEEgQ09NRU5UQVI=', '5', '5', '10', 'QXZhbGlhZG8=', '2016-03-16',);
INSERT INTO usuario VALUES ( 'Sandra Nogueira Martell', 'ODg0MTg4OTQxODk=', 'RmVtaW5pbm8=', 'RGl2b3JjaWFkbyhhKQ==', 'MDQxMTE5OTI=', 'NjE5MzY3NTg5Mw==', 'OTE1Nzk1Mjg=', 'U2FuZHJhQGhvdG1haWwuY29t', 'cXVhbmRyYSBzZW0gbm9tZSBydWEgMyBsb3RlIHF1YXRybw==', 'TWFuaOM=', 'U2VndXJhbudh', 'NA==', 'UPNzLUdyYWR1YefjbyBDb21wbGV0bw==', 'TWF0byBHcm9zc28=', 'U0VKQSBPIFBSSU1FSVJPIEEgQ09NRU5UQVI=', '5', '5', '20', 'QXZhbGlhZG8=', '2016-03-16',);
INSERT INTO usuario VALUES ( 'Amanda Santana de Souza', 'MTcyMTczNzMyNzE=', 'RmVtaW5pbm8=', 'U29sdGVpcm8oYSk=', 'MDQxMTE5OTI=', 'NjE5MzY3NTg5Mw==', 'OTE1Nzk1Mjg=', 'YW1hbmRhQGhvdG1haWwuY29t', 'cXVhbmRyYSBzZW0gbm9tZSBydWEgMyBsb3RlIHF1YXRybw==', 'Tm9pdGU=', 'Q3JlZGlhcmlv', 'TmVuaHVt', 'RnVuZGFtZW50YWwgSW5jb21wbGV0bw==', 'TWluYXMgR2VyYWlz', 'U0VKQSBPIFBSSU1FSVJPIEEgQ09NRU5UQVI=', '5', '5', '20', 'Tk9WTw==', '2016-03-16',);
INSERT INTO usuario VALUES ( 'Michael Vasques Diniz', 'ODEzODMxODMyMTg=', 'TWFzY3VsaW5v', 'Q2FzYWRvKGEp', 'MDQxMTE5OTI=', 'NjE5MzY3NTg5Mw==', 'OTE1Nzk1Mjg=', 'TWljaGFlbEBob3RtYWlsLmNvbQ==', 'cXVhbmRyYSBzZW0gbm9tZSBydWEgMyBsb3RlIHF1YXRybw==', 'TWFuaOM=', 'VmVuZGFz', 'Mg==', 'UPNzLUdyYWR1YefjbyBJbmNvbXBsZXRv', 'TWFyYW5o428=', 'U0VKQSBPIFBSSU1FSVJPIEEgQ09NRU5UQVI=', '5', '5', '20', 'RW0gQW5kYW1lbnRv', '2016-03-16',);
INSERT INTO usuario VALUES ( 'Helena Smith Velasques', 'MTIzODQxNDE4OTQ=', 'RmVtaW5pbm8=', 'Q2FzYWRvKGEp', 'MDIwOTE5OTU=', 'NjE5MzY3NTg5Mw==', 'OTE1Nzk1Mjg=', 'SGVsZW5hQGhvdG1haWwuY29t', 'cXVhbmRyYSBzZW0gbm9tZSBydWEgMyBsb3RlIHF1YXRybw==', 'Tm9pdGU=', 'RXN0b3F1ZQ==', 'TmVuaHVt', 'UPNzLUdyYWR1YefjbyBJbmNvbXBsZXRv', 'QWxhZ29hcw==', 'U0VKQSBPIFBSSU1FSVJPIEEgQ09NRU5UQVI=', '5', '15', '20', 'Tk9WTw==', '2016-03-16',);
INSERT INTO usuario VALUES ( 'Nestor Camargo Vieira', 'OTI5MzgyNDgyODg=', 'TWFzY3VsaW5v', 'RGl2b3JjaWFkbyhhKQ==', 'MDIwOTE5OTU=', 'NjE5MzY3NTg5Mw==', 'OTE1Nzk1Mjg=', 'bmVzdG9yQGhvdG1haWwuY29t', 'cXVhbmRyYSBzZW0gbm9tZSBydWEgMyBsb3RlIHF1YXRybw==', 'Tm9pdGU=', 'T3BlcmFkb3IgZGUgY2FpeGE=', 'MQ==', 'UPNzLUdyYWR1YefjbyBDdXJzYW5kbw==', 'QW1hem9uYXM=', 'U0VKQSBPIFBSSU1FSVJPIEEgQ09NRU5UQVI=', '5', '15', '20', 'Tk9WTw==', '2016-03-16',);
