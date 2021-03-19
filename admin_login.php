<?php  include("dbconnections/db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   
    <title>Admin Login</title>
    <style>
    .container{
        margin-top: 170px;
        color: #fff;
       
    }
    body{
        background-color: teal;
    }

    #ad1{
        color: red;
        margin-left: 250px;
    }
    </style>
</head>
<body>

 <div class="container">
     <div class="row">
         <div class="col-md-5 offset-md-4 form-div">
            <form action="" method="POST">
                <h2 class="text-center">Login here - Admin</h2>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control form-control-lg" name="username" required >
                    <div>
                <span class="text-danger"><?php if(isset($errorusername)) echo $errorusername; ?></span>
          
                </div> 
                </div>
              
               
                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="password" class="form-control form-control-lg" name="password" required>
                    <div>
                <span class="text-danger"><?php if(isset($errorpwd)) echo $errorpwd; ?></span>
                </div> 
                </div>
                
               
                <div class="form-group">
                   <button type="submit" name="adminlogin" class="btn btn-success btn-block btn-lg ">Login</button>
                 
                </div>
                <p id="ad1">Admin purposes only</p>
               

            </form>
         </div>
     </div>
 </div>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>


<?php

if(isset($_POST['adminlogin'])){
    
    $uname = $_POST['username'];
    
    $pass = $_POST['password'];
    
    $admin = "select * from admin where username='$uname' AND password='$pass'";
    
    $qry = mysqli_query($con,$admin);
    

    $adminexe = mysqli_num_rows($qry);
    
    
    if($adminexe==0){
        
        echo "<script> alert('Your username or password is wrong'); </script>";
        
        exit();
        
    }
    
    if($adminexe==1){
        
        $_SESSION['username']=$uname;
        
       echo "<script>alert('You are Logged in')</script>"; 
        
       echo "<script>window.open('AdminPanel.php','_self')</script>";
        
    }
    
}

?>