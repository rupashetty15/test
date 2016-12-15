<?php
   define('DB_SERVER', 'br-cdbr-azure-south-b.cloudapp.net');
   define('DB_USERNAME', 'bd108a842530d4');
     define('DB_PASSWORD', '4818ec9f');
   define('DB_DATABASE','rupatest');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) ;
?>