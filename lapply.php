<?php 
/* Displays user information and some useful messages */
session_start();
// Check if user is logged in using the session variable
if(isset($_SESSION['id'])) {
  $fname=$_SESSION['firstname'];
  $lname=$_SESSION['lastname'];

 }else{
    $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");   
  }
?>
</html>
<!doctype html>
<html lang="en">
<head>
<title>Loan application</title>
<meta charset="utf-8"/>
<style type="text/css">
body{
	width: 100%;
	background-color:  #809fff;
	}
	input[type=text]{
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}
input[type=password]{
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}
input[type=button], input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
input[type=text]:focus {
    border: 3px solid #555;
    }
</style>
</style>
<link rel="stylesheet" type="text/css" href="sc_main.css">
<script src="lmain.js"></script>
</head>
<body>
<header id="top_header">BORESHA SACCO LTD</h1>
</header>
<ul id="navmenu">
  <ul class="top_menu">
             <li><a href="index.php">Home</a></li>
               <li><a href="aboutus.php">About us</a></li>
              <li><a href="update.php">Update</a></li>
            <li><a href="staffportal.php">Staff portal</a></li>
  </ul>
                           </div>
                       </ul>
<section id="mn_section">

	<center>
		<div style="float:left">
		<?php
echo 'welcome '.$fname." ".$lname;
 ?>
 </div>
 <form action="logout.php">
 <div style="float:right"><button type="submit">signout</button></div>
	</form>
<h1>Loan Application form</h1>
	<p><strong>Guarantors names should be members of the BORESHA SACCO LTD<strong><p>
	 <script src="form_validation.js"></script>
<form name="myForm" method="POST" action="loan.php" onsubmit="return validateForm()">
	<div id="left">
	<label><strong>Personal details</strong></label>
	Email  <input type="text" name="email" value=""><br><br>
	ID Number <input type="text" name="id" value="" maxlength="10"><br><br>
	Phone number <input type="text" name="contact" value="" maxlength="10"><br><br>
	Loan ammount <input type="text" name="loan" value="" placeholder="SH" maxlength="10"><br><br>
	Repayment duration <input type="text" name="duration" value="" placeholder="Months"maxlength="2"<br><br>
</div>
	<center>
	<label><strong>Guaranter One</strong></label><br><br>
	First Name <input type="text" name="fname" value="" maxlength="25"><br><br>
	Last Name <input type="text" name="lname" value="" maxlength="25"><br><br>
	ID number <input type="text" name="numb_1" value="" maxlength="10"><br><br>
	Phone number <input type="text" name="tel_1" value="" maxlength="10"><br><br>
	</center>
	<div id="right">
	<label><strong>Guaranter two</strong></label><br><br>
	First Name <input type="text" name="firstname" value="" maxlength="25"><br><br>
    Last Name <input type="text" name="lastname" value="" maxlength="25"><br><br>
	ID number <input type="text" name="numb_2" value="" maxlength="10"><br><br>
	Phone number <input type="text" name="tel_2" value="" maxlength="10"><br>
	<input type="checkbox" id="check" name="check1" value="">Agree terms and condition<br><br>
<input type="Submit" name="button1">
</div>
</form>
<div id="l_side">
          <ul>
       
</div>
<div id="r_side">
<div id="the_footer"> 
	&copy2018 Boresha sacco ltd.All rights reserved.<br>
	<ul>
		<li><a href="#">privacy</a><li>
			<li><a href="#">contuct us</a></li>
	</ul>
</div>
</body>
</html>