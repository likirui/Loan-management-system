<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$email=$_POST["email"];
	$id=htmlspecialchars($_POST['id']);
	$contact=htmlspecialchars($_POST['contact']);
	$loan=htmlspecialchars($_POST['loan']);
	$duration=htmlspecialchars($_POST['duration']);
	$fname=htmlspecialchars($_POST['fname']);
	$lname=htmlspecialchars($_POST['lname']);
	$numb_1=htmlspecialchars($_POST['numb_1']);
	$tel_1=htmlspecialchars($_POST['tel_1']);
	$firstname=htmlspecialchars($_POST['firstname']);
	$lastname=htmlspecialchars($_POST['lastname']);
	$num_2=htmlspecialchars($_POST['numb_2']);
	$tel_2=htmlspecialchars($_POST['tel_2']);
	date_default_timezone_set("Africa/Nairobi");
    $time = date('h:i:sa');
    $date = date("Y/m/d");
	include"db.php";
	$sql= "INSERT INTO loan(email, customer_ID, phone_number, loan, duration, fname, lname, 
	guaranter_ID, guaranter_phone, first_name, last_name, guaranter_ID_no, guaranter_contact, time ,date)
	VALUES('$email','$id', '$contact', '$loan','$duration','$fname','$lname','$numb_1','$tel_1',
'$firstname','$lastname','$num_2','$tel_2','$time','$date')";
if(mysqli_query($conn, $sql)){
	session_start();
	$_SESSION['message']="you have successfully submitted the form. Wait patiently as we process your loan. We shall contact you shortly.";
	header('location:success.php');
}else{
	$_SESSION['message']="unable to submit the form";
	header('location:loan_error.php');
}
 mysqli_close($conn);
  }
?>