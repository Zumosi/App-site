/**CREATE TABLE `stat_piece` (

  `piece_id` int(11) NOT NULL AUTO_INCREMENT,

  `piece_name` varchar(30) collate latin1_general_ci NOT NULL,


  PRIMARY KEY  (`piece_id`)

);*/

CREATE TABLE `consommation_jour` (

  `piece_id` mediumint(9) NOT NULL,
  `piece_name` varchar(30) collate latin1_general_ci NOT NULL,
  `consommation_value` mediumint(9) NOT NULL,
  `date` date NOT NULL


);

CREATE TABLE `puissance_jour` (

  `piece_id` mediumint(9) NOT NULL,
  `piece_name` varchar(30) collate latin1_general_ci NOT NULL,
  `puissance_value` mediumint(9) NOT NULL,
  `date` date NOT NULL


);

