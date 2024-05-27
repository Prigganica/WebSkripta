CREATE TABLE `zaposleni` (
  `id` int(11) NOT NULL,
  `ime` varchar(20) NOT NULL,
  `grad` varchar(30) NOT NULL,
  `godiste` int(11) NOT NULL,
  `zanimanje` varchar(45) NOT NULL
)

INSERT INTO `zaposleni` (`id`, `ime`, `grad`, `godiste`, `zanimanje`) VALUES
(1, 'Marko', 'Kotor', 1990, 'Kuvar'),
(2, 'Marko', 'Danilovgrad', 1989, 'Pekar'),
(3, 'Marko', 'Kotor', 1995, 'Student'),
(4, 'Marko', 'Danilovgrad', 1955, 'Penzioner'),
(5, 'Janko', 'Podgorica', 1990, 'Fudbaler');
