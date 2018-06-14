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
    <title>login by php</title>
    <meta charset="UTF-8">
         
        <link rel="stylesheet" href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/bootstrap-3.3.7-dist/js/jqry/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js">
       </script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .row-style{
                margin:200px;
            }
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
                <div class="col-sm-6">
                    <div class="panel panel-primary">
                        <div class=" panel-heading">
                            <h3>Login</h3>
                        </div>
                        <div class=" panel-body">
                            <p>Login to make purchase</p>
                            <form method="POST" action="login-submit.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></div>
                                 <div class="form-group">
                                     <input type="text" class="form-control" name="password" placeholder="Password" required="true"  pattern="{.6,}"></div>
                                     <div class="form-group">
                            <button class="btn btn-primary ">Login</button>
                        </div>
                            </form>
                        </div>
                        <div class="panel-footer">Don't have an account? <a href='signup.php'>Register Here</a></div>
                    </div>
                    
                </div>  
        </div>
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>
        
    </body>
</html>
