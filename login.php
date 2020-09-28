<?php  
session_start();//session starts here  
  
?>  
  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
<div style="background-color: grey">
    <title>Login</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
  
</style>  
  
<body>  
  
<div class="container">  
    <div class="row">  
        <div class="col-md-4 col-md-offset-4">  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Sign In</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="login.php">  
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="Email" name="Email" type="email" autofocus>  
                            </div>  

                            <div class="form-group">  
                                <input class="form-control" placeholder="Fullname" name="Fullname" type="text" value="">  
                            </div>  
  
  
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >  
  
                            <!-- Change this to a button or input when using this as a form -->  
                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->  
                        </fieldset>  
                    </form> 

                </div>  
            </div>  
        </div>  
    </div>  
</div>  
</body>  
  </div>
</html>  
  
<?php  
  
include("Connect.php"); 

if(isset($_POST['login']))  
{  
    
   $Fullname=$_POST['Fullname'];  
   $Email=$_POST['Email'];
  
    $check_user="select * from user WHERE Fullname='$Fullname' AND Email='$Email'";  
  
    $run=mysqli_query($conn,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('welcome.php','_self')</script>";  
  
        $_SESSION['Email']=$Email;//here session is used and value of $user_email store in $_SESSION.  
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?>  