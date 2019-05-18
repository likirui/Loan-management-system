<?php
session_start();
?>
<html>
<head>
	<title>login</title>
    <style type="text/css">
    body{
    width: 100%;
    color:red;

    }
    #top_header{
    background-color: white;
    color: black;
    border: 1px solid white;
    padding: 0px;
    height: 30px;


}
ul#navmenu, ul.dropbtn, ul.dropdown-content{
    list-style-type: none;
}
#navmenu li{
    margin-left: 30px;
    text-align: center;
    position: relative;
    float: left;
    vertical-align: center;
    padding: 10px;
    position: relative;
    display: inline-block;


}
ul#navmenu{
    width:100%;
    height: 50px;
    background-color: green;
    color: white;
}
ul.top_menu li a{
    display: block;
    color: white;
    background-color: green;
 text-decoration: none;
 padding: 10px;
}
ul.top_menu li a:hover{
background-color: white;
color: black;
text-decoration: underline;
}
ul.top_menu li a:active{
    background-color: green;
    color: black;
}
ul.top_menu a:link{
    color: white;
    text-decoration: none;
}


li{
    list-style-type: none;
}
</style>
</head>
<body>
    <header id="top_header">BORESHA SACCO LTD</h1>
</header>
<ul id="navmenu">
  <ul class="top_menu">
             <li><a href="index.php">Home</a></li>
               <li><a href="aboutus.php">About us</a></li>
               <li><a href="sign.php">Apply loan</a></li>
              <li><a href="update.php">Update</a></li>
            <li><a href="staff_login.php">Staff portal</a></li>
      <li><a href="sign.php">Login</a></li>
  </ul>
                           </div>
                       </ul>
<section id="mn_section">
    <center>
    <div class="form">
    <h1>Error</h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ){
        echo $_SESSION['message'];    
    }
 ?>
    </p>     
    <a href="sign.php"><button class="button button-block"/>login</button></a>
    <a href= "Register.php"><button class="button button-block">Register</button></a>
    </center>
</div>
</section>
</body>
</html>