<?php

$con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
 session_start();
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
$login_submit_query= "insert into users(name,email,password) values('Rajesh','$email', '$password')";
# die($login_submit_query); 
$login_submit_submit=mysqli_query($con,$login_submit_query) or die(mysqli_error($con));
echo "User Successfully Inserted";
$select_query="SELECT * FROM users";
         $select_query_result=mysqli_query($con,$select_query) or die(mysqli_erroe($con));
         $total_rows_fetched=mysqli_num_rows($select_query_result);
        echo $total_rows_fetched;
               $row=mysqli_fetch_array($select_query_result);
           
     $_SESSION['email']=$email;
     $_SESSION['id']=mysqli_insert_id($con);
      header('location: products.php');

?>