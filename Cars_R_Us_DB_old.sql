-- create and select the database
DROP DATABASE IF EXISTS Cars_R_Us_DB;
CREATE DATABASE Cars_R_Us_DB;
USE Cars_R_Us_DB;

-- create the tables for the database
CREATE TABLE users (
  userID        	INT            NOT NULL   AUTO_INCREMENT,
  userName         	VARCHAR(60)    NOT NULL,
  password          VARCHAR(60)    NOT NULL,
  emailAddress      VARCHAR(255)   NOT NULL, 
  phoneNumber     	VARCHAR(12)    NOT NULL, 
  address     		VARCHAR(60)    NOT NULL,
  postalCode     	VARCHAR(7)     NOT NULL,
  city				VARCHAR(60)    NOT NULL,
  PRIMARY KEY (userID),
  UNIQUE INDEX emailAddress (emailAddress)
);

CREATE TABLE orders (
  orderID           INT            NOT NULL   AUTO_INCREMENT,
  userID        	INT            NOT NULL,
  orderDate         DATETIME       NOT NULL,
  shipAddressID     INT            NOT NULL,
  billingAddressID  INT            NOT NULL,
  PRIMARY KEY (orderID), 
  INDEX userID (userID)
);

CREATE TABLE orderItems (
  itemID            INT            NOT NULL   AUTO_INCREMENT,
  orderID           INT            NOT NULL,
  vehicleID         INT            NOT NULL,
  itemPrice         DECIMAL(10,2)  NOT NULL,
  discountAmount    DECIMAL(10,2)  NOT NULL,
  quantity          INT NOT NULL,
  PRIMARY KEY (itemID), 
  INDEX orderID (orderID), 
  INDEX vehicleID (vehicleID)
);

CREATE TABLE vehicles (
  vehicleID         INT            NOT NULL   AUTO_INCREMENT,
  vehicleType       VARCHAR(60)    NOT NULL,
  vehicleColour     VARCHAR(10)    NOT NULL,
  province       	VARCHAR(60)    NOT NULL,
  city       		VARCHAR(60)    NOT NULL,
  postalCode		VARCHAR(7)	   NOT NULL,
  milleage			INT(10)		   NOT NULL,
  price         	DECIMAL(10,2)  NOT NULL,
  dateAdded         DATETIME       NOT NULL,
  PRIMARY KEY (vehicleID), 
  INDEX categoryID (categoryID), 
  UNIQUE INDEX vehicleCode (vehicleCode)
);

CREATE TABLE categories (
  categoryID        INT            NOT NULL   AUTO_INCREMENT,
  categoryName      VARCHAR(255)   NOT NULL,
  PRIMARY KEY (categoryID)
);

CREATE TABLE administrators (
  adminID           INT            NOT NULL   AUTO_INCREMENT,
  emailAddress      VARCHAR(255)   NOT NULL,
  password          VARCHAR(255)   NOT NULL,
  PRIMARY KEY (adminID)
);

-- Insert data into the tables
INSERT INTO categories (categoryID, categoryName) VALUES
(1, 'Cars'),
(2, 'Trucks'),
(3, 'SUV');

INSERT INTO vehicles (vehicleID, vehicleType, vehicleColour, province, city, postalCode, milleage, price, dateAdded) VALUES
(1, 1, 'testCarCode', 'testCarType', 'testCarColour', 'testCarProvince', 'testCarCity', '2016-10-30 09:32:40');

INSERT INTO customers (customerID, emailAddress, password, firstName, lastName, shipAddressID, billingAddressID) VALUES
(1, 'allan.sherwood@yahoo.com', '650215acec746f0e32bdfff387439eefc1358737', 'Allan', 'Sherwood', 1, 2),
(2, 'barryz@gmail.com', '3f563468d42a448cb1e56924529f6e7bbe529cc7', 'Barry', 'Zimmer', 3, 4),
(3, 'christineb@solarone.com', 'ed19f5c0833094026a2f1e9e6f08a35d26037066', 'Christine', 'Brown', 5, 6);

INSERT INTO orders (orderID, customerID, orderDate, shipAmount, taxAmount, shipDate, shipAddressID, cardType, cardNumber, cardExpires, billingAddressID) VALUES
(1, 1, '2017-05-30 09:40:28', '5.00', '32.32', '2017-06-01 09:43:13', 1, 2, '4111111111111111', '04/2022', 2),
(2, 2, '2017-06-01 11:23:20', '5.00', '0.00', NULL, 3, 2, '4111111111111111', '08/2021', 4),
(3, 1, '2017-06-03 09:44:58', '10.00', '89.92', NULL, 1, 2, '4111111111111111', '04/2022', 2);

INSERT INTO orderItems (itemID, orderID, vehicleID, itemPrice, discountAmount, quantity) VALUES
(1, 1, 2, '399.00', '39.90', 1),
(2, 2, 4, '699.00', '69.90', 1),
(3, 3, 3, '499.00', '49.90', 1),
(4, 3, 6, '549.99', '0.00', 1);

INSERT INTO administrators (adminID, emailAddress, password) VALUES
(1, 'admin@myguitarshop.com', '6a718fbd768c2378b511f8249b54897f940e9022');

-- Create a user named mgs_user
GRANT SELECT, INSERT, UPDATE, DELETE
ON *
TO mgs_user@localhost
IDENTIFIED BY 'pa55word';