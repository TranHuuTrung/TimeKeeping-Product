<?php
   $server_username = "root";
   $server_password ="";
   $server_host="localhost";
   $database="timekeeping_app";

   $connect = mysqli_connect($server_host, $server_username, $server_password, $database);
   mysqli_query($connect,"SET NAMES 'UTF8'");
   if(!$connect){
    echo "not connect to databse".mysqli_connect_error();
   }

?>