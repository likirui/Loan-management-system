<?php
session_start();
include 'dbh.php';

$uid=$_POST['username'];
$pwd=$_POST['password'];
 
 $sql = "SELECT * FROM users WHERE uid= '$uid' AND pwd= '$pwd'";
 $results = $conn->query($sql);
 if(!$row=$results->fetch_assoc()){
 	echo 'your username or password is incorrect';
 	header('location:user_login.php');
 }else{
 	$_SESSION['id']= $row['id'];
 	 header('location:lapply.php');
 }

?>
