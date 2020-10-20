create database pizza_store;

GRANT ALL PRIVILEGES ON *.* TO 'Imanbek'@'localhost' IDENTIFIED BY 'remix';

USE pizza_store;

CREATE TABLE `customers` (
  `email` varchar(35) NOT NULL PRIMARY KEY,
  `delivery_details` varchar(250) NOT NULL
)

CREATE TABLE `pizza_store`.`pizza`(
`pizzaId` int(6) NOT NULL AUTO_INCREMENT,
`dough` varchar(30) NOT NULL,
`cheese` varchar(30) NOT NULL,
`sauce` varchar(30) NOT NULL,
`toppings` JSON NOT NULL,
PRIMARY KEY(`pizzaId`)
);

?
CREATE TABLE `toppings` (jdoc JSON);
INSERT INTO `toppings` VALUES('{"key1": "mushrooms"}, {"key2": "onions"}, {"key3": "sausage"}, {"key4": "bacon"}, {"key5": "pineapple"}');
?

CREATE TABLE `pizza_store`.`orders` ( `orderID` INT(6) NOT NULL AUTO_INCREMENT, `email` varchar(35) NOT NULL, PRIMARY KEY (`orderId`), CONSTRAINT `email` FOREIGN KEY (`email`) REFERENCES `pizza_store`.`customers`(`email`) ) ENGINE = InnoDB;

CREATE TABLE `pizzaOrder`(
`poID` int(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`orderID` int(6) NOT NULL,
`pizzaID` int(6) NOT NULL,
CONSTRAINT `orderID_PK` FOREIGN KEY (`orderID`) REFERENCES `pizza_store`.`orders`(`orderID`)
) ENGINE = InnoDB;
