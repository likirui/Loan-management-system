<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['email']) || empty($_POST['password'])){
      session_start();
        $_SESSION['message']='you must enter all fields';
        header('location:error1.php');
        exit;
    }else{
$email =htmlspecialchars($_POST['email']);
$pwd = htmlspecialchars($_POST['password']);
$conn= mysqli_connect("localhost","root","","logintest");
 if(!$conn){
  die("connection failed ".mysqli_connect_erro());
 }
$sql = "SELECT * FROM staff_login WHERE email= '$email' AND password= '$pwd'";
 $result = mysqli_query($conn, $sql);
}
if ($result == false) {
            echo "Could not successfully run query ($sql) from DB: " . mysql_error();
            exit;
}
if(mysqli_num_rows($result)>0){
  session_start();
    $_SESSION['id']= $row['id'];
     header('location:staff.php');

}else{
  session_start();
    $_SESSION['id']='';
    $_SESSION['message'] = "incorrect email or password";
    header('location:error1.php');
}
mysqli_close($conn);
}
?>