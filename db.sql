--Create a database called (hng_task2)

--copy this code in the console and press ctrl+enter


CREATE TABLE IF NOT EXISTS `reg_user` (
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

