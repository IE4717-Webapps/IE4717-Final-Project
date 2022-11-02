CREATE DATABASE IF NOT EXISTS movies@ntu;

USE cinemalax;

DROP TABLE IF EXISTS topgun;
DROP TABLE IF EXISTS eeaao;
DROP TABLE IF EXISTS drstrange;
DROP TABLE IF EXISTS theworst;
DROP TABLE IF EXISTS licorice;
DROP TABLE IF EXISTS turningred;
DROP TABLE IF EXISTS fantastic;
DROP TABLE IF EXISTS decision;
DROP TABLE IF EXISTS customers_info;

CREATE TABLE topgun (
  OrderID VARCHAR(6) NOT NULL ,  
  BookingDate VARCHAR(20) NOT NULL , 
  BookingTime VARCHAR(10) NOT NULL , 
  Hall VARCHAR(10) NOT NULL , 
  Quantity INT(3) NOT NULL ,
  SelectedSeats VARCHAR(60) NOT NULL ) 
  ENGINE = InnoDB; 
  
CREATE TABLE eeaao (
  OrderID VARCHAR(6) NOT NULL ,  
  BookingDate VARCHAR(20) NOT NULL , 
  BookingTime VARCHAR(10) NOT NULL , 
  Hall VARCHAR(10) NOT NULL , 
  Quantity INT(3) NOT NULL ,
  SelectedSeats VARCHAR(60) NOT NULL ) 
  ENGINE = InnoDB; 

CREATE TABLE drstrange (
  OrderID VARCHAR(6) NOT NULL ,  
  BookingDate VARCHAR(20) NOT NULL , 
  BookingTime VARCHAR(10) NOT NULL , 
  Hall VARCHAR(10) NOT NULL , 
  Quantity INT(3) NOT NULL ,
  SelectedSeats VARCHAR(60) NOT NULL) 
  ENGINE = InnoDB; 

CREATE TABLE theworst (
  OrderID VARCHAR(6) NOT NULL , 
  BookingDate VARCHAR(20) NOT NULL , 
  BookingTime VARCHAR(10) NOT NULL , 
  Hall VARCHAR(10) NOT NULL , 
  Quantity INT(3) NOT NULL ,
  SelectedSeats VARCHAR(60) NOT NULL) 
  ENGINE = InnoDB; 

CREATE TABLE licorice (
  OrderID VARCHAR(6) NOT NULL ,  
  BookingDate VARCHAR(20) NOT NULL , 
  BookingTime VARCHAR(10) NOT NULL , 
  Hall VARCHAR(10) NOT NULL , 
  Quantity INT(3) NOT NULL ,
  SelectedSeats VARCHAR(60) NOT NULL ) 
  ENGINE = InnoDB; 

CREATE TABLE turningred (
  OrderID VARCHAR(6) NOT NULL , 
  Movie VARCHAR(60) NOT NULL , 
  BookingDate VARCHAR(20) NOT NULL , 
  BookingTime VARCHAR(10) NOT NULL , 
  Hall VARCHAR(10) NOT NULL , 
  Quantity INT(3) NOT NULL ,
  SelectedSeats VARCHAR(60) NOT NULL ,
  TransactionTime VARCHAR(30) NOT NULL ,
  PaymentDone BOOLEAN NOT NULL ,
  PRIMARY KEY (OrderID)) 
  ENGINE = InnoDB; 

CREATE TABLE fantastic (
  OrderID VARCHAR(6) NOT NULL ,  
  BookingDate VARCHAR(20) NOT NULL , 
  BookingTime VARCHAR(10) NOT NULL , 
  Hall VARCHAR(10) NOT NULL , 
  Quantity INT(3) NOT NULL ,
  SelectedSeats VARCHAR(60) NOT NULL ) 
  ENGINE = InnoDB; 

CREATE TABLE decision (
  OrderID VARCHAR(6) NOT NULL ,  
  BookingDate VARCHAR(20) NOT NULL , 
  BookingTime VARCHAR(10) NOT NULL , 
  Hall VARCHAR(10) NOT NULL , 
  Quantity INT(3) NOT NULL ,
  SelectedSeats VARCHAR(60) NOT NULL) 
  ENGINE = InnoDB; 

CREATE TABLE customers_info (
  OrderID VARCHAR(6) NOT NULL , 
  CustomerName VARCHAR(30) NOT NULL , 
  CustomerMobileNo INT(8) NOT NULL , 
  CustomerEmail VARCHAR(60) NOT NULL , 
  PRIMARY KEY (OrderID)) 
  ENGINE = InnoDB; 