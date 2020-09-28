<?php  
session_start();  
  
if(!$_SESSION['Email'])  
{  
  
    header("Location: login.php");//redirect to the login page to secure the welcome page without login access.  
}  
  
?>  
<!DOCTYPE html>  
<html>  
<head>  
  
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style.css">

      <style>
	.header {
		background: #003366;
	}
	button[name=register_btn] {
		background: #003366;
	}
	</style>
</head>  
  
<body>
	<div class="header">
		<h2>WELCOME</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			<img src="profile.png"  >
			
<div>
			 <p>Alice</p>
			 <p>aa@gmail.com</p>
						
						<a href="logout.php" style="color: red">LOGOUT</a> <br>
						<a href="password.php" style="color: red">CHANGE PASSWORD</a>
                       
					

			
			
		
	</div>
	
</div>
</body>  

  </div>
</html>  