<?php

$server   = "localhost";
$username = "root";
$password = "";
$dbname   = "portfolio";

$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con)
{
   echo "not connect";
}
if (isset($_POST['submit']))
{    

			$name  = $_POST['name'];
			$email = $_POST['email'];
			$msg   = $_POST['message'];

			$sql = "INSERT INTO `userinfo`(`Name`, `Email`, `Message`) VALUES ('$name','$email','$msg')";

			$result= mysqli_query($con,$sql);

			if($result)
			{
			  echo "data submit";
			}
			else
			{
			  echo "submission failed.....";
			}
}

?>