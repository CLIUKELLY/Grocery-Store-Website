<?php
session_start();
$dbhost="localhost";
$dbuser="root";
$dbpassword= "";
$dbdatabasename="User_info";
$conn = mysql_connect($dbhost,$dbuser,$dbpassword);
mysql_select_db($dbdatabasename,$conn);
//$sql = simplexml_load_file("User_info.xml");

if(isset($_POST['email']))
{
	$email= htmlspecialchars($_POST["email"]);
	$password = htmlspecialchars($_POST["password"]);
	$sql= "SELECT * FROM users WHERE Email= '".$email."' and Password ='". $password."';";
	$allResults= mysql_query($sql);
	$numrows= mysql_num_rows($allResults);
	If ($numrows == 1)
	{header ("location: index.html");
	}
	else
	{header ("location: P5_Sign_in.php");}
}
?>