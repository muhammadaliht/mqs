<?php
$server="localhost";
$username="root";   
$password="";
$database="mqs_db";    
$conn = mysqli_connect($server,$username,$password,$database);
if(!$conn){
     echo "not connected";
         }
?>