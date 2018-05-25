<?php
require_once 'DB.php';

$sql = "CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10" ;
if (mysqli_query($mysqli, $sql)) {
    echo "Created table<br>";
} else {
    echo "Failed to create<br>";
}


$sql = "INSERT INTO tbl_product (id, name, price) VALUES
('1', 'Lakridspipe', 100.00);";
$sql .= "INSERT INTO tbl_product (id, name, price) VALUES
('2', 'Lakridsblomster', 299.00);";
$sql .= "INSERT INTO tbl_product (id, name, price) VALUES
('3', 'Lakridssutter', 125.00);";
$sql .= "INSERT INTO tbl_product (id, name, price) VALUES
('4', 'Lakridshjul', 100.00);";
$sql .= "INSERT INTO tbl_product (id, name, price) VALUES
('5', 'Lakridssmiley', 100.00);";
$sql .= "INSERT INTO tbl_product (id, name, price) VALUES
('6', 'Saltlakrids', 100.00);";
$sql .= "INSERT INTO tbl_product (id, name, price) VALUES
('7', 'Lakridsbaade',  100.00);";
$sql .= "INSERT INTO tbl_product (id, name, price) VALUES
('8', 'Lakridsdyr', 100.00);";
$sql .= "INSERT INTO tbl_product (id, name, price) VALUES
('9', 'Spejderhagl',  100.00);";
$sql .= "INSERT INTO tbl_product (id, name, price) VALUES
('10', 'Chokoladekaramel', 100.00);";
$sql .= "INSERT INTO tbl_product (id, name, price) VALUES
('11', 'Chokoladesvampe', 100.00);";
$sql .= "INSERT INTO tbl_product (id, name, price) VALUES
('12', 'Chokorice', 100.00);";
$sql .= "INSERT INTO tbl_product (id, name, price) VALUES
('13', 'Maltesers', 100.00);";
$sql .= "INSERT INTO tbl_product (id, name, price) VALUES
('14', 'Mintchokolader', 100.00);";
$sql .= "INSERT INTO tbl_product (id, name, price) VALUES
('15', 'P-tærter',  100.00);";
$sql .= "INSERT INTO tbl_product (id, name, price) VALUES
('16', 'Skumbananer',  100.00);";
$sql .= "INSERT INTO tbl_product (id, name, price) VALUES
('17', 'Småchokolader',  100.00);";
$sql .= "INSERT INTO tbl_product (id, name,  price) VALUES
('18', 'Surelarver',  100.00);";
$sql .= "INSERT INTO tbl_product (id, name, price) VALUES
('19', 'Vingummibamser',  100.00);";
$sql .= "INSERT INTO tbl_product (id, name,  price) VALUES
('20', 'Vingummefrugt',  100.00);";
$sql .= "INSERT INTO tbl_product (id, name, price) VALUES
('21', 'Vingummijordbær',  100.00);";
$sql .= "INSERT INTO tbl_product (id, name,  price) VALUES
('22', 'Vingummesutter',  100.00);";
$sql .= "INSERT INTO tbl_product (id, name,  price) VALUES
('23', 'Vingummiting',  100.00);";
$sql .= "INSERT INTO tbl_product (id, name, price) VALUES
('24', 'Colavingummi',  100.00);";
$sql .= "INSERT INTO tbl_product (id, name,  price) VALUES
('25', 'Engelskvingummi',  100.00);";
$sql .= "INSERT INTO tbl_product (id, name,  price) VALUES
('26', 'Favicon',  100.00);";
$sql .= "INSERT INTO tbl_product (id, name, price) VALUES
('27', 'Ferskner', 100.00);";
$sql .= "INSERT INTO tbl_product (id, name, price) VALUES
('28', 'Kirsebærvingummi',  100.00);";
$sql .= "INSERT INTO tbl_product (id, name, price) VALUES
('29', 'Mørkchokolade',  100.00);";
$sql .= "INSERT INTO tbl_product (id, name, price) VALUES
('30', 'Engelsklakrids',  100.00)";
        
        
        
        
if (mysqli_multi_query($mysqli, $sql)) {
    echo "Created row<br>";
} else {
    echo "Failed to do row<br>";
}

