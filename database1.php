<?php

$host="localhost";
$dbname="adminlogin_register";
$username="root";
$password="";

$mysqli=new mysqli($host,$username,$password,$dbname);
if($mysqli->connect_errno){
    die("Connection error: " . $mysqli->connect_error);
}
else{
    echo "connected succesfully";
}

return $mysqli;