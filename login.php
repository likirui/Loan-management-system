<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['email']) || empty($_POST['password_1'])){
      session_start();
        $_SESSION['message']='you must enter all fields';
        header('location:error.php');
        exit;
    }else{
$email =htmlspecialchars($_POST['email']);
$pwd = htmlspecialchars($_POST['password_1']);
$_SESSION['first_name'] = $_POST['fname'];
$_SESSION['last_name'] = $_POST['lname']; 
include'dbh.php';
$sql = "SELECT * FROM login WHERE email= '$email' AND password= '$pwd'";
 $result = mysqli_query($conn, $sql);
     }
 if ($result === false) {
            echo "Could not successfully run query ($sql) from DB: " . mysql_error();
            exit;
}
 if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
       $row['id']."<br>";
       $row['first_name']."<br>";
      $row['last_name'];
       session_start();
    $_SESSION['id']= $row['id'];
    $_SESSION['firstname']=$row['first_name'];
    $_SESSION['lastname']=$row['last_name'];
    header('location:lapply.php');

    }
} else{
    session_start();
    $_SESSION['id']='';
    $_SESSION['message'] = "incorrect email or password";
    header('location:error.php');
}
}  
?>
