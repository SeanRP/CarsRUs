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

CREATE TABLE vehicles (
  vehicleID         INT            NOT NULL   AUTO_INCREMENT,
  categoryID		INT			   NOT NULL,
  brand				VARCHAR(60)	   NOT NULL,
  years				VARCHAR(60)	   NOT NULL,
  transmission      VARCHAR(60)    NOT NULL,
  trims				VARCHAR(60)	   NOT NULL,
  colour     		VARCHAR(10)    NOT NULL,
  trunkSpace       	VARCHAR(60)    NOT NULL,
  mpg				INT(10)		   NOT NULL,
  horsePower		INT(10)        NOT NULL,
  driveTrain		VARCHAR(60)	   NOT NULL,
  PRIMARY KEY (vehicleID), 
  INDEX categoryID (categoryID) 
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

LOAD DATA INFILE '/xampp/htdocs/carsRUS/vehicles_data.csv' INTO TABLE vehicles FIELDS TERMINATED BY ',' LINES TERMINATED BY '\n' IGNORE 1 ROWS (vehicleID, categoryID, brand, years, transmission, trims, colour, trunkSpace, mpg, horsePower, driveTrain);




INSERT INTO categories (categoryID, categoryName) VALUES
(1, 'Cars'),
(2, 'Trucks'),
(3, 'SUV');


INSERT INTO administrators (adminID, emailAddress, password) VALUES
(1, 'admin@myguitarshop.com', '6a718fbd768c2378b511f8249b54897f940e9022');

-- Create a user named mgs_user
GRANT SELECT, INSERT, UPDATE, DELETE
ON *
TO mgs_user@localhost
IDENTIFIED BY 'pa55word';