<?php
 // DB connection info
 $host = "br-cdbr-azure-south-b.cloudapp.net";
 $user = "bd108a842530d4";
 $pwd = "4818ec9f";
 $db = "rupatest";
 try{
     $conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
     $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
     $sql = "CREATE TABLE IF NOT EXISTS users (
 id int(11) NOT NULL AUTO_INCREMENT,
 name varchar(50) NOT NULL,
 username varchar(50) NOT NULL,
 email varchar(50) NOT NULL,
 password varchar(50) NOT NULL,
 contact varchar(50) NOT NULL,
 qual varchar(50) NOT NULL,
 country varchar(50) NOT NULL,
 trn_date datetime NOT NULL,
 PRIMARY KEY (id)
 );";

     $conn->query($sql);
 }
 catch(Exception $e){
     die(print_r($e));
 }
 echo "<h3>Table created.</h3>";
 ?>