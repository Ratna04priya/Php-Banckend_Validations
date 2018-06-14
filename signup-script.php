<?php

require 'includes/common.php';
$email= $_POST['email'];
$regrex_email= "/^[_a-z0-9-]+(\.[a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*[\.[a-z]{2,3})$/" ;
if(!preg_match($regex_email,$email))
{
header('location: index.php?email_error=enter correct email');
}
   
$password = $_POST['password'];
if(strlen($password<6))
{ header('location: index.php?password_error=enter correct password');
}
$email= mysqli_real_escape_string($con,$_POST['email']);
$password= mysqli_real_escape_string($con,$_POST['password']);
echo md5($password);

$name= $_POST['name'];
$name= mysqli_real_escape_string($con,$_POST['name']);
$contact= $_POST['contact'];
$contact= mysqli_real_escape_string($con,$_POST['contact']);
$city= $_POST['city'];
$city= mysqli_real_escape_string($con,$_POST['city']);
$address= $_POST['address'];
$address= mysqli_real_escape_string($con,$_POST['address']);



$users_query= "SELECT id from users WHERE email= '$email' ";
$user_result=mysqli_query($con,$users_query);
if(mysqli_num_rows($user_result)>0)
{ header('location: index.php?email_error=put a new email, this already exist');
}
else {
    $signup_submit_query= "insert into users(name,email,password,contact,city,address) values($name,$email', '$password',$contact,$city,$address)";
}
    $id= mysqli_insert_id($con);
  $_SESSION['email']=$email;
     $_SESSION['id']=mysqli_insert_id($con);
      header('location: products.php');


?>
