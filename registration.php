<html>  
<head lang="en">  
    <meta charset="UTF-8">  
     <div style="background-color: grey">
    <title>Registration</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
  
</style>  
<body>  
  
<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->  
    <div class="row"><!-- row class is used for grid system in Bootstrap-->  
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Create Account</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="process_registration.php">  
                        <fieldset>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Fullname" name="Fullname" type="text" autofocus>  
                            </div>  
  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Email" name="Email" type="email" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="City Of Residence" name="City Of Residence" type="text" value="">  
                            </div>  
   <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="Password" type="password" value="">  
                            </div> 
  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Create Account" name="Create Account" >  
  
                        </fieldset>  
                    </form>  
                    <center><b>Already registered ?</b> <br></b><a href="login.php">Login here</a></center><!--for centered text-->  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
 </div> 
</body>  
  
</html>  
  
<?php  
  
include("Connect.php");//make connection here  
if(isset($_POST['register']))  
{  
    $Fullname=$_POST['Fullname'];//here getting result from the post array after submitting the form.  
    $Email=$_POST['Email'];//same  
    $City_Of_Residence=$_POST['City_Of_Residence'];//same
    $Password=$_POST['Password'];  
  
  
    if($Fullname=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the Fullname')</script>";  
exit();//this use if first is not work then other will not show  
    }  
  
    if($Email=='')  
    {  
        echo"<script>alert('Please enter the Email')</script>";  
exit();  
    }  
  
    if($City_Of_Residence=='')  
    {  
        echo"<script>alert('Please enter the City_Of_Residence')</script>";  
    exit();  
    }  
 if(Password=='')  
    {  
        echo"<script>alert('Please enter the Password')</script>";  
    exit();  
    }  
//here query check whether if user already registered so can't register again.  
    $check_email_query="select * from user WHERE Email ='$Email'";  
    $run_query=mysqli_query($conn,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
//insert the user into the database.  
    $insert_user="insert into user (Fullname, Email, City_Of_Residence, Password) VALUE ('$Fullname','$Email','$City_Of_Residence', 'Password')";  
    if(mysqli_query($conn,$insert_user))  
    {  
        echo"<script>window.open('welcome.php','_self')</script>";  
    }  
} 
?>  