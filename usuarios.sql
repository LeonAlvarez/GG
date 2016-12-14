-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2016 at 07:30 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db3`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido1` varchar(30) NOT NULL,
  `apellido2` varchar(30) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `admin` tinyint(4) NOT NULL DEFAULT '0',
  `foto` longblob,
  `clave` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido1`, `apellido2`, `email`, `telefono`, `admin`, `foto`, `clave`) VALUES
(1, 'Luciano', 'Leffler', 'Hartmann', 'torp.ariel@hotmail.com', '(875) 274-9936', 0, NULL, '$2y$10$5m6QYSMzeoFo2m4TWhCFi.Jv8mj4liEB6ZZgOhrKdgQyg/BFUamT.'),
(2, 'Marco', 'Yundt', 'Lindgren', 'marlin97@gmail.com', '785.625.0902', 0, NULL, '$2y$10$TAcngWHdh8nniUJX8aybROgdQRz2cvrZvvsMykyaUmMPHjbikIQHG'),
(3, 'Maiya', 'Berge', 'Quigley', 'lyla40@hotmail.com', '615.271.9856 x569', 0, NULL, '$2y$10$6GkDw.CRG0OY4S58XfutoO2ghB8iN9ACdA4uEyYb1CUXHX/7nRW.m'),
(4, 'Rossie', 'Upton', 'Boyle', 'zbrekke@yahoo.com', '+13983644489', 0, NULL, '$2y$10$Bi9kQZIHfvzAzlFApkxMj.gO8dYcQsRjxB9SQJjz730p0tGmMrPFq'),
(5, 'Gilda', 'Nitzsche', 'Dickinson', 'alexzander87@kemmer.com', '617-975-8474 x5576', 0, NULL, '$2y$10$OfJBP0lEdNljc.FpWXuGuO7gqi6FM5G2d4ok8YhmZKpf/jejXa5pW'),
(6, 'Ariel', 'Kohler', 'Cormier', 'dooley.ursula@hotmail.com', '918-559-2155 x660', 0, NULL, '$2y$10$8aqdQQNM9j8tjs4F1yM14Odc8xuik516kghH8Tiyxjz0eEFbM8F1e'),
(7, 'Gwen', 'Wyman', 'Batz', 'joel76@kiehn.com', '1-751-268-6564 x45708', 0, NULL, '$2y$10$dODE2k6TGZEzja7qDRmL9e0PuMUjf8JNhE4l/EA9tuz67ioe4easK'),
(8, 'Kaylin', 'Watsica', 'Aufderhar', 'felix.rau@gmail.com', '(731) 641-6139 x83136', 0, NULL, '$2y$10$vL2Fd66yAkT2zUwfbn0GAO34OP55vNy4EV7.fdAGLCgqFvU33YbCi'),
(9, 'Maybelle', 'Doyle', 'O\'Kon', 'kristoffer07@roob.biz', '(454) 340-1366', 0, NULL, '$2y$10$1DniViGV5FxVx/SsaUlYa.8zwrpWAI7UY1C3/OL6Qujd51QIZmJXi'),
(10, 'Nelson', 'Reichel', 'Rice', 'hettinger.zetta@west.org', '687.249.9892', 0, NULL, '$2y$10$nYaVEMUn8wWrZn/mBQNrxOlN4YbMpW4.rw9om9rRjVL6/N.gkWjNy'),
(11, 'Adah', 'Leuschke', 'Abernathy', 'cletus83@yahoo.com', '643-270-3974 x90100', 0, NULL, '$2y$10$l4/q7yJNH6YFMRoBjqiWhuKvkMqYHD9i5jt1L8IwgpwIDrY16zWmi'),
(12, 'Frederique', 'Monahan', 'Herman', 'ygreenfelder@gmail.com', '+1.907.550.2599', 0, NULL, '$2y$10$z0jZjgRaCmhfQ8Bj679yEuT5L8swJ1OKO2ZHsUDM.ic63HJ1j44sC'),
(13, 'Ethel', 'Koss', 'Farrell', 'tyreek.hackett@leuschke.com', '386.230.5216 x2090', 0, NULL, '$2y$10$UadGzhHdfj8IYrfDDv.qI.TnSy88QF3HCXr5oykTyzz7jAJUXMMjC'),
(14, 'Katheryn', 'Mertz', 'Ratke', 'nya.boehm@vandervort.com', '1-218-463-7687 x11736', 0, NULL, '$2y$10$WWTUsl1/8uIQdqeqgwj0BODW2sCV.HL3h0YezuQdpKlaTV5dbvJVC'),
(15, 'Cooper', 'Tromp', 'Shields', 'nicholaus.glover@gmail.com', '943-991-7958 x527', 0, NULL, '$2y$10$.L2AjmoVsyVchykY47iqTOaRSPM97E7Ig0/A0uO0y4XOX/Wh/8Cze'),
(16, 'Ted', 'Streich', 'White', 'elsa62@hotmail.com', '660.843.3334 x3398', 0, NULL, '$2y$10$ALkywJ5K8lWCqRFW1S5yauvo3CEKgXetlkBoCREQa7ss3TGS/v0VG'),
(17, 'Nella', 'Morar', 'Runolfsdottir', 'stroman.trisha@fahey.com', '(476) 746-9319 x808', 0, NULL, '$2y$10$GyovPWLyHbs4J6mZ6.kRS.tnmcElRpHBGTcAzJUFoAYsDygaiuuSe'),
(18, 'Cary', 'Daugherty', 'Donnelly', 'emerald47@gmail.com', '(417) 656-2400 x2536', 0, NULL, '$2y$10$Irt02v1CtffFxFFuyT8AyeQZt5TmWVxfKxUsGADIy.gvkafZmnhUO'),
(19, 'Johan', 'Nikolaus', 'Bednar', 'brakus.sally@boehm.com', '871.915.8124 x774', 0, NULL, '$2y$10$e4I/MXvQWebC3fUbEZc4k.hfIx4Hbz/z59OmostS2Jd2W1muSRuq.'),
(20, 'Stephan', 'Nienow', 'Ankunding', 'gkreiger@gmail.com', '(390) 651-4731 x81202', 0, NULL, '$2y$10$Bdg4EoxhMdmVBWzd.kz/IOpT6ri8IDaxnjExcPDXQW2h3paI3lcbm'),
(21, 'Kailyn', 'Swift', 'Barton', 'sandra16@bechtelar.com', '(927) 587-4741', 0, NULL, '$2y$10$8eleWjVLXC50epX5h3RQZuolcSObSdU0.gYtj0UqpgNquEGaJ31Je'),
(22, 'Milan', 'Zemlak', 'Emmerich', 'armstrong.ramon@cronin.com', '1-734-366-0679 x43898', 0, NULL, '$2y$10$YXS06prqL7VVFs6L361AgeNNAulNRfip81lp5aoVtfeNTEcHzkZzO'),
(23, 'Astrid', 'Schmitt', 'Mraz', 'faye.maggio@gmail.com', '(709) 266-9144 x02690', 0, NULL, '$2y$10$Vgf3Or5Oh5DcQ/huU0lGLOIlCppwHpp/hjQgMdqK/uz/uUBYT3ngS'),
(24, 'Margarett', 'Hansen', 'Jacobi', 'cleo.mohr@waters.net', '694.720.6579', 0, NULL, '$2y$10$adg1.2LcGhxB1LWzAHzW5ucvRnLdfoQiJq6sNwYn3B1sa/o8tU7Zm'),
(25, 'Ramon', 'Brown', 'Rath', 'pollich.hassie@hotmail.com', '+15916241804', 0, NULL, '$2y$10$zAqChCPYf6spiiWMOMv45OYEJ.G448QSYAs82NW2cJGZXvZBa2RoC'),
(26, 'Ebony', 'Gislason', 'Kris', 'katrina.mann@bosco.com', '284.763.7900 x645', 0, NULL, '$2y$10$gVSih06fbxaUD9vYIZE8kuva1Ubh.8JjcHKBRvaGUa8nnxQVxO2EC'),
(27, 'Madelyn', 'Farrell', 'Kuhic', 'russel69@gutmann.com', '+1-580-371-2297', 0, NULL, '$2y$10$RqCem8wK3ipgdiqpg.B3ve9RAavl.UytCFkwPdxjrWGw09QbXtnPK'),
(28, 'Moriah', 'Rodriguez', 'Turcotte', 'loy.rogahn@gmail.com', '497.818.9998 x5329', 0, NULL, '$2y$10$lOoHSIutyCr1m5oT8A1i2OQiR7CyFgwPFM3Wlh/KL7Bx3kv0g44Ai'),
(29, 'Abigale', 'Rosenbaum', 'Kshlerin', 'grace99@yahoo.com', '+1.389.222.0448', 0, NULL, '$2y$10$Mv1oWjJkg2dLTQTunsUTLOnvsqQq1KEhG9UKcvx6J8Nsxisg03Ff6'),
(30, 'Talia', 'Hauck', 'Prohaska', 'bruen.earline@mcdermott.com', '1-472-803-4909', 0, NULL, '$2y$10$9NP4UCtoX34FkCRG.sw2j.zAVYnQKA7L9W9JnriEYmGOfQLwEOnLm'),
(31, 'Vladimir', 'Welch', 'Walsh', 'harber.antwan@hotmail.com', '861-751-5111 x1655', 0, NULL, '$2y$10$0biO4efhRGqja3YDXYEUROzhsIjMZqej6CHVKKV8gk9jwwxzd8SOi'),
(32, 'Selina', 'Williamson', 'Cormier', 'nienow.verona@gmail.com', '562-834-4417 x103', 0, NULL, '$2y$10$pZnoPkjWiZ80tBKNqxuEkushytuOY4rFEtJAI4iro05GCP3MQi31u'),
(33, 'Kurtis', 'Herman', 'Friesen', 'vyundt@walter.com', '971-552-8632', 0, NULL, '$2y$10$8b56kcTQvQzpVl2mlCcSuOF30dLN.qNHmMNzVhy9HO7UCeu/AkqGe'),
(34, 'Diamond', 'Streich', 'McLaughlin', 'miller.alden@mayer.info', '+1 (729) 629-4453', 0, NULL, '$2y$10$XZvLL4bbCAWF5wz8Ayz6MOAwTx75zbe/6a/fTXwwr7UqLgEdqzjPO'),
(35, 'Alena', 'Trantow', 'Mertz', 'purdy.eunice@hotmail.com', '+1-713-349-9940', 0, NULL, '$2y$10$0LekIw4OVXH125yMj13ng.02ti70aQSp/kP3fO64kTk8vvnzr6bE2'),
(36, 'Alysha', 'O\'Hara', 'Beer', 'abernathy.mertie@hotmail.com', '(751) 775-2517', 0, NULL, '$2y$10$Il0X542xLrwxC2KbX3WqVeJH3orpbsXdvlRqbXY42h9R0MSo5pGCi'),
(37, 'London', 'Zemlak', 'Wolff', 'jerry.romaguera@hotmail.com', '(578) 436-7107', 0, NULL, '$2y$10$.UXr4Xd9VbqI.hBw/LglH.O81CZJnPripCcM.1wS9HaOZ/AOPbzfq'),
(38, 'Kaycee', 'Schimmel', 'Adams', 'adrien88@hotmail.com', '419.557.7922 x175', 0, NULL, '$2y$10$417HBk0VACKOS9A5tNiTUO8W/1HMrtM0sZshm9aCsr8vOm28kHSpC'),
(39, 'Otto', 'Harris', 'Schmidt', 'gwisoky@hotmail.com', '+16366491084', 0, NULL, '$2y$10$xEgloqc5oWEjRlkzXM.Zq.nbhY5I9TcEDmJzUU6Qe1UZRXuR.q/d2'),
(40, 'Mohammed', 'Kris', 'Wiza', 'ymckenzie@strosin.com', '807.261.0010 x256', 0, NULL, '$2y$10$RUPeTuhd9W/Du.OOMm64OuGF/BRb/C4PvhUK47U87IelfEZE7yCLO'),
(41, 'Art', 'Hammes', 'Rau', 'august26@gmail.com', '1-625-744-7760', 0, NULL, '$2y$10$f.ZVPmWPk7mwCeONEcn6cO2MMc2wpQCdfk.jLLUU2yr.qA0OZ529u'),
(42, 'Lauriane', 'Schamberger', 'Bogisich', 'adams.monica@hickle.info', '+1-798-703-2913', 0, NULL, '$2y$10$//UAxLQ4DPnWztWOeMLtE.d.5AHKAXlmMFbFsjK4hgBNfDhj3C35C'),
(43, 'Rhoda', 'Windler', 'Keebler', 'otto44@hotmail.com', '595-368-2166', 0, NULL, '$2y$10$FEcDEEDMO.b9f08ferufxOPoiggniI6Lr2gMaOBZO8wyaLIS9s/Ta'),
(44, 'Javonte', 'Crist', 'Herman', 'qbode@vonrueden.biz', '1-228-616-1315 x4523', 0, NULL, '$2y$10$PvIBwvZrj2QkY0.f6mwhE./hH2U0GxREWHvJd4JTpBEhUtvkI0Rfi'),
(45, 'Melody', 'Hand', 'Schultz', 'wisoky.alek@yahoo.com', '+18653393034', 0, NULL, '$2y$10$pKzbjZv0xGFHtgykGOtpZuj3EODEs2GxDnMb0jO.T9fO3TcNYoTte'),
(46, 'Ivah', 'Rohan', 'Hilll', 'schaden.franz@dibbert.org', '312-654-7440', 0, NULL, '$2y$10$z21U.wT1CapB0AyLb/swA.XvYlgUZy041DLRAayLluETYw8aJ9ZXy'),
(47, 'Morris', 'Denesik', 'McCullough', 'marlene.johnston@bednar.net', '+1 (667) 575-0430', 0, NULL, '$2y$10$Tgql25p88EyeFOWuoJyKfO7/U0ORD2/kCqwHZjggLlnhQ0T8MNZQq'),
(48, 'Wilhelm', 'Blanda', 'Braun', 'khintz@yahoo.com', '(727) 547-8892 x9814', 0, NULL, '$2y$10$Wev7MS8vDwi0wJynBLgC1u00qbqV3gJw36qCfI84Mt7pUcuZ3740m'),
(49, 'Bridgette', 'Maggio', 'Kessler', 'germaine.gerhold@swaniawski.net', '(234) 364-9184 x351', 0, NULL, '$2y$10$IuQfWcTfPrfOf6AOejBRy.OSOoESa.0z1la7W3Q3ZRsA2WBrkZmuC'),
(50, 'Eleazar', 'Mohr', 'O\'Kon', 'beaulah43@yahoo.com', '(965) 207-0302', 0, NULL, '$2y$10$RLVUDZZnEWfMFpobO3xQauBMXGR4pq1m9rBt70Z08C44UGxqqjA/e'),
(51, 'Malcolm', 'Keeling', 'Medhurst', 'cordelia53@gmail.com', '737.714.4752 x937', 0, NULL, '$2y$10$VvRNq3W4SsrUbVCaCOmXr.to5I20K2F1dm7QYhdP5uaaBvRuidyAm'),
(52, 'Garnett', 'Denesik', 'Boehm', 'kuhic.cordell@hotmail.com', '+17242465374', 0, NULL, '$2y$10$ps9MhSMQHd9CymIUHUvCS.9In4u0onXCRsYfEnvYO6Kxbs8DQLfYC'),
(53, 'Leif', 'Turner', 'Dibbert', 'easton.towne@gmail.com', '715.869.5096 x8742', 0, NULL, '$2y$10$o.oG1G/XQqXUC7jnFd.go.N.3A/YRG7UFbyZV3X4/.E0.gV3ahYYq'),
(54, 'Dortha', 'Douglas', 'Leannon', 'gtorphy@hotmail.com', '624.525.7680', 0, NULL, '$2y$10$9GAtVg0qY/7NM7JR1/7.Q.FovJ6SmehfBxxqQlIip/R90e3yIctRC'),
(55, 'Hilda', 'Murphy', 'Jones', 'gerhold.chad@little.com', '(986) 657-0192 x02661', 0, NULL, '$2y$10$QhmoQ4uCRqaJqd6xbBKYSedpOWG1iKCNiALxa1YEec7oA2woW.qEi'),
(56, 'Magali', 'Collier', 'Stanton', 'zella00@oreilly.com', '1-529-363-0922 x48043', 0, NULL, '$2y$10$HiAMyXlbNkTHnTLR3gfCQ.OAvSDPtrbSVib7ao0Fcfor4ggl4nGmK'),
(57, 'Dortha', 'Conroy', 'Collier', 'estrella.feest@stanton.com', '1-568-532-6570', 0, NULL, '$2y$10$BDC9qlgd9NW59nBjX5SVkeHtSLRRYcs1I29yaUSj6k4Ta5LhFqJ0.'),
(58, 'Zelda', 'Graham', 'Mosciski', 'nkoss@hotmail.com', '(553) 851-2069', 0, NULL, '$2y$10$Bj8i0xGr2ZHvZu.gdlFhbOBKqFKIheYNyrxQXLbYhp5wU1PCclVF2'),
(59, 'Rhianna', 'Prohaska', 'Stehr', 'weissnat.zetta@hotmail.com', '295.614.5400', 0, NULL, '$2y$10$d4hHXF1nQmJDD8xU4Gj4vexEJ97wIKBQiVw1sZ/2354WKbG8Win0y'),
(60, 'Cielo', 'Reynolds', 'Doyle', 'monica.streich@mueller.com', '398-661-5658 x97079', 0, NULL, '$2y$10$WzDcvBxEHLIF5HGWJBksrOnBkWpRQR.d7t7OEKxabobBB5lDxhoCu'),
(61, 'Alia', 'Jones', 'Blanda', 'kris27@hotmail.com', '+1.941.941.7721', 0, NULL, '$2y$10$Ktr6w1rvDy9vELyIYuL4FeAYnAbesBy.J58EMvLreCL6s1XhRGXxu'),
(62, 'Forest', 'Wisozk', 'Fritsch', 'glen.mcglynn@yahoo.com', '1-575-831-5479 x154', 0, NULL, '$2y$10$JkTZEdqqZMYj4hU86k6UK.STDMSr7xzTF0jXKhm244bHXnvVble7G'),
(63, 'Gianni', 'Hermiston', 'Wolf', 'peter86@swaniawski.org', '1-927-306-4743', 0, NULL, '$2y$10$0lMo3u3ITIOeNXht5xzALuVZZedW2TM/PsvDUWTk5/YNltomHjChm'),
(64, 'Randi', 'Schroeder', 'Moore', 'brook.davis@gmail.com', '365.376.3921 x57212', 0, NULL, '$2y$10$wDMHW1Y.wvRdK2qmn0EnhuOztXwMCaMlJvlweQVNbr.UNpQWfKB2.'),
(65, 'Zella', 'Gutkowski', 'Lebsack', 'bernhard.brown@yahoo.com', '(640) 587-2617', 0, NULL, '$2y$10$U50ScJ/OEOa07.34DRJIDus6XVR15b5s34wAezsw5oRd2yvBcfMP2'),
(66, 'Desiree', 'Connelly', 'Williamson', 'kenyatta.grant@stehr.com', '+1.256.458.1525', 0, NULL, '$2y$10$Jgn85NxpJumOiOZBbTHEYOjefS3.KtQfi5fHWTppbUZxDGrZ1VHIG'),
(67, 'Marie', 'Jacobi', 'Berge', 'virgil.stark@considine.org', '842.993.1511', 0, NULL, '$2y$10$d3nQNUX/.9Jl.QVbkqECh.S1rkADgLs4DGbHdNBsQpE3dmU36xIG2'),
(68, 'Clint', 'Towne', 'Kuvalis', 'edward29@cartwright.com', '464-977-9933', 0, NULL, '$2y$10$A332KC2UrWczTAx3BJtPDe17Vbjnoee/khnCSWfAkSeeiYV8bBHrG'),
(69, 'Armand', 'Marvin', 'Mraz', 'hills.selina@gmail.com', '+13833606081', 0, NULL, '$2y$10$0qeSb1X8KjQEDTl7asIaROlQFUvr8miJXArdqczPUF6ixgpm7q0tC'),
(70, 'Rico', 'Moore', 'Jast', 'gspinka@gmail.com', '(427) 458-4460', 0, NULL, '$2y$10$V0hx20o45cWyyaL99ttUg.gL9WB/6zqgKH9h5Dp7yVrSKEgzDOksy'),
(71, 'Elton', 'Rohan', 'Friesen', 'syble.marvin@gmail.com', '1-380-646-0462 x79822', 0, NULL, '$2y$10$GNtEHGAZsLyoa97UhGu3s.cNruZStCUSzqlJkTAXVFiKmZVq7kWO6'),
(72, 'Eric', 'Konopelski', 'Gleason', 'kelsi.muller@gmail.com', '(535) 312-3493', 0, NULL, '$2y$10$AV5FpqGCU2A5DJXvndfIXO/hhwFKLJ0fS4wPrz6XvYAbv8N1oRXce'),
(73, 'Clovis', 'Dibbert', 'Marvin', 'walsh.alda@jakubowski.com', '+1-353-414-2163', 0, NULL, '$2y$10$aRilhUiukKMwgXMEEPPtG.XRW4MWEK5ZJs5wgeoKp3cMMBWdo9iqi'),
(74, 'Akeem', 'Bahringer', 'Glover', 'hassie.ritchie@metz.com', '(543) 938-0529', 0, NULL, '$2y$10$Sc5A9pLADq80V6j8DVDKeerrIRmPbf.0LgnWSitSvnN0/VRp.S8hK'),
(75, 'Gabriella', 'Nikolaus', 'Turner', 'lon.schuppe@yahoo.com', '216-246-1421 x2826', 0, NULL, '$2y$10$MLh7sulh3FAUP5lDHWE8zeKar39wW1BvxS3zLVV44SuVj5X3z6Gjy'),
(76, 'Francesca', 'Cummings', 'Torphy', 'mya.dare@yahoo.com', '(731) 534-1169', 0, NULL, '$2y$10$6.PJglxl.vk32C9IKDtPQeIw24Adhr0r7wXdDdoFwC8Q4wIM4oW7u'),
(77, 'Austyn', 'Eichmann', 'Hahn', 'will.haley@hickle.com', '694.851.6943', 0, NULL, '$2y$10$P4h8aJoWsH9tGAJZMRJCUeGMtfS6qZBVyjeW5SBEaC8MP/v3innmi'),
(78, 'Charlie', 'Cronin', 'Tromp', 'lawson.walker@yahoo.com', '1-342-606-6300 x32233', 0, NULL, '$2y$10$2UZZBN/v.Ty39p5Hvv3TL.Ajrm8Z42t3.56u2pSw3j1OBKGwAWslG'),
(79, 'Camilla', 'Sporer', 'Mertz', 'yasmin.ritchie@yahoo.com', '+1 (946) 902-7683', 0, NULL, '$2y$10$TOv8CG0CqGFOkWU80XG69.6b52TgO2k1JGZmKgYAHClwTz4IYPJGK'),
(80, 'Ignacio', 'Harber', 'Kshlerin', 'nikolaus.mason@grady.net', '(292) 684-6869 x3896', 0, NULL, '$2y$10$88vQrf0nyW8oa87D9jEP2eC2wBXQP7.yTwKU/qTx1xjDiaOJsDoke'),
(81, 'Kari', 'O\'Keefe', 'Prohaska', 'sarai45@yahoo.com', '+1.894.282.7588', 0, NULL, '$2y$10$OgU9wiSeaad/DMhuTR4FNOWNuTni.UP/LMDcE9JFactXXtsBrN8zG'),
(82, 'Tavares', 'Zboncak', 'Haag', 'wgoodwin@gmail.com', '(791) 705-0589 x494', 0, NULL, '$2y$10$G6Sbg/xF6KbDqm3bK0wSB.HdHqLARcnlh3NvH5jqG32ZwKSTCy7.u'),
(83, 'Spencer', 'Kris', 'Baumbach', 'astracke@treutel.com', '968.277.3701', 0, NULL, '$2y$10$zCeHcsZqmSkld8YxXbZjFemsOwxn2fx//SBQJ1INUNlZ5mY0M9Ibm'),
(84, 'Reese', 'Stehr', 'Smith', 'elvera.schoen@gmail.com', '913-571-5098', 0, NULL, '$2y$10$6M9XgzEIwR11sAoCLoZvZeeirrIXv8cip.5jvsYiPz.JkB/2fcmOW'),
(85, 'Sarai', 'Olson', 'Olson', 'magnolia61@johnson.com', '924-863-1379 x5837', 0, NULL, '$2y$10$jI33HUmxBIg/uyeMQvHjN.toa.zrfDa5FcKW.jK.ln9JuWG28rcee'),
(86, 'Rowan', 'Kertzmann', 'Doyle', 'paige33@gmail.com', '(262) 403-2655', 0, NULL, '$2y$10$kAa5zjCT2ZXI11As8Pemgut0nBoks.IUkwHUZbQ6Le2XQyhxaKL2a'),
(87, 'Gloria', 'Hermann', 'Lowe', 'carson60@gusikowski.com', '628-467-4876 x157', 0, NULL, '$2y$10$F8o40DjbfNS4M26Hqc8fgefRHV1mOaYLhwzQkBk9tsM3s74Lot2nK'),
(88, 'Corbin', 'Trantow', 'Blanda', 'wruecker@rippin.org', '459-697-7333', 0, NULL, '$2y$10$NXsMTIvsy7g9FOeHwW.0O.e2z3d4jQ/07gi20waw3ASZn4NbZr9w2'),
(89, 'Elmira', 'Mayert', 'Halvorson', 'weber.vicente@gmail.com', '(873) 307-9333 x44907', 0, NULL, '$2y$10$Te.5djhTkCJBDqBI0AdFh.R8NQVbmAHx0ojCh/B4qMUwC00ejxtK.'),
(90, 'Madonna', 'Dibbert', 'Schimmel', 'jerrold77@hotmail.com', '431.362.1641', 0, NULL, '$2y$10$.ziBHLtdRa5AUbO1L2r.Q.P1YX0KgVp13WNVPlarhVgZ0MqCwIoGy'),
(91, 'Tiara', 'Keeling', 'Rowe', 'feeney.richie@gmail.com', '+1-563-750-7475', 0, NULL, '$2y$10$ExBjqC3jX0khAG5MLVNYGuaYexXWJDLqTf5646BGrLTxWYOsdIAOa'),
(92, 'Santiago', 'Upton', 'Grady', 'dabshire@paucek.com', '(971) 603-5737', 0, NULL, '$2y$10$a2AJBuSxKj90tcIO1b550O7djoqZMYrMHlPToH7RYEnxAEN9JoY3y'),
(93, 'Cortney', 'Beahan', 'Brekke', 'pcormier@hotmail.com', '+1 (772) 468-4477', 0, NULL, '$2y$10$3El4kQOR5VLTZnUs3PG1OeOySgfzZWmjfqy0Nu3fdec1SddqICw/6'),
(94, 'Deondre', 'Orn', 'Gleichner', 'osinski.alisa@yahoo.com', '1-979-743-9826 x24090', 0, NULL, '$2y$10$Y1P5aF6G0J3G6WbPY1HXfe3.2Ptki6WPFBr4s2ZmkbAs6RZYcTRAa'),
(95, 'Leilani', 'Bogan', 'Price', 'jany.dooley@strosin.net', '959.317.2272', 0, NULL, '$2y$10$qf0mugC5k269R2DIi7gSLeoP5K1nt8UYn7a0IuDwkwdgMMO5cMgOa'),
(96, 'Broderick', 'Marvin', 'Powlowski', 'niko.walsh@gmail.com', '1-536-943-2151 x819', 0, NULL, '$2y$10$btmjQR7WDF5mJRnQWYInO.tS1EqxyVue/Fk/xVsUoGR9TS/EifULi'),
(97, 'Jaron', 'Paucek', 'Olson', 'umante@yahoo.com', '756.205.8250 x76651', 0, NULL, '$2y$10$OV3/PR.XuXIxU/OTgBYgnu3I2MQ9EYgR.rnWMyIA9EZrHgJ/pMlbS'),
(98, 'Sandy', 'Maggio', 'Bauch', 'sjohnson@hotmail.com', '1-658-402-6976 x26217', 0, NULL, '$2y$10$XrHcQhyBQ3AQ888QAzZZEu48LSg3xHzcGmBL6nyDvbOWldGe7qFwS'),
(99, 'Theresa', 'Grant', 'Kuphal', 'prosacco.meghan@jones.com', '584-990-9855 x92958', 0, NULL, '$2y$10$8OPFRA/bysY.MEHjPaExOeptTa3lvQ6rBZ1tExsQQj63XrAnzNW/6'),
(100, 'Maximo', 'Pfannerstill', 'Tremblay', 'balistreri.fabian@gmail.com', '943.731.1830 x05346', 0, NULL, '$2y$10$SiYdx2EUwX.kK4k/7V01g.upH/pGpaal6tcmD5KZCTJLzgvA7BkC6'),
(101, 'Lazaro', 'Strosin', 'Walter', 'easton84@hotmail.com', '(564) 299-2944', 0, NULL, '$2y$10$0Ti.vZz6c4Ly/1k415hZ4u3qFOKVvW42s7qXC/38tYB.q9AGvJSRa'),
(102, 'Theodora', 'Reinger', 'Feil', 'qschaden@gmail.com', '939-797-8409 x54066', 0, NULL, '$2y$10$3x8eXzJ3XRnQ5R.HyHfVQeLOZaeg4EHDH.1QRXxVPXQCF7qLiFL3W'),
(103, 'Hailie', 'Lind', 'Buckridge', 'cratke@haley.com', '+1-517-519-3110', 0, NULL, '$2y$10$at/qYO75xwqnbRWXo7vhQugqr636QSw6klb2vVECJOLLq.4FRxjo6'),
(104, 'Ceasar', 'Grady', 'Satterfield', 'buckridge.charlotte@yahoo.com', '(785) 436-0674', 0, NULL, '$2y$10$z9/ifTJO6qN6K6SUfs40A.EICdxRbmQPsQzYqC4o.jplOrWrCnFqu'),
(105, 'Holden', 'Mitchell', 'Cassin', 'augustus.wyman@barton.com', '+1-679-319-5260', 0, NULL, '$2y$10$kO9.mcobZjkR0BE9P7OiTO/LoEz.KQbGGqfMyRe81Qj.Pvf0mAZV2'),
(106, 'Winona', 'Osinski', 'Ruecker', 'mharris@wolff.biz', '1-239-612-1479 x3556', 0, NULL, '$2y$10$0G/CwsdyE..qNmJMA2.JReNYyl4eWm/xMhr.4UaxJnB1ymSceRvB2'),
(107, 'Ella', 'Becker', 'Hayes', 'kristy.kertzmann@cronin.com', '+1-217-541-2409', 0, NULL, '$2y$10$YxzGo6h5ryA0NaNG3DpzROj3NUPK5NwRw.VTz3Mtj2f8QjUcF8T8K'),
(108, 'Kenneth', 'Goldner', 'Carter', 'rath.casimir@murphy.com', '+1-390-891-9591', 0, NULL, '$2y$10$BE7gEFg3yLHkC4GCwJVu4.dGjZtzUF5pHhHIk6YilbtBSHvTuqzf2'),
(109, 'Asa', 'Connelly', 'Cassin', 'dach.verner@howe.biz', '334.326.9144 x29412', 0, NULL, '$2y$10$isbhRBlYGnJZ7ebxt30IdenjpBThsEOBCDduyevg0PGmZQerwPOiq'),
(110, 'Libbie', 'Terry', 'Maggio', 'kwhite@hotmail.com', '904-689-2399 x5913', 0, NULL, '$2y$10$U0m3/TB6jEKYRdy9Nfim6uK07HVHr1UayMCK0l14Ncfok8y4vCoxa'),
(111, 'Dayna', 'Grady', 'Haag', 'fritsch.watson@vonrueden.com', '964-427-8075', 0, NULL, '$2y$10$dyvY5KLR8caUnVraH.BX6eqGUGva9YtBKPpx45HUjtHibeK60ROEy'),
(112, 'Domingo', 'Weissnat', 'Roberts', 'aimee.ruecker@metz.com', '(252) 784-0009', 0, NULL, '$2y$10$OUJDCG6Lv0BIVtSo9c4dJuRGYoslQQroiVANbxuWbT/mQeb4kzxzu'),
(113, 'Annie', 'Roob', 'Bogisich', 'zita28@yahoo.com', '252.677.5560', 0, NULL, '$2y$10$sdkpMDvsBP2oOGU5l/1yTeIO3Md/fBdM0HjsLt3hwsq5bKe9xXdx2'),
(114, 'Stefanie', 'Bashirian', 'Orn', 'hstrosin@hotmail.com', '+15658593861', 0, NULL, '$2y$10$BQVQ3mP6w22gGneoNP8eBuhc55xFrb.6uYzTaPgM.i8Hxk5.7osWS'),
(115, 'Ryder', 'Beier', 'Mann', 'letitia81@wuckert.com', '+13933334258', 0, NULL, '$2y$10$8UxBXFB9cGiX7udO2XxYi.ha5U1MWMeHmtFvwRs565vPAfsybRS4i'),
(116, 'Adam', 'Gorczany', 'Kautzer', 'iokon@gmail.com', '420-793-2496 x30039', 0, NULL, '$2y$10$97GSpo9HEHkQfXTJH/5usurvtqmDlFcTbULvIYOn7upGsGXdjWu/y'),
(117, 'Clare', 'Schoen', 'Monahan', 'muhammad.schinner@swift.com', '468-767-6438 x20591', 0, NULL, '$2y$10$Cj810euQakCao9pwnKc9veSBeAVq2DDNJQLaha51rPKswBwotarSu'),
(118, 'Pasquale', 'Satterfield', 'Schultz', 'taylor.gibson@rohan.org', '+1-332-606-4810', 0, NULL, '$2y$10$kfBn8mkK7KUY9/bz/1MReePkdY8xnFL/mQJtbRErAzWkEG.Ijf1D2'),
(119, 'Donavon', 'Muller', 'Wintheiser', 'pbarton@champlin.com', '(940) 518-1007', 0, NULL, '$2y$10$gEaZ8oJPEdraiHaFct1tU.a4UiW4Fe8FQTijZrNMmXFnkSJJljhkm'),
(120, 'Ruby', 'Kuhlman', 'Cassin', 'gblick@feeney.com', '252-958-0264 x5042', 0, NULL, '$2y$10$pCL2khLkQ/zaDaAX5WMXuutFF1IB/Fwu5FtYR9M7OHoHkKrdZrK8G');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
