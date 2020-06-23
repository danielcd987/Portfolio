<?php

$dbServername ="localhost" ;
$dbUsername = "dd288";
$dbPassword = "DanielDeCarlo";
$dbName = "dd288" ;

$connection = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);


/* SQL TO CREATE TABLE 

CREATE TABLE creditcard_activity(
id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
firstname varchar (255), lastname varchar(255), cardnum int(16), cardnum_date DATE, csc int (3)
);

*/
