<?php

if(empty($_POST["name"])){
    die("Name is required");
}
if(empty($_POST["email"]))
{
    die("email is required");
}
if(empty($_POST["password"]))
{
    die("password is required");
}
 if(strlen($_POST["password"]) < 8){
    die("Password must be at least 8 characters");

 }

 if(!preg_match("/[a-z]/i", $_POST["password"])){
    die("Password must contain at least one letter");
 }

 if(!preg_match("/[0-9]/", $_POST["password"])){
     die("Password must contain at least one number");
}

 if($_POST["password"] !== $_POST["password-conform"]){
    die("Passwords must watch");
 }
$password_hash=password_hash($_POST["password"],PASSWORD_DEFAULT);

$mysqli= require __DIR__. "/database1.php";
$sql ="INSERT INTO register (name,email,password_hash)
        VALUES (?, ?, ?)";


$stmt = $mysqli->stmt_init();


if(!$stmt->prepare($sql)){
    die("SQL error: " . $mysqli->error);
}
   
$stmt->bind_param("sss",
                    $_POST["name"],
                    $_POST["email"],
                    $password_hash);
if($stmt->execute()){
    header("Location: userlogin1.php");
    exit;
 } else{

    //if($mysqli->errno === 1062){
     //   die("email already taken");
   // }
    die($mysqli->error . " " . $mysqli->errno);
}