<?php


$host="localhost";
$user="root";
$pass="";
$dp="pro1-page";
$conn=new mysqli($host,$user,$pass,$dp);
if($conn->connect_error){
  echo "failed to connect to DP".$conn->connect_error;
}
?>