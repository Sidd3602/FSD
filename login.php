<?php 
include("config.php");

if(isset($_POST['sub']))
{
$email = $_POST['user_email'];
$upassword = $_POST['user_password'];

$res = mysqli_query($mysqli,"select* from user where uname='$email'and upassword='$upassword'");
$result=mysqli_fetch_array($res);
if($result)
{
echo "You are login Successfully ";
//header("location:my-account.php");   // create my-account.php page for redirection 
	
}
else
{
	echo "failed ";
}
}
?>
