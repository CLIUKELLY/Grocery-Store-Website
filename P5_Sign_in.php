<?php
session_start();
//$dbhost="localhost";
//$dbuser="root";
//$dbpassword= "";
//$dbdatabasename="User_info";
//$conn = mysql_connect($dbhost,$dbuser,$dbpassword);
//mysql_select_db($dbdatabasename,$conn);
?>
<html>
  <head>
      <title>Sign in</title>
	  <link href="P5_Sign_in.css" rel="stylesheet" type="text/css"/>
	  
  </head>
  <body>
      <h2><I>Daily Fresh</I></h2>
	  
      <form action="P5_verify.php" method="POST">
	    <p style="padding-left:220px;">No account? <a href="P6_Sign_up.html">Sign up</a></p>
		<br/>
        <label for="email" style="text-align:left;">EMAIL</label><br/>
	    <input type="text" id="email" name="email" placeholder="Enter your email"/><br/> 
		<label for="password" style="text-align:left;">PASSWORD</label><br/>
		<input type="password" id="password" name="password" placeholder="Enter your password"/><br/> 
		<a href="P5_Sign_in_ForgotPassword.html">Forgot Password?</a>
		<br/>
		<br/>
		<input type="submit" id="submit" value="SIGN IN" onclick="validate();"/>  		
	 </form>
	 <script type = "text/javascript">
	  function validate(){
	    var email = document.getElementById("email");
        var password = document.getElementById("password");
      if ( email.value == "admin@dailyfresh.ca" && password.value == "00"){
        window.location = "P7.html";
		alert ("Administrator Login successfully");
		return true;
      }
	  if ( email.value == "jerry@gmail.com" && password.value == "11"){
        window.location = "Index.html";
		alert ("Welcome, Jerry");
		return true;
      }
	  if ( email.value == "alina@gmail.com" && password.value == "22"){
        window.location = "Index.html";
		alert ("Welcome, Alina");
		return true;
      }
	  if ( email.value == "marry@gmail.com" && password.value == "33"){
        window.location = "Index.html";
		alert ("Welcome, Marry");
		return true;
      }
	  if ( email.value == "joe@gmail.com" && password.value == "44"){
        window.location = "Index.html";
		alert ("Welcome, Joe");
		return true;
      }
	  if ( email.value == "sara@gmail.com" && password.value == "55"){
        window.location = "Index.html";
		alert ("Welcome, Sara");
		return true;
      }
	  else{
	    window.location = "P5_Sign_in.html";
        alert ("Your email or password is invalid.");
		email.focus();
		email.select();
		return false;
	  }
      }
	  </script>
	 <span><b>Note:</b>
	 For administrator, Email:admin@dailyfresh.ca&nbsp;&nbsp;Password:00<br/>
	 Any of the following emails and passwords are considered as correct registered user input.<br/>
	 <p>Email:jerry@gmail.com&nbsp;&nbsp;Password:11<br/>
	    Email:alina@gmail.com&nbsp;&nbsp;Password:22<br/>
		Email:marry@gmail.com&nbsp;&nbsp;Password:33<br/>
		Email:joe@gmail.com&nbsp;&nbsp;Password:44<br/>
		Email:sara@gmail.com&nbsp;&nbsp;Password:55<br/><br/>	
	 </p></span>
	 
  </body>
</html>
