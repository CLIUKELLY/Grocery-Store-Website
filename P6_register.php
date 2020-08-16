<?php
session_start();
$dbhost="localhost";
$dbuser="root";
$dbpassword= "";
$dbdatabasename="User_info";
$conn = mysql_connect($dbhost,$dbuser,$dbpassword);
mysql_select_db($dbdatabasename,$conn);
//$sql = simplexml_load_file("User_info.xml");

if (isset ($_POST['email']))
{
$email= htmlspecialchars($_POST['email']);
$password= htmlspecialchars($_POST['password']);

$sql1= "SELECT * FROM users where Email ='".$email."' ;" ;

$resultsUser = mysql_query($sql1);
$numrows= mysql_num_rows($resultsUser);
if ($numrows > 0)
{echo "user: ". $userID. " already here....";
}
else
{$sqlAddUser= "INSERT INTO users  (Email, Password)  VALUES ('".$email."', '".$password."')";
$UserResults= mysql_query($sqlAddUser);
{header ("location: index.html");}
}
}
?>

	 
