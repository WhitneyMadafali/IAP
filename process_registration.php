<?php
require_once("Connect.php");
if(isset($_POST['register']))  
{
$Fullname=$_POST["Fullname"];
$Email=$_POST["Email"];
$City_Of_Residence=$_POST["City_Of_Residence"];
$Password=$_POST['Password']
$sql="INSERT INTO user(Fullname, Email, City_Of_Residence, Password)VALUES('$Fullname','$Email','$City_Of_Residence','Password')";
if(mysqli_query($conn,$sql)){
	echo "New record successful";
}
else{
	echo"New record inserted successfully";
}
}



?>