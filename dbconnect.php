<?php 
$con = mysql_connect("localhost","azhar","azhar");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// Create database
if (!mysql_select_db('mydb')) {
    echo("creating database!\n");
    mysql_query('CREATE DATABASE mydb');
    mysql_select_db('mydb');
}
// Create table
/*$sql = "CREATE TABLE IF NOT EXISTS Persons
(
ID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(ID),
FirstName varchar(15),
LastName varchar(15),
Age int 
)";*/
$sql = "CREATE TABLE IF NOT EXISTS users (  
    ID int unsigned NOT NULL AUTO_INCREMENT,  
    fbid text NOT NULL,
	name text NOT NULL,
	fbname text NOT NULL,
	email text NOT NULL,
	fbemail text NOT NULL,
	admn varchar(10) NOT NULL,
	mobile bigint(14) NOT NULL,
    PRIMARY KEY (ID)  
)"; 
// Execute query
mysql_query($sql,$con);
//mysql_close($con);
?> 