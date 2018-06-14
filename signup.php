<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require 'includes/common.php';
if (isset($_SESSION['email']))
    {   header('location: products.php'); } 
 ?>
<html>
    <head>     
        <title>Signup by php</title>
        <meta charset="UTF-8">
         
        <link rel="stylesheet" href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/bootstrap-3.3.7-dist/js/jqry/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js">
       </script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            footer{
     padding: 10px 0; 
     background-color: #101010; 
     color:#9d9d9d; 
     bottom: 0;
     width: 100%; 
} 
        </style>  
    </head>
    <body>
       <?php
        include 'includes/header.php';
        ?>
           
        <div class="container">
            <div class="row row-style">
                <div class="col-xs-8">
                    <h1>Sign Up</h1>
                    <form action="signup-script.php" method="POST">
                       <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="true"></div>
                        <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></div>
                         <div class="form-group">
                                <input type="text" class="form-control" name="password" placeholder="Password" required="true" pattern="{.6,}"></div>
                          <div class="form-group">
                                <input type="text" class="form-control" name="contact" placeholder="Contact" required="true"></div>
                         <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City" required="true"></div>   
                                 <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address" required="true"></div>
                    <div class="form-group">
                            <button class="btn btn-primary ">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
             <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
