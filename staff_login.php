<?php
session_start();
?>
<html>
<head>
	<title>sign in</title>
	<style type="text/css">
	body{
	width: 100%;
	background-color:  #809fff;
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
input[type=text]:focus {
    border: 3px solid #555;
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
	<h1>LOGIN</h1>
	<form action="staff_sign.php" method="POST">
		<input type="text" name="email" placeholder="email"><br><br>
		<input type="password" name="password" placeholder="password"><br><br>
		<div class="button">
		<button type="submit">Login</button>
	</form>
	</center>

</section>
<div id="l_side">
          <ul>
       
</div>
</body>
</html>