# Host: localhost  (Version: 5.5.5-10.4.32-MariaDB)
# Date: 2024-06-06 18:18:33
# Generator: MySQL-Front 5.3  (Build 4.249)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "autores"
#

DROP TABLE IF EXISTS `autores`;
CREATE TABLE `autores` (
  `autor_id` int(11) NOT NULL AUTO_INCREMENT,
  `autor_nome` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`autor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "autores"
#

INSERT INTO `autores` VALUES (8,'Autor B'),(9,'Autor C'),(11,'autor teste');

#
# Structure for table "categorias"
#

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `categ_id` int(11) NOT NULL AUTO_INCREMENT,
  `categ_nome` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`categ_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "categorias"
#

INSERT INTO `categorias` VALUES (1,'Ficção Científica'),(2,'Romance'),(3,'Suspense'),(4,'Ficção Científica');

#
# Structure for table "comentarios"
#

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE `comentarios` (
  `comentario_id` int(11) NOT NULL AUTO_INCREMENT,
  `livro_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  `data_comentario` date DEFAULT NULL,
  PRIMARY KEY (`comentario_id`),
  KEY `livro_id` (`livro_id`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "comentarios"
#

INSERT INTO `comentarios` VALUES (1,1,2,'Comentário sobre Livro X','2024-05-21'),(2,2,3,'Comentário sobre Livro Y','2024-05-16'),(4,16,13,'dasdasdasdas','0000-00-00'),(5,16,13,'dteste funcinoou funafusnfasundasund funciona\r\n','2024-06-06'),(7,16,14,'teste teste \r\n','2024-06-06'),(8,16,14,'dsadas','2024-06-06'),(9,16,14,' asfuasnfa funfa funfaasfuasnfa funfa funfaasfuasnfa funfa funfaasfuasnfa funfa funfaasfuasnfa funfa funfa','2024-06-06'),(11,12,22,'TOP\r\n','2024-06-06');

#
# Structure for table "emprestimos"
#

DROP TABLE IF EXISTS `emprestimos`;
CREATE TABLE `emprestimos` (
  `empres_id` int(11) NOT NULL AUTO_INCREMENT,
  `empres_livro_id` int(11) DEFAULT NULL,
  `empres_user_id` int(11) DEFAULT NULL,
  `empresdata_emprestimo` date DEFAULT NULL,
  `data_devolucao` date DEFAULT NULL,
  `empres_status` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`empres_id`),
  KEY `empres_livro_id` (`empres_livro_id`),
  KEY `empres_user_id` (`empres_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "emprestimos"
#

INSERT INTO `emprestimos` VALUES (1,1,1,'2024-05-20','2024-06-20','emprestado'),(2,2,2,'2024-05-15','2024-06-15','emprestado'),(3,1,1,'2024-05-20','2024-06-20','emprestado'),(4,2,2,'2024-05-15','2024-06-15','emprestado'),(18,11,12,'2024-05-10','2024-06-03','devolvido'),(21,11,12,'2024-05-31','2024-06-05','devolvido'),(22,12,26,'2029-02-05','2024-06-06','devolvido');

#
# Structure for table "livros"
#

DROP TABLE IF EXISTS `livros`;
CREATE TABLE `livros` (
  `livro_id` int(11) NOT NULL AUTO_INCREMENT,
  `livro_titulo` varchar(200) DEFAULT NULL,
  `livro_autor_id` int(11) DEFAULT NULL,
  `livro_categ_id` int(11) DEFAULT NULL,
  `livro_ano_publ` int(11) DEFAULT NULL,
  PRIMARY KEY (`livro_id`),
  KEY `livro_autor_id` (`livro_autor_id`),
  KEY `livro_categ_id` (`livro_categ_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "livros"
#

INSERT INTO `livros` VALUES (11,'a',1,1,1999),(12,'Harry Potter',8,1,1999),(13,'LIVRO TESTE TESTE',9,3,1999),(14,'teste teste teste ',8,3,1596),(15,'dsa',8,1,1999),(16,'O pequeno príncipe',8,3,2019);

#
# Structure for table "reservas"
#

DROP TABLE IF EXISTS `reservas`;
CREATE TABLE `reservas` (
  `reserva_id` int(11) NOT NULL AUTO_INCREMENT,
  `livro_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `data_reserva` date DEFAULT NULL,
  PRIMARY KEY (`reserva_id`),
  KEY `livro_id` (`livro_id`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "reservas"
#

INSERT INTO `reservas` VALUES (1,3,3,'2024-05-18'),(3,11,12,'2023-03-15'),(4,11,12,'0000-00-00'),(5,13,14,'0000-00-00'),(6,12,26,'2025-03-15');

#
# Structure for table "usuarios"
#

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_nome` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_senha` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "usuarios"
#

INSERT INTO `usuarios` VALUES (22,'','aasdadas',''),(23,'','asdasdas',''),(24,'','sd asd asd',''),(25,'sdas','safadfasdsa','dsa'),(26,'Alguem','teste','teste');
