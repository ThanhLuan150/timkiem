<?php 
$mysqli = new mysqli("localhost","root","");
//
if($mysqli===false){
    die("ERROR; Could not connect.".$mysqli -> connect_error);
}
//
$sql="CREATE DATABASE THOITRANGSs";
if($mysqli->query($sql)=== true){
    echo"Database creates successfully";
}
else{
    echo"ERROR ;Could not able to execute $sql." .$mysqli ->error;
}