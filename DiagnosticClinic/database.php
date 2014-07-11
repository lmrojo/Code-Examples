<?php
//Tables used for this System Diagnostic Clinic using MySQL
$con = mysql_connect('localhost','root','123'); 
mysql_query("CREATE DATABASE diagnosticsclinic"); 
mysql_select_db("diagnosticsclinic", $con);
mysql_query("CREATE TABLE patients
(
	id int NULL AUTO_INCREMENT,
	username varchar(255),
	password varchar(255),
	record varchar(255),
	PRIMARY KEY (id)
)"); 
mysql_query("CREATE TABLE payments
(
	id int NOT NULL,
	date varchar(255),
	amount int,
	PRIMARY KEY (id),
	FOREIGN KEY (id) REFERENCES patients(id)
)"); 
mysql_query("CREATE TABLE appointment
(
	id int NOT NULL,
	apptdate varchar(255),
	PRIMARY KEY (id),
	FOREIGN KEY (id) REFERENCES patients(id)
)"); 
mysql_query("CREATE TABLE refill
(
	id int NOT NULL,
	date varchar(255),
	medicine varchar(255),
	PRIMARY KEY (id),
	FOREIGN KEY (id) REFERENCES patients(id)
)"); 
mysql_query("CREATE TABLE posts
(
	postnumber int NOT NULL AUTO_INCREMENT,
	text varchar(255),
	picture longblob NOT NULL,
	PRIMARY KEY (postnumber)
)"); 
mysql_query("CREATE TABLE admin
(
	id int NOT NULL AUTO_INCREMENT,
	username varchar(255),
	password varchar(255),
	PRIMARY KEY (id)
)"); 
//////////////////////////////////////////////////////
//
//CODE BELOW REPRESENTS HOW TO EXTRACT A POST FROM POSTS TABLE AND PRINT IT ON THE WEBSITE
//
/////////////////////////////////////////////////// 
$sql = mysql_query("SELECT * FROM posts");
		 $numrows = mysql_num_rows($sql);
							if($numrows>0)
							{  
   							while($row = mysql_fetch_array($sql))
							{
								echo "<br>-<strong>".$row['postnumber']."</strong> ".$row['text']." ".$row['picture'];
							}
							}

 ?>
 