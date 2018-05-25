<?php
require_once 'DB.php';

$sql = "CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10" ;
if (mysqli_query($mysqli, $sql))
       echo "Created table<br>";
   else
       echo "Failed to create<br>";


$sql = "INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Lakridspipe', '1.jpg', 100.00),
(2, 'Lakridsblomster', '2.jpg', 299.00),
(3, 'Lakridssutter', '3.jpg', 125.00)
(4, 'Lakridshjul', '1.jpg', 100.00)
(5, 'Lakridssmiley', '1.jpg', 100.00)
(6, 'Saltlakrids', '1.jpg', 100.00)
(7, 'Samsung J2 Pro', '1.jpg', 100.00)
(8, 'Samsung J2 Pro', '1.jpg', 100.00)
(9, 'Samsung J2 Pro', '1.jpg', 100.00)
(10, 'Samsung J2 Pro', '1.jpg', 100.00)
(11, 'Samsung J2 Pro', '1.jpg', 100.00)
(12, 'Samsung J2 Pro', '1.jpg', 100.00)
(13, 'Samsung J2 Pro', '1.jpg', 100.00)
(14, 'Samsung J2 Pro', '1.jpg', 100.00)
(15, 'Samsung J2 Pro', '1.jpg', 100.00)
(16, 'Samsung J2 Pro', '1.jpg', 100.00)
(17, 'Samsung J2 Pro', '1.jpg', 100.00)
(18, 'Samsung J2 Pro', '1.jpg', 100.00)
(19, 'Samsung J2 Pro', '1.jpg', 100.00)
(20, 'Samsung J2 Pro', '1.jpg', 100.00)
(21, 'Samsung J2 Pro', '1.jpg', 100.00)
(22, 'Samsung J2 Pro', '1.jpg', 100.00)
(23, 'Samsung J2 Pro', '1.jpg', 100.00)
(24, 'Samsung J2 Pro', '1.jpg', 100.00)
(25, 'Samsung J2 Pro', '1.jpg', 100.00)
(26, 'Samsung J2 Pro', '1.jpg', 100.00)
(27, 'Samsung J2 Pro', '1.jpg', 100.00)
(28, 'Samsung J2 Pro', '1.jpg', 100.00)
(29, 'Samsung J2 Pro', '1.jpg', 100.00)
(30, 'Samsung J2 Pro', '1.jpg', 100.00)";
        
        
        
        
if (mysqli_query($mysqli, $sql))
       echo "Created table<br>";
   else
       echo "Failed to create<br>";

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;