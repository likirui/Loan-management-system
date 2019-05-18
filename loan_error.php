<?php
session_start();
?>
<html>
<head>
	<title>Error</title>
</head>
<body><div class="form">
    <h1>Error</h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ){
        echo $_SESSION['message'];    
    }
 ?>
    </p>     
    <a href="lapply.php"><button class="button button-block"/>Loan Application</button></a>
</div>