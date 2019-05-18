<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$_SESSION['first_name'] = $_POST['fname'];
$_SESSION['last_name'] = $_POST['lname'];
$first = htmlspecialchars($_POST['fname']);
$last = htmlspecialchars($_POST['lname']);
$email = htmlspecialchars($_POST['email']);
$pwd = htmlspecialchars($_POST['password_1']);
include 'dbh.php';
$result = $conn->query("SELECT * FROM login WHERE email='$email'") or die($mysqli->error);
// We know user email exists if the rows returned are more than 0.
if($result->num_rows>0){
    session_start();
	$_SESSION['message'] = 'User with this email already exists!';
	header("location: error.php");
	break;
   }else{
$sql = "INSERT INTO login (first_name, last_name, email, password)
 VALUES('$first', '$last', '$email', '$pwd')";
 $results = $conn->query($sql);
}if ($result === false) {
            $_SESSION['message']="Could not register successfully! ";
            header('location:error.php');
            exit;
}else{
    header('location:sign.php');
    }
}  
?>